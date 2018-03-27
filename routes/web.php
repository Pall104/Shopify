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

Route::get('/home','Web\HomeController@getHomePage');
Route::get('/sign-up','Web\HomeController@getSignup');
Route::get('/balloons','Web\HomeController@getBalloons');
Route::get('/drumkit','Web\HomeController@getDrumKitPage');
Route::get('/js-clock','Web\HomeController@getJsClock');
