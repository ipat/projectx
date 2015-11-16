<?php namespace App\Http\Controllers;

use DB;

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
	public function detail($id)
	{
		$article = DB::table('articles')->where('id', $id)->first();
		// var_dump($article);
		if($article == NULL)
			return "ERROR";
		return view('page.detail')->with('article', $article);
	}
	public function mapstick()
	{
		return view('page.mapstick');
	}
	public function mapstick2()
	{
		return view('page.mapstick2');
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
}
