<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Helpers\JsonHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    
    $events = Event::all();
    return JsonHelper::success($events);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {

    $event = Event::find($id);

    if(!$event) {
      return JsonHelper::error("Invalid event.");
    }

    return JsonHelper::success($event);
  }

}