<?php namespace JunkApp\Http\Controllers\Frontend;

use JunkApp\Http\Requests;
use JunkApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	//
	public function about(){

		$people = [
			'taylor otwell', 'jefrey way', 'alfin akhret'
		];
		
		// $people = [];
		
		$data = [
			'name' => 'alfin',
			'age' => 29,
		];
	

	 // return view('pages.about', $data);
	 return view('pages.about', compact('data', 'people'));
	 
	}

	public function contact(){
	 return view('pages.contact');
	}
}
