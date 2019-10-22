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

Route::get('main/','PrimerController@primeravista');

Route::get('login/','PrimerController@vistaLogin');

Route::post('do/login/','PrimerController@vistaLoginHecho');

Route::get('forgotten/','PrimerController@forgotten');

Route::post('do/forgotten/','PrimerController@forgottenHecho');
