<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(User::class)->create([
			'name' => 'Salomon Machuca',
			'email'=> 'em_di-es@hotmail.com',
			'password' => bcrypt('laravel')
		]);

		factory(User::class, 2)->create();
    }
}
