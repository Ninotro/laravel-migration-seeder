<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainRoute>
 */
class TrainRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'departure_station' => $this->faker->city,
            'arrival_station' => $this->faker->city,
            'departure_time' => $this->faker->time('H:i'),
            'arrival_time' => $this->faker->time('H:i'),
            'train_code' => $this->faker->unique()->randomNumber(4),
            'carriage_count' => $this->faker->numberBetween(1, 10),
            'on_time' => $this->faker->boolean,
            'cancelled' => $this->faker->boolean(10), 
        ];
    }
}
