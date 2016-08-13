<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    
    factory(App\Event::class, 'test', 20)->create()->each(function($event) {
      $event->featured = TRUE;
      $event->save();
    });

    factory(App\Event::class, 'test', 20)->create()->each(function($event) {
      $event->featured = FALSE;
      $event->save();
    });
  }
}
