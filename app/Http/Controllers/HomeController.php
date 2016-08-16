<?php

namespace App\Http\Controllers;

use App\Event;
use DB;
use Eloquent;
use Illuminate\Support\Collection;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events_json = json_decode(file_get_contents('events.json'), 1);

    Eloquent::unguard();
    $events = new Collection;
    foreach ($events_json as $key => $events_json) {
      $event = new Event($events_json);
      $events->push($event);
    }
    Eloquent::reguard();

    return view('pages.home')
    				->with('events', $events);
		// return view('pages.home')
		// 			->with('events', Event::whereDate('date_start', '>', date('Y-m-d'))->get());
	}
}