<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
        Route::post('/logout',[AdminController::class,'logout'])->name('admin.logout');
    });
});
