<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Concert;
use \App\Models\User;

class ConcertUserSeeder extends Seeder
{
    public function run(): void
    {
        Concert::all()->each(function ($concert) {
            $users = User::inRandomOrder()->take(rand(1, 5))->get();
            $concert->users()->attach($users);
        });
        //Get User with email = Jaume@PMUD.com and attach 3 random concerts.
        $jaumeUser = User::where('email', 'Jaume@PMUD.com')->first();

        if ($jaumeUser) {
            // Attach 3 random concerts to the user
            $concerts = Concert::inRandomOrder()->take(3)->get();
            $jaumeUser->concerts()->attach($concerts);
        }
    }
}

