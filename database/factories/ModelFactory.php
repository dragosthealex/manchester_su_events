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
        'title'             =>  str_random(10),
        'description'       =>  $faker->text,
        'subtitle'          =>  str_random(10),
        'creator_id'        =>  App\User::orderByRaw('RAND()')->first()->id,
        'date_start'        =>  $faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'),
        'time_start'        =>  $faker->time(),
        'time_end'          =>  $faker->time(),
        'price'             =>  $faker->numberBetween(0, 100),
        'location_address'  =>  $faker->address,
        'location_name'     =>  $faker->streetName,
        'tickets_link'      =>  $faker->url,
        'society_id'        =>  (rand(0,1) ? App\Society::orderByRaw('RAND()')->first()->id : NULL),
        'category_id'       =>  App\Category::orderByRaw('RAND()')->first()->id,
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name'          =>  $faker->safeColorName,
        'description'   =>  $faker->text(),
    ];
});

$factory->define(App\Society::class, function (Faker\Generator $faker) {
    return [
        'name'          =>  $faker->company,
        'description'   =>  $faker->text,
    ];
});