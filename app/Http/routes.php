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
Route::get('addcontent', 'HomeController@addcontent');

// Route::post('addcontent', 'HomeController@postaddcontent');
Route::post('addcontent', function()
{

		
		$articles['id'] = Input::get('id');
		$articles['subject_id'] = Input::get('subject_id');
		$articles['title'] = Input::get('title');
		$articles['body1'] = Input::get('body1');
		$articles['body2'] = Input::get('body2');
		$articles['body3'] = Input::get('body3');
		$articles['body4'] = Input::get('body4');
		$articles['comment'] = Input::get('comment');
		$articles['created_at'] = 1;
		$articles['updated_at'] = 1;

		DB::table('articles')->insert($articles);
		return Redirect::to('/addcontent')->with('notify', 'เสร็จสิ้น');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
