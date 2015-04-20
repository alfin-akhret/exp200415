<?php namespace JunkApp\Http\Controllers\Frontend;

use JunkApp\Http\Requests;
use JunkApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	//
	public function index(){
	 $ua = $this->userSysInfo();
	 return view('pages.home')->with('ua', $ua);
	}

	function userSysInfo(){
		$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
		return $user_agent;
	}

}
