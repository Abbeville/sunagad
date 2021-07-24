<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\OrderWasCreated;
use App\Events\OrderFailed;
use App\Listeners\EmptyBasket;
use App\Listeners\UpdateStock;
use App\Listeners\MarkOrderPaid;
use App\Listeners\RecordSuccessfulPayment;
use App\Listeners\RecordFailedPayment;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        OrderWasCreated::class => [
            MarkOrderPaid::class,
            RecordSuccessfulPayment::class,
            UpdateStock::class,
            EmptyBasket::class,
        ],

        OrderFailed::class => [
            RecordFailedPayment::class
        ]

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
