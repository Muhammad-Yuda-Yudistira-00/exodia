<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            'title' => fake()->sentence(3),
            'category' => ['anime', 'drama', 'hollywood'][array_rand(['anime', 'drama', 'hollywood'])],
            'time' => Arr::random(['allTheTime', 'year', 'season']),
        ];

        for($i = 1; $i <= 10; $i++)
        {
            $data["rank_$i"] = fake()->sentence(rand(1, 4));
        }

        return $data;
    }
}
