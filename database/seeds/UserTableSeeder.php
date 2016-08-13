<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{

		factory(App\User::class)->create([
			'name' => 'Admin User',
			'username' => 'admin_user',
			'email' => 'admin@admin.com',
			'password' => bcrypt('admin'),
			'confirmed' => 1,
            'admin' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		factory(App\User::class)->create([
			'name' => 'Test User',
			'username' => 'test_user',
			'email' => 'user@user.com',
			'password' => bcrypt('user'),
			'can_add_events' => 1,
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);
	}
}
