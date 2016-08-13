<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use App\Category;
use App\Photo;
use App\User;
use App\Tag;

class EventController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    
    $events = Event::with('author')
                   ->with('photos')
                   ->with('cover')
                   ->with('tags')
                   ->with('category')
                   ->get();

    return view('admin.events.index')
              ->with('events', $events);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    
  }

  /**
   * Display the specified event by id or slug.
   *
   * @param  mixed  int / string
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    
    $event = Event::find($id);

    // Try by slug
    if(!$event) {
      $event = Event::where('slug', $slug);
    }

    // Abandon ship
    if(!$event) {
      abort(404);
    }

    // Yoy
    return view('admin.events.show')
          ->with('event', $event);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id) {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    
  }
}
