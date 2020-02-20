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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/youtube','YoutubeController@index')->name('youtube');

route::get('watch/Water-Bottle-Flip-2-|-Dude-Perfect','YoutubeController@show')->name('watch.Water-Bottle-Flip-2-|-Dude-Perfect');