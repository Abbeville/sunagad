<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::group(['prefix' => 'users'], function(){
        Route::get('', 'UserController@index')->name('admin.users.index');
        Route::get('archived', 'UserController@archived')->name('admin.users.archived');
        Route::get('create', 'UserController@create')->name('admin.users.create');
        Route::post('store', 'UserController@store')->name('admin.users.store');
        Route::get('edit/{id}', 'UserController@edit')->name('admin.users.edit');
        Route::post('update/{id}', 'UserController@update')->name('admin.users.update');
        // Route::post('update-thumbnail/{id}', 'usersController@updateThumbnail')->name('admin.users.update-thumbnail');
    });

    Route::group(['prefix' => 'users'], function(){
        Route::get('/all', 'UserController@index')->name('user.all');
    });

    Route::group(['prefix' => 'categories', 'name' => 'admin'], function(){
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.all');
        Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/delete/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin.category.delete');
    });

     Route::group(['prefix' => 'products', 'name' => 'admin'], function(){
        Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.all');
        Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/delete/{product}', [App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('admin.product.delete');
    });

    Route::group(['prefix' => 'votes', 'name' => 'admin'], function(){
        Route::get('/', 'VoteController@index')->name('admin.vote.all');
        Route::get('/winner', 'VoteController@winner')->name('admin.vote.winner');
        Route::get('/start', 'VoteController@start')->name('admin.vote.start');
        Route::get('/end', 'VoteController@end')->name('admin.vote.end');
    });
});