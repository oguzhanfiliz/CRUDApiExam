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
        \App\Models\User::insert(['name' => "Oğuzhan Filiz",
            'email' => "oguzhanfiliz@outlook.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$B1igxJ5EZuhKdpDfdrFXL.41A8a74AMcR0CtckaDn/1s8z1juDPoi', // hayret1sey
            'remember_token' => Str::random(10),]);

        \App\Models\User::factory(5)->create();
    }
}
