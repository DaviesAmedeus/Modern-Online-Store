<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Account\AccountCartController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminLocationController;
use App\Http\Controllers\Account\AccountOrderController;
use App\Http\Controllers\Account\AccountSalesController;
use App\Http\Controllers\Account\AccountBalanceController;
use App\Http\Controllers\Account\AccountProductController;

/* >>>>>>>>>>> PUBLIC ROUTES <<<<<<<<< */

    // login & logout routes
    Auth::routes();

    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'index')->name('home.index');
        Route::get('/about', 'about')->name('home.about');
    });

    Route::controller(ProductsController::class)->group(function(){
        Route::get('/products', 'index')->name('product.index');
        Route::get('/products/{id}/show', 'show')->name('product.show');
    });


    Route::controller(AccountCartController::class)->group(function(){
        Route::get('/account/cart', 'index')->name('account.cart.index');
        Route::get('/account/cart/delete', 'delete')->name('account.cart.delete');
        Route::post('/account/cart/{id}/add', 'add')->name('account.cart.add');

        // User will require to be registered to purchase a product 
        Route::get('/account/cart/purchase', 'purchase')->middleware('auth')->name('account.cart.purchase');
        
    });

/* >>>>>>>>>>> ADMIN ROUTES <<<<<<<<< */

    Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('admin')->name('admin.home.index');

    // user management routes
    Route::middleware('admin')->controller(AdminUserController::class)->group(function(){
        Route::get('/admin/user', 'index')->name('admin.users.index');
        Route::post('/admin/user/store', 'store')->name('admin.category.store');
        Route::get('/admin/user/{id}/edit', 'edit')->name('admin.category.edit');
        Route::put('/admin/user/{id}/update', 'update')->name('admin.category.update');
        Route::delete('/admin/user/{id}/delete', 'delete')->name('admin.category.delete');
    });



    // Product category routes
    Route::middleware('admin')->controller(AdminCategoryController::class)->group(function(){
        Route::get('/admin/category', 'index')->name('admin.category.index');
        Route::post('/admin/category/store', 'store')->name('admin.category.store');
        Route::get('/admin/category/{id}/edit', 'edit')->name('admin.category.edit');
        Route::put('/admin/category/{id}/update', 'update')->name('admin.category.update');
        Route::delete('/admin/category/{id}/delete', 'delete')->name('admin.category.delete');
    });


    // Product location routes
    Route::middleware('admin')->controller(AdminLocationController::class)->group(function(){
        Route::get('/admin/location', 'index')->name('admin.location.index');
        Route::post('/admin/location/store', 'store')->name('admin.location.store');
        Route::get('/admin/location/{id}/edit', 'edit')->name('admin.location.edit');
        Route::put('/admin/location/{id}/update', 'update')->name('admin.location.update');
        Route::delete('/admin/location/{id}/delete', 'delete')->name('admin.location.delete');
    });


/** >>>>>>>>>>> AUTHENTICATED USER  ROUTES <<<<<<<<< */

    // TODO: may be later change the controller from AccountProductController to UserAccountProductController eg: name(user_account.product.index)
    // user product routes
    Route::middleware('auth')->controller(AccountProductController::class)->group(function(){
        Route::get('/account/product', 'index')->name('account.product.index');
        Route::post('/account/product/store', 'store')->name('account.product.store');
        Route::get('/account/product/{id}/edit', 'edit')->name('account.product.edit');
        Route::put('/account/product/{id}/update', 'update')->name('account.product.update');
        Route::delete('/account/product/{id}/delete', 'delete')->name('account.product.delete');
    });

    // user product order routes
    Route::middleware('auth')->controller(AccountOrderController::class)->group(function(){
        Route::get('account/order', 'index')->name('account.order.index');
    });

    // user sales
    Route::middleware('auth')->controller(AccountSalesController::class)->group(function(){
        Route::get('/account/sales', 'sales')->name('account.sales');
    });

    Route::middleware('auth')->controller(AccountBalanceController::class)->group(function(){
        Route::get('/account/balance', 'index')->name('account.balance.index');
    });


