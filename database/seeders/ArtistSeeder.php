<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected $model = Artist::class;

    public function run(): void
    {
        // Create 30 generic artists
        Artist::factory()->count(30)->create();

        // Create an artist referring to Bad Bunny
        Artist::create([
            'name' => 'Bad Bunny',
            'country' => 'Puerto Rico',
            'bio' => 'Yo papi! Ya tu sabe who it is!
                      Checkea mis conciertos más duros en mi
                      perfil brrrr',
        ]);

        // Create 10 artists from Spain
        Artist::factory()->count(10)->create([
            'country' => 'Spain',
        ]);

        // Create 5 artists without bio
        Artist::factory()->count(5)->create([
            'bio' => '',
        ]);
    }
}
