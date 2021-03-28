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

//Route::group([
//    'middleware' => 'auth'
//], function() {
//    Route::get('/', 'WelcomeController@index')->name('welcome');
//    Route::get('/logout', function () {
//        Auth::logout();
//        return redirect()->route('login.index');
//    })->name('logout');
//});
//
//Route::group([
//    'middleware' => 'guest'
//], function () {
//    Route::get('/sign-in', 'LoginController@index')->name('login.index');
//    Route::post('/sign-in', 'LoginController@attemptLogin')->name('login.attempt');
//    Route::post('/verify', 'LoginController@verifyLogin')->name('login.verify');
//});

Route::group([
   'prefix' => 'admin',
   'namespace' => 'Admin'
], function() {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::group([
       'prefix' => 'categories',
        'namespace' => 'Category'
    ], function() {
        Route::get('/', 'IndexController@index')->name('admin.categories.index');
        Route::get('/create', 'CreateController@index')->name('admin.categories.create');
        Route::post('/', 'StoreController@main')->name('admin.categories.store');
        Route::get('/edit/{id}', 'EditController@getEdit')->name('admin.categories.edit');
        Route::post('/edit/{id}', 'EditController@postEdit')->name('admin.categories.update');
        Route::get('delete/{id}', 'DeleteController@getDelete')->name('admin.categories.destroy');
    });

    Route::group([
        'prefix' => 'products',
        'namespace' => 'Product'
    ], function() {
        Route::get('/', 'IndexController@main')->name('admin.products.index');
        Route::get('/create', 'CreateController@main')->name('admin.products.create');
        Route::post('/', 'StoreController@main')->name('admin.products.store');
    });
});
Route::group([
    'namespace' => 'User'
 ], function() {
    Route::get('/index', 'HomeController@index')->name('user.index');
    Route::group([
        'prefix' => 'product',
         'namespace' => 'Product'
    ], function() {
        Route::get('/single-product', 'ProductController@singleProduct')->name('user.product.single');
        Route::get('/list-product', 'ProductController@listProduct')->name('user.product.list');
    });
});

