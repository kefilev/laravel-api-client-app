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

Route::get('home', 'HomeController@index')->name('home'); 
Route::post('access', 'ApiController@getAccess')->name('access'); //get an access token for 1 hour
Route::get('services', 'ApiController@listServices')->name('services'); //get all services
Route::get('services/{id}', 'ApiController@serviceDetails'); //get details of a single service
