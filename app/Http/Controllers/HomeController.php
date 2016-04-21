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
	{	$a = Auth::user()->name_first."'s year 2";
		$b = Auth::user()->name_first."'s year 3";
		$c = Auth::user()->name_first."'s year 4";
		$check = DB::table('gendata')->where('name', $a)->count();
		
		
		if($check < 1)
		{
		DB::table('gendata')->insert([
    						['student_id' => Auth::user()->student_id,'name' =>$a,'parent'=>Auth::user()->name_first,'depth'=>1,'realyear'=>1,'updated_at'=>1,'created_at'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>$b,'parent'=>$a,'depth'=>1,'realyear'=>1,'updated_at'=>1,'created_at'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>$c,'parent'=>$b,'depth'=>1,'realyear'=>1,'updated_at'=>1,'created_at'=>1,'link'=>1]
							]);
		}
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester1')
            ->update(['parent' => $a]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester2')
            ->update(['parent' => $a]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester1')
            ->update(['parent' => $b]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester2')
            ->update(['parent' => $b]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester1')
            ->update(['parent' => $c]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester2')
            ->update(['parent' => $c]);  

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
            ->update(['parent' => Auth::user()->name_first]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year2 semester2')
            ->update(['parent' => Auth::user()->name_first]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester1')
            ->update(['parent' => Auth::user()->name_first]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year3 semester2')
            ->update(['parent' => Auth::user()->name_first]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester1')
            ->update(['parent' => Auth::user()->name_first]);
        DB::table('gendata')
      		->where('student_id', Auth::user()->student_id)
      		->where('name', 'year4 semester2')
            ->update(['parent' => Auth::user()->name_first]);    
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('gendata')->where('student_id', $student_id)->select('name','parent','subject_id','link','realyear','depth')->get();
		// var_dump($article);
		if($gendata == NULL)
			return "ERROR";
		return view('page.mapstick2')->with('gendata', $gendata);
	}

		public function genedmap()
	{
		DB::table('genedmap')->where('student_id', Auth::user()->student_id)->delete();
		$first = DB::table('gendata')->where('student_id', Auth::user()->student_id)->where('parent', null)->select('subject_id','name','parent','subject_id','depth','year','realyear','link')->first();
		DB::table('genedmap')->insert([['student_id' => Auth::user()->student_id,'name' =>$first->name,'parent'=>$first->parent,'depth'=>$first->depth,'realyear'=>$first->realyear,'link'=>$first->link]]);	

		$gened = DB::table('gendata')->where('student_id', Auth::user()->student_id)->where('depth', 2)->select('subject_id','name','parent','subject_id','depth','year','realyear','link')->get();
		
		foreach($gened as $gened)
		{
		DB::table('genedmap')->insert([['student_id' => Auth::user()->student_id,'name' =>$gened->name,'parent'=>$gened->parent,'subject_id'=>$gened->subject_id,'depth'=>$gened->depth,'realyear'=>$gened->realyear,'link'=>$gened->link]]);
		}
		DB::table('genedmap')->insert([
    						
    						['student_id' => Auth::user()->student_id,'name' =>'Gened Sci','parent'=>Auth::user()->name_first,'depth'=>1,'realyear'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>'Gened Human','parent'=>Auth::user()->name_first,'depth'=>1,'realyear'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>'Gened Social','parent'=>Auth::user()->name_first,'depth'=>1,'realyear'=>1,'link'=>1],
    						['student_id' => Auth::user()->student_id,'name' =>'Gened In','parent'=>Auth::user()->name_first,'depth'=>1,'realyear'=>1,'link'=>1]
							]);

        DB::table('genedmap')
      		->where('student_id', Auth::user()->student_id)
      		->whereIn('subject_id', [201152,2100111,2101251,2102041,2100311,2105261,2107219,2107220,2107221,2110191,2110221,2111201,2111330,2112210,2142109,2300150,2300152,2300200,2301170,2302190,2303150,2303165,2304274,2305103,2305107,2305108,2305109,2305161,2306416,2307205,2307206,2308200,2308303,2308354,2309201,2310201,2312100,2313213,2313221,2313446,2314255,2314257,3010101,3141102,3141105,3141213,3200106,3200109,3200110,3301102,3304102,3306101,3307101,3305100,3305101,3309101,3309102,3310101,3600202,3600204,3600205,3600206,3600207,3600208,3600209,3640203,3700104,3700105,3700107,3700108,3700109,3700110,3700113,3700114,3705102,3705103,3741101,3741102,3741207,3742100,3742102,3742106,3743422,3900200,4000205,4000210])
            ->update(['parent' => 'Gened Sci']);
        DB::table('genedmap')
      		->where('student_id', Auth::user()->student_id)
      		->whereIn('subject_id', [123101,123104,123105,201105,201211,2200222,2200223,2200226,2200227,2200183,2200185,2200201,2200330,2200387,2200389,2200390,2200392,2200394,2200395,2200396,2204180,2206101,2206248,2206247,2207103,2207143,2207201,2207203,2207341,2207361,2207363,2207365,2207371,2207375,2207385,2207387,2207467,2207472,2207474,2207478,2209341,2209373,2209375,2210214,2210215,2210216,2210217,2210218,2210219,2210235,2210239,2210313,2210314,2210315,2210316,2210323,2210420,2210423,2221433,2221485,22223243,2226001,2231255,2232241,2232253,2235320,2234482,2236103,2236204,2244151,1501191,2501292,2501295,2501296,2501297,2501298,2501299,2502291,2502292,2502330,2502378,2502379,2502393,2502430,2541151,2541152,2541154,2541155,2541156,2541157,2541158,2541159,2541162,2541163,2541168,2541169,2542001,2542002,2722272,2722288,2736101,2737110,3500111,3501120,3501214,3501217,3501222,3501224,3502222,3502271,3502272,3503111])
            ->update(['parent' => 'Gened Human']);
        DB::table('genedmap')
      		->where('student_id', Auth::user()->student_id)
      		->whereIn('subject_id', [201170,201171,201172,2400104,2403183,2403184,2403284,1403185,2403471,2404300,2404301,2541160,2601111,2602121,2602171,2602241,2603244,2604362,2604364,2605311,2722178,2800210,2800211,2800212,2800218,2500219,2800221,2800314,2801321,2900151,2900152,2900154,3401124,3402103,3404103,3404109,3404113,3404115,3404117,3404122,3404123,3404124,3404201,3404202,3800101,3800105,3800202,3800250,3800251,3800351,4000203,4000204,4000206,4000208,4000209,5100101])
            ->update(['parent' => 'Gened Social']);
        DB::table('genedmap')
      		->where('student_id', Auth::user()->student_id)
      		->whereIn('subject_id', [201102,201103,201106,201107,201108,201109,201110,201111,201117,201121,201122,201123,201125,201127,201129,201130,201131,201141,201151,201153,201154,201200,201201,201202,201203,201204,201205,201209,201210,201230,201231,201232,201234,201251,201252,201254,201255,201256,201270,201281,2104181,2305100,2305104,2305106,2502390,2503216,2504101,2506504,2750178,3018102,3000106,3000257,3000281,3000396,3300100,3303100,3303191,3305101,3800252,3800309,3914101])
            ->update(['parent' => 'Gened In']);
       
		$student_id=Auth::user()->student_id;
		$gendata = DB::table('genedmap')->where('student_id', $student_id)->select('name','parent','subject_id','link','realyear','depth')->get();
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
		if($newdata == NULL)
			return "ERROR";
		return view('page.search')->with('newdata', $newdata);
		
	}
	public function viewall()
	{
		

		$newdata = DB::table('articles')->select('subject_id','title','id')->get();
		// var_dump($article);
		if($newdata == NULL)
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
