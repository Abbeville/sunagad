<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;

use App\Basket\Basket;
use App\Support\Storage\SessionStorage;
use App\Models\Product;
use Braintree;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Basket::class, function ($c){
            return new Basket($c->get(SessionStorage::class), $c->get(Product::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('mon', function ($money) {
            return "<?php echo '₦ ' . number_format($money, 2); ?>";
        });

        Blade::if('role', function ($role) {
            $user = auth()->user();
            return $user->hasRole($role);
        });

        view()->share('basket', $this->app->make(Basket::class));

        Braintree\Configuration::environment(env('BRAINTREE_ENV', 'sandbox'));
        Braintree\Configuration::merchantId(env('BRAINTREE_MERCHANT_ID', 'm26fkqhzghwpv5d6'));
        Braintree\Configuration::publicKey(env('BRAINTREE_PBK','kvnc4cznv3yhq62x'));
        Braintree\Configuration::privateKey(env('BRAINTREE_SCK', 'ed053e463d22159a5c5761930dcf94f5'));

        
    }
}
