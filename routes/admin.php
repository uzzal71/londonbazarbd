<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    dd('Welcome to admin user routes.');
});

Route::group(['middleware' => ['auth:admin']], function () {
   Route::get('/dashboard', function () {
        dd('Welcome to admin user routes.');
    });
});