<?php

namespace Database\Factories;

use App\Models\Concert;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConcertFactory extends Factory
{
    protected $model = Concert::class;

    public function definition(): array
    {
        $randomArtist = Artist::inRandomOrder()->first();

        return [
            'title' => $this->faker->sentence(4, true),
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'date_time' => $this->faker->dateTimeBetween('+1 week', '+1 year'),
            'artist_name' => Artist::inRandomOrder()->first()->name,
            'ticket_price' => $this->faker->randomFloat(2, 10, 100),
            'max_capacity' => $this->faker->numberBetween(100, 1000),
            'venue' => $this->faker->company,
        ];
    }
}
