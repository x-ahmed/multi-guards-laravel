<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "['web', 'theme:admin']" middleware group, "admin" URL prefix,
| and "admin." route name. Now create something great!
|
*/

Route::group(['middleware' => 'auth:admin'], function () {
    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
    Route::view('home', 'home')->name('home');
});

Route::post('login', [AuthController::class, 'store'])->name('login');
Route::view('login', 'auth.login')->name('login');
