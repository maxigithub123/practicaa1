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




Route::get('/','PokemonController@index');

Auth::routes(['verify' => true]);


Route::get('/home','PokemonController@main')->name('home')->middleware('verified');
Route::get('/indexPost','PostController@index')->name('indexPost')->middleware('verified');

Route::resource('pokemon', 'PokemonController');

Route::resource('post', 'PostController');


