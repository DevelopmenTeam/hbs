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

Route::get('/', "HBSController@index");
Route::post('/modal', "HBSController@Modal");
Route::get('/modal-view/{id}', "HBSController@ModalView");

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
