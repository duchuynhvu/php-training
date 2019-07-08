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

Route::get('/', function () {
    return view('welcome');
});


Route::get('user', 'UserController@index')->name('user');
Route::get('user/{id}', 'UserController@showInfo')->name('user.info');
Route::get('create-user', 'UserController@create')->name('user.create');
Route::get('user/update/{id}', 'UserController@update')->name('user.update');
Route::get('user/delete/{id}', 'UserController@destroy')->name('user.delete');
Route::post('user/store', 'UserController@store')->name('user.store');


Route::group(['prefix' => 'category'], function () {
    Route::get('/', 'CategoryController@index')->name('category');
    Route::get('/create', function () {
        return view('categories.add');
    })->name('category.create');
    Route::get('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/delete/{id}', 'CategoryController@destroy')->name('category.delete');
    Route::post('/store', 'CategoryController@store')->name('category.store');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', 'ProductController@index')->name('product');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::get('/update/{id}', 'ProductController@update')->name('product.update');
    Route::get('/delete/{id}', 'ProductController@destroy')->name('product.delete');
    Route::post('/store', 'ProductController@store')->name('product.store');
});