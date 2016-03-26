<?php namespace App\Http\Controllers;

use DB;
use Auth;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	public function genmap()
	{
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->select('name','parent','subject_id','realyear','depth')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.genmap')->with('gendata', $gendata);
	}
	public function delete($link)
	{
		$student_id=Auth::user()->student_id;
		$a=DB::table('gendata')->where('student_id', $student_id)->where('link',$link)->count();
		DB::table('gendata')->where('student_id', $student_id)->where('link',$link)->delete();
		// var_dump($article);

		if($a == NULL)
			return "ERROR";
		$gendata = DB::table('gendata')->where('student_id', $student_id)->where('depth','=',2)->select('subject_id','name','link','parent')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.mysubject')->with('gendata', $gendata);
	}
	public function detail($id)
	{
		$article = DB::table('articles')->where('id', $id)->first();
		// var_dump($article);
		if($article == NULL)
			return "ERROR";
		return view('page.detail')->with('article', $article);
	}
	public function mysubject()
	{
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->where('depth','=',2)->select('subject_id','name','link','parent')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.mysubject')->with('gendata', $gendata);
	}
	public function mapstick()
	{
		return view('page.mapstick');
	}
	public function mapstick2()
	{
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->select('name','parent','subject_id','link','realyear','depth')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		
		return view('page.mapstick2')->with('gendata', $gendata);
	}
	public function yourfullfunctionmap()
	{
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->select('name','parent','subject_id','link','realyear','depth')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		
		return view('page.yourfullfunctionmap')->with('gendata', $gendata);
	}
	public function timeline()
	{
		DB::table('gendata')->insert([
    						['student_id' => Auth::user()->student_id,'name' =>'year2','parent'=>'nobpo','depth'=>1,'realyear'=>1,'updated_at'=>1,'created_at'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>'year3','parent'=>'year2','depth'=>1,'realyear'=>1,'updated_at'=>1,'created_at'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>'year4','parent'=>'year3','depth'=>1,'realyear'=>1,'updated_at'=>1,'created_at'=>1,'link'=>1],
							]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester1')
            ->update(['parent' => 'year2']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester2')
            ->update(['parent' => 'year2']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester1')
            ->update(['parent' => 'year3']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester2')
            ->update(['parent' => 'year3']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester1')
            ->update(['parent' => 'year4']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester2')
            ->update(['parent' => 'year4']);  

		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->select('name','parent','subject_id','link','realyear','depth')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.mapstick2')->with('gendata', $gendata);
	}

	public function listview()
	{
		DB::table('gendata')->where('student_id', Auth::user()->student_id)->where('realyear', 1)->delete();
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester1')
            ->update(['parent' => 'nobpo']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester2')
            ->update(['parent' => 'nobpo']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester1')
            ->update(['parent' => 'nobpo']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester2')
            ->update(['parent' => 'nobpo']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester1')
            ->update(['parent' => 'nobpo']);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester2')
            ->update(['parent' => 'nobpo']);    
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->select('name','parent','subject_id','link','realyear','depth')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.mapstick2')->with('gendata', $gendata);
	}


	public function map2()
	{
		return view('page.map2');
	}

	public function fullfunctionmap()
	{
		return view('page.fullfunctionmap');
	}
	public function mapinbox()
	{
		return view('page.mapinbox');
	}
	public function mapp()
	{
		return view('page.mapp');
	}
	public function mapcircle()
	{
		return view('page.mapcircle');
	}
	
	public function map()
	{
		return view('page.map');
	}

	public function pie()
	{
		return view('page.pie');
	}
	public function li()
	{
		return view('page.li');
	}
	public function addcontent()
	{
		return view('page.addcontent');
	}
	public function gradecal()
	{
		return view('page.gradecal');
	}
	public function addsubject()
	{
		return view('page.addsubject');
	}
	public function addprereg()
	{
		return view('page.addprereg');
	}
	public function addsubjectprereg()
	{
		return view('page.addsubjectprereg');
	}
	//search broken
	public function search()
	{
		$data['data'] = Input::get('data');

		$newdata = DB::table('articles')->where('subject_id', $data)->orWhere('title', $data)->select('subject_id','title','id')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.search')->with('newdata', $newdata);
		
	}
	// public function postaddcontent()
	// {
	// 	// $rules = array(
	// 	// "id" => "required|unique:articles",
	// 	// "subject_id" => "required",
	// 	// "title" => "required");

	// 	// $validation = Validator::make(Input::all(), $rules);

	// 	// if($validation->fails()){
	// 	// return Redirect::to('/addcontent')->withErrors($validation)->withInput();
	// 	// }

	// 	$articles = new articles;
	// 	$articles->id = Input::get('id');
	// 	$articles->subject_id = Input::get('subject_id');
	// 	$articles->title = Input::get('title');
	// 	$articles->body1 = Input::get('body1');
	// 	$articles->body1 = Input::get('body2');
	// 	$articles->body1 = Input::get('body3');
	// 	$articles->body1 = Input::get('body4');
	// 	$articles->comment = Input::get('comment');
		
	// 	if($articles->save()) return Redirect::to('/addcontent')->with('notify', 'ลงทะเบียนสำเร็จแล้ว');

	// 	return Redirect::to('/addcontent')->with('notify', 'Error');
	// }

}
