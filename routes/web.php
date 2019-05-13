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

Auth::routes();

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('home');
Route::get('ProductList/{id}', 'categoryProductController@show')->name('ProductList');


Route::group (['prefix' => 'admin'], function () {

    Route::get ('sadmin', ['as' => 'sadmin', 'uses' => 'adminsController@index']);
    Route::get ('dashboard', 'adminsController@dashboard')->name ('dashboard');
    Route::post ('checkLogin', 'adminsController@checkLogin')->name ('checkLogin');
    Route::get ('Logout', 'adminsController@Logout')->name ('Logout');

    Route::resource('ListUsers', 'adminUsersController');

    Route::resource('UserProfile', 'adminUserProfileController');

    Route::resource('Slider', 'slideshowController');

    Route::resource('Post', 'PostsController');

    Route::resource('Product', 'productsController');

    Route::resource('CategoryProduct', 'categoryProductController');

});