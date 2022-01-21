<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\User::factory(9)->create();
        \App\Models\User::insert(['name' => "Oğuzhan Filiz",
            'email' => "oguzhanfiliz@outlook.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$weeFqj/w8iDYs.17gvPqqO0jEpIjt7HcwVQHnED.yE3Y83VLtOjnK', // 123456
            'remember_token' => Str::random(10),]);
    }
}
