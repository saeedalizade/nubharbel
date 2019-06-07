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


Route::get('ProfileUser', 'userController@ProfileUser')->name('ProfileUser');
Route::post('ProfileUser/{id}', 'userController@editProfileUser');
Route::post('newsLetter', 'newsLetterController@store')->name('newsLetter');

//Product
Route::get('product/{id}', 'categoryProductController@show')->name('product');
Route::get('productDetail/{id}','productsController@show')->name('productDetail');


Route::get('news','postsController@newsList')->name('news');
Route::get('news/{id}','postsController@show')->name('newsDetail');
Route::get('article','postsController@articleList')->name('article');
Route::get('article/{id}','postsController@articleView')->name('articleDetail');



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

    Route::get('pic/{id}','picProductController@create')->name('pic');
    Route::get('PicProduct/{id}','picProductController@index')->name('PicProduct');
    Route::post('picUpload/{id}','picProductController@store')->name('picUpload');
    Route::DELETE('deletePic/{id}','picProductController@destroy')->name('deletePic');

});