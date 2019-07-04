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

Route::group(['prefix' => 'user'], function () {
    Route::get('list', function () {
        return view('users.list');
    })->name('user-list');
    Route::get('add', function () {
        return view('users.add');
    })->name('user-add');
    Route::get('update', function () {
        return view('users.update');
    })->name('user-update');
    Route::get('delete', function () {
        return "Go to process to delete the user....";
    })->name('user-delete');
});