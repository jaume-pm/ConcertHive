<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    protected $model = Artist::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'name' => $faker->unique()->name,
            'country' => $this->faker->country,
            'bio' => $this->faker->text(200),
        ];
    }
}