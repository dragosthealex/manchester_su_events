<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

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
    return json_encode(['status'=>'success', 'message'=>'', 'data'=>$events]);
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
      return json_encode(['status'=>'error', 'message'=>'Invalid event.', 'data'=>'']);
    }

    return json_encode(['status'=>'success', 'message'=>'', 'data'=>$event]);
  }

}