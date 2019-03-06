<?php

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return !Auth::check() ? view('page.auth') : view('page.home');
})->name('wrapper');

Route::group(['middleware' => 'guest'], function () {
    Route::post('login', 'AuthController@login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', 'AuthController@logout');
});