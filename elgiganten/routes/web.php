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


Route::get('/phones', 'PhonesController@index');

Route::get('/phones/{phone}', 'PhonesController@show');


Route::get('/', function () {

	return view('welcome');
});
