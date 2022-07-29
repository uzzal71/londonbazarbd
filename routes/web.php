<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OthersController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/returns-and-refunds-policy', [OthersController::class, 'return_policy'])->name('returns.policy');
Route::get('/terms-and-condition', [OthersController::class, 'terms_condition'])->name('terms.condition');
Route::get('/privacy-policy', [OthersController::class, 'privacy_policy'])->name('privacy.policy');
