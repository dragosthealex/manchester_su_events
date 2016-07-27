<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'title'         =>  str_random(10),
        'description'   =>  $faker->text,
        'subtitle'      =>  str_random(10),
        'creator_id'    =>  App\User::orderByRaw('RAND()')->first()->id,
        'date_start'    =>  $faker->date(),
        'time_start'    =>  $faker->time(),
        'time_end'      =>  $faker->time(),
        'price'         =>  $faker->numberBetween(1, 100),
        'location_address'  =>  $faker->address,
        'location_name'     =>  str_random(10),
        'tickets_link'      =>  $faker->url,
    ];
});
