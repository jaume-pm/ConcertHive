<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Concert;

class ConcertSeeder extends Seeder
{
    protected $model = Concert::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concert::factory()->count(100)->create();
        Concert::factory()->count(3)->create([
            'artist_name' => 'Bad Bunny',
        ]);
    }
}
