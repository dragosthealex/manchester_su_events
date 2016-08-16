<?php

use Illuminate\Database\Seeder;

class WelcomeWeekEventsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_address"  =>  "Students' Union",
      "location_name"     =>  "Students' Union foyer",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Kingsman: The Secret Service",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: International Students",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "18:30",
      "time_end"          =>  "20:30",
      "title"             =>  "Activities at The Union",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-16",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-16",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Frozen",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-16",
      "time_start"        =>  "19:00",
      "time_end"          =>  "21:00",
      "title"             =>  "World Quiz",
      "location_name"     =>  "Club Academy, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-17",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-17",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Spectre",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-17",
      "time_start"        =>  "21:00",
      "time_end"          =>  "2:00",
      "title"             =>  "Mingle After Hours",
      "location_name"     =>  "Union Bar, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "14:00",
      "time_end"          =>  "18:00",
      "title"             =>  "Culture and Faith Fair",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Back to the Future",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "8:00",
      "time_end"          =>  "16:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8, Students’ Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Labyrinth",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: Black and Minority Ethnic Students",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "18:00",
      "time_end"          =>  "20:00",
      "title"             =>  "Let's Get Quizzical",
      "location_name"     =>  "Union Bar, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "8:00",
      "time_end"          =>  "18:00",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Welcome Fair",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Hot Fuzz",
      "location_name"     =>  "Academy 3, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: LGBTQ",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "8:00",
      "time_end"          =>  "12:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "14:30",
      "time_end"          =>  "18:00",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Welcome Fair",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "13:00",
      "time_end"          =>  "14:30",
      "title"             =>  "Conversation Corner: Mature Students and Student Parents",
      "location_name"     =>  "Room 8, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Eddie the Eagle",
      "location_name"     =>  "Academy 3, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Star Wars Episode VII - The Force Awakens",
      "location_name"     =>  "Renold Building, C16",
      "location_address"  =>  "Renold Building",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: Women Students",
      "location_name"     =>  "Council Chambers. Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "8:00",
      "time_end"          =>  "12:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "14:30",
      "time_end"          =>  "16:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Sports and Physical Activities fair",
      "location_name"     =>  "Manchester Academy",
      "location_address"  =>  "Manchester Academy",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "11:00",
      "time_end"          =>  "",
      "title"             =>  "Northern Quarter Café Crawl",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "12:30",
      "time_end"          =>  "14:30",
      "title"             =>  "Talking 'bout my education",
      "location_name"     =>  "Room 2, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "13:00",
      "time_end"          =>  "14:30",
      "title"             =>  "Conversation Corner: Students with Disabilities",
      "location_name"     =>  "Room 8, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: Postgraduate Students",
      "location_name"     =>  "Room 8, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: The Imitation Game",
      "location_name"     =>  "Council Chambers, Students' Union (68)",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Outdoor Food Market",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "12:00",
      "time_end"          =>  "",
      "title"             =>  "Grub Club",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "13:30",
      "time_end"          =>  "",
      "title"             =>  "Grub Club",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "15:00",
      "time_end"          =>  "",
      "title"             =>  "Grub Club",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at Five: The Lego Movie",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "19:00",
      "time_end"          =>  "3:00",
      "title"             =>  "The Union Bar Weekend Warm Up",
      "location_name"     =>  "Union Bar, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-24",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Pangaea",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "pangea.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Pangaea",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "wristband1.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Pangaea",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "wristband2.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Pangaea",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "wristband3.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-24",
      "time_start"        =>  "18:00",
      "time_end"          =>  "20:00",
      "title"             =>  "Postgraduate Pizza Evening",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "14:00",
      "time_end"          =>  "15:30",
      "title"             =>  "Living at Home Students Speed Meet",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
    ]);
    
  }
}
