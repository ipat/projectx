<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


Route::get('entersite', 'WelcomeController@entersite');
Route::get('home', 'HomeController@index');
Route::get('map', 'HomeController@map');
Route::get('circle', 'WelcomeController@circle');
Route::get('detail/{id}', 'HomeController@detail');
Route::get('mapstick', 'HomeController@mapstick');
Route::get('mapstick2', 'HomeController@mapstick2');
Route::get('map2', 'HomeController@map2');
Route::get('fullfunctionmap', 'HomeController@fullfunctionmap');
Route::get('mapinbox', 'HomeController@mapinbox');
Route::get('mapp', 'HomeController@mapp');
Route::get('mapcircle', 'HomeController@mapcircle');
Route::get('pie', 'HomeController@pie');
Route::get('li', 'HomeController@li');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
