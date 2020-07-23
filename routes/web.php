<?php

use Illuminate\Support\Facades\Auth;
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

Route::group([
    'middleware' => 'auth'
], function() {
    Route::get('/', 'WelcomeController@index')->name('welcome');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login.index');
    })->name('logout');
});

Route::group([
    'middleware' => 'guest'
], function () {
    Route::get('/sign-in', 'LoginController@index')->name('login.index');
    Route::post('/sign-in', 'LoginController@attemptLogin')->name('login.attempt');
    Route::post('/verify', 'LoginController@verifyLogin')->name('login.verify');
});
