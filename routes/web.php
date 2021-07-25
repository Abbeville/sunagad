<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('layouts.master');
});
*/
Auth::routes();

// Route::get('/admin', [App\Http\Controllers\RedirectController::class, 'login'])->name('admin');

Route::get('/redirect', [App\Http\Controllers\RedirectController::class, 'index'])->name('redirect');

Route::get('session', function(){
    dd($_SESSION['default']);
});

Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::get('products/{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

Route::get('/cart', ['App\Http\Controllers\CartController', 'index'])->name('cart.index');
Route::post('/cart/add', ['App\Http\Controllers\CartController', 'add'])->name('cart.add');
Route::get('/cart/remove/{product}', ['App\Http\Controllers\CartController', 'remove'])->name('cart.remove');
Route::post('/cart/update/{slug}', ['App\Http\Controllers\CartController', 'update'])->name('cart.update');

Route::get('/order', ['App\Http\Controllers\OrderController', 'index'])->name('order.index');
Route::get('/order/{hash}', ['App\Http\Controllers\OrderController', 'show'])->name('order.show');
Route::post('/order/create', ['App\Http\Controllers\OrderController', 'create'])->name('order.create');

Route::get('/braintree/token', ['App\Http\Controllers\BraintreeController', 'token'])->name('braintree.token');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], base_path('routes/admin_routes.php'));
