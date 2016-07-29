<?php

use Illuminate\Database\Seeder;

class SocietiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create 10 societies
      factory(App\Society::class, 10)->create();
    }
}
