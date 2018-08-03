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

Route::get('/', 'UserController@show');

Route::post('send-data', 'UserController@getUsername') -> name('send-data');

Route::match(['get', 'post'], 'test', 'QuestionController@showTest') -> name('test');

Route::get('rating', 'UserController@showRating') -> name('rating');

