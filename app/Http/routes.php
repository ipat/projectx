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
Route::get('genmap', 'HomeController@genmap');
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
Route::get('addsubject', 'HomeController@addsubject');
Route::get('addsubjectprereg', 'HomeController@addsubjectprereg');
Route::get('timeline', 'HomeController@timeline');
Route::get('listview', 'HomeController@listview');
Route::get('mysubject', 'HomeController@mysubject');
Route::get('yourfullfunctionmap', 'HomeController@yourfullfunctionmap');
Route::get('delete/{link}', 'HomeController@delete');
Route::get('search', 'HomeController@search');
// Route::post('addcontent', 'HomeController@postaddcontent');

Route::post('delete', function()
{

}
	);
//search broken
Route::post('/', function()
{
	$data['data'] = Input::get('data');

	$newdata = DB::table('articles')->where('subject_id', $data)->orWhere('title', $data)->select('subject_id','title','id')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.search')->with('newdata', $newdata);	
}
	);
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
		$articles['created_at'] = date("Y-m-d H:i:s");
		$articles['updated_at'] = date("Y-m-d H:i:s");

		DB::table('articles')->insert($articles);
		return Redirect::to('/addcontent')->with('notify', 'เสร็จสิ้น');
});
Route::post('addsubject', function()
{

		//$gendata['id'] = '15';
		
		$gendata['student_id'] = Auth::user()->student_id;
		$gendata['subject_id'] = Input::get('subject_id');
		$gendata['name'] = Input::get('name');
		$gendata['parent'] = Input::get('parent');
		$gendata['depth'] = 2;
		$gendata['year'] = null;
		$gendata['realyear'] = null;
		$gendata['link'] = Input::get('subject_id');
		$gendata['created_at'] = date("Y-m-d H:i:s");
		$gendata['updated_at'] = date("Y-m-d H:i:s");

		$check_aval = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('parent', Auth::user()->name_first)
										->where('name', Input::get('parent'))->count(); 

				if($check_aval <= 0) {
					DB::table('gendata')->insert([
							'student_id' => $gendata['student_id'],
							'name' => $gendata['parent'],
							'parent' => Auth::user()->name_first,
							'depth' => 1,
							'created_at' => date("Y-m-d H:i:s"),
							'updated_at' =>date("Y-m-d H:i:s")
					]);
				}

		$postData = Input::all();
		 $messages = [
         		 'subject_id.integer' => 'need integer value',
		         
		     ];
		    $rules = [
		      'subject_id' => 'required|integer',
		      
		    ];

		    // doing the validation, passing post data, rules and the messages
		    $validator = Validator::make($postData, $rules, $messages);
		    if ($validator->fails()) {
		      // send back to the page with the input data and errors
		      return Redirect::to('/addsubject')->with('error', 'error');
		    }
		    else {
			   // Do your stuff here.
		      // send back to the page with success message
		      

		    	
				DB::table('gendata')->insert($gendata);
				return Redirect::to('/addsubject')->with('notify', 'success');

		     
		    

		    }
		  
		
		

		// $check_aval = DB::table('gendata')->where('student_id', Auth::user()->student_id)
		// 								->where('parent', Auth::user()->name)
		// 								->where('name', $gendata['parent'])->count(); 
		// if($check_aval <= 0) {
		// 	DB::table('gendata')->insert([
		// 			'student_id' => $gendata['student_id'],
		// 			'name' => $gendata['parent'],
		// 			'parent' => Auth::user()->name_first,
		// 			'depth' => 1,
		// 			'created_at' => date("Y-m-d H:i:s"),
		// 			'updated_at' =>date("Y-m-d H:i:s")
		// 	]);
		// }
		// DB::table('gendata')->insert($gendata);
		// return Redirect::to('/addsubject')->with('notify', 'success');
});

Route::post('addsubjectprereg', function()
{

		//$gendata['id'] = '15';
		
		$gendata['student_id'] = Auth::user()->student_id;
		$gendata['subject_id'] = Input::get('subject_id');
		$gendata['name'] = Input::get('subject_id');
		$gendata['parent'] = Input::get('parent');
		$gendata['depth'] = 2;
		$gendata['year'] = null;
		$gendata['realyear'] = null;
		$gendata['link'] = Input::get('subject_id');
		$gendata['created_at'] = date("Y-m-d H:i:s");
		$gendata['updated_at'] = date("Y-m-d H:i:s");


		$check_pre = DB::table('prereg')->where('subject_id', Input::get('subject_id'))->count();
		$prereg = DB::table('prereg')->where('subject_id', Input::get('subject_id'))->select('subject_id','number','prereg1','prereg2','prereg3')->first();
		

		if($check_pre == 1){
					if ($prereg->number==1) {
						$check_sub = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('name', $prereg->prereg1)->count();
						if ($check_sub < 1) {

							 return  Redirect::to('/addsubjectprereg')->with('missing', $prereg->prereg1);
						}
					}
					else if ($prereg->number==2) {
						$check_sub1 = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('name', $prereg->prereg1)->count();
						$check_sub2 = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('name', $prereg->prereg2)->count();

						$check_sub = $check_sub1+$check_sub2;
						if ($check_sub < 2) {
							 return Redirect::to('/addsubjectprereg')->with('missing', $prereg->prereg1);
						}
					}
					else if ($prereg->number==3) {
						$check_sub1 = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('name', $prereg->prereg1)->count();
						$check_sub2 = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('name', $prereg->prereg2)->count();
						$check_sub3 = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('name', $prereg->prereg3)->count();

						$check_sub = $check_sub1+$check_sub2+$check_sub3;
						if ($check_sub < 3) {
							 return Redirect::to('/addsubjectprereg')->with('error', 'need some subject before');
						}
					}
		}
		
		$check_aval = DB::table('gendata')->where('student_id', Auth::user()->student_id)
										->where('parent', Auth::user()->name_first)
										->where('name', Input::get('parent'))->count(); 

				if($check_aval <= 0) {
					DB::table('gendata')->insert([
							'student_id' => $gendata['student_id'],
							'name' => $gendata['parent'],
							'parent' => Auth::user()->name_first,
							'depth' => 1,
							'created_at' => date("Y-m-d H:i:s"),
							'updated_at' =>date("Y-m-d H:i:s")
					]);
				}

		$postData = Input::all();
		 $messages = [
         		 'subject_id.integer' => 'need integer value',
		         
		     ];
		    $rules = [
		      'subject_id' => 'required|integer',
		      
		    ];

		    // doing the validation, passing post data, rules and the messages
		    $validator = Validator::make($postData, $rules, $messages);
		    if ($validator->fails()) {
		      // send back to the page with the input data and errors
		      return Redirect::to('/addsubjectprereg')->with('error', 'error');
		    }
		    else {
			   // Do your stuff here.
		      // send back to the page with success message
		      

		    	
				DB::table('gendata')->insert($gendata);
				return Redirect::to('/addsubjectprereg')->with('notify', 'success');

		     
		    

		    }
		  
		
		

		// $check_aval = DB::table('gendata')->where('student_id', Auth::user()->student_id)
		// 								->where('parent', Auth::user()->name)
		// 								->where('name', $gendata['parent'])->count(); 
		// if($check_aval <= 0) {
		// 	DB::table('gendata')->insert([
		// 			'student_id' => $gendata['student_id'],
		// 			'name' => $gendata['parent'],
		// 			'parent' => Auth::user()->name_first,
		// 			'depth' => 1,
		// 			'created_at' => date("Y-m-d H:i:s"),
		// 			'updated_at' =>date("Y-m-d H:i:s")
		// 	]);
		// }
		// DB::table('gendata')->insert($gendata);
		// return Redirect::to('/addsubject')->with('notify', 'success');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
