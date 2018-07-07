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

Route::get('/id{num?}', "UserController@showMessage")
->where('num', '[0-9]+');

Route::get('form', 'UserController@showForm');


Route::post('form', 'UserController@store')->name('storeForm');
