<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create(['name'=>"Abhisan","email"=>"abeesun@gmail.com","role"=>"admin"]);
        User::factory()->create(['name'=>"Invictus","email"=>"invictuscreateaanapp@gmail.com","role"=>"member"]);

        User::factory()
        ->count(10)
        ->create();
    }
}
