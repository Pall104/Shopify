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
Route::get('/drag','Web\HomeController@getDragNDrop');
Route::get('/css-update','Web\HomeController@getCssUpdate');
Route::get('/array-cardio','Web\HomeController@getArrayCardio');
Route::get('/twinkle','Web\HomeController@getTwinkle');
Route::get('/flex-panel','Web\HomeController@getFlexPanel');
Route::get('/search','Web\HomeController@getAjaxStep');
Route::get('/cardio2','Web\HomeController@getCardio');
Route::get('/html-canvas','Web\HomeController@getHtmlCanvas');
Route::get('/dev-tools','Web\HomeController@getDevTools');
Route::get('/hold-shift','Web\HomeController@getHoldShift');