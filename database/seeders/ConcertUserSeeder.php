<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcertUserSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Concert::all()->each(function ($concert) {
            $users = \App\Models\User::inRandomOrder()->take(rand(1, 5))->get();
            $concert->users()->attach($users);
        });
    }
}

