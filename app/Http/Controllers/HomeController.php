<?php

namespace App\Http\Controllers;

use App\Event;
use DB;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home')
					->with('events', Event::whereDate('date_start', '>', date('Y-m-d'))->get());
	}
}