<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Add calls to Seeders here
        $this->call(UserTableSeeder::class);
        $this->command->info('Admin User created with username admin@admin.com and password admin');
        $this->command->info('Test User created with username user@user.com and password user');
        // $this->call(SocietiesTableSeeder::class);
        // $this->command->info('Societies table seeded with 10 random societies.');
        // $this->call(CategoriesTableSeeder::class);
        // $this->command->info('Categories table seeded with 10 random categories.');
        // $this->call(EventsTableSeeder::class);
        // $this->command->info('Events table seeded with 40 random events');
        $this->call(WelcomeWeekEventsSeeder::class);
        $this->command->info('Seeded the welcome week events');
        
        Model::reguard();
    }
}
