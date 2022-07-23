<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StoreController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'web'], function () {  
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/','admin.login')->name('admin.login');
          Route::post('/check',[AdminController::class,'check'])->name('admin.check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','admin.home')->name('admin.home');
        Route::get('/administrator', 'Admin\AdminController@index')->name('admin.listing');
        Route::get('/system/information', 'Admin\SystemController@index')->name('app.system');
        Route::post('/logout',[AdminController::class,'logout'])->name('admin.logout');


        Route::resource('store', 'Admin\StoreController');
        Route::resource('categories', 'Admin\CategoryController');
        Route::resource('products', 'Admin\ProductController');
        Route::resource('brands', 'Admin\BrandController');
        Route::resource('stocks', 'Admin\StockController');
        Route::resource('orders', 'Admin\OrderController');
        Route::resource('customers', 'Admin\CustomerController');
    });
});
