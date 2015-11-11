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
Route::get('map', 'WelcomeController@map');
Route::get('circle', 'WelcomeController@circle');
Route::get('detail/{id}', 'HomeController@detail');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
