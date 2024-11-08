<?php

namespace Database\Factories;
use App\Models\Airline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'date'=> fake()->date(),
         'airline_id'=> Airline::all()->random()->airline_id,
         'limit'=> rand(25,300)
        ];
    }
}
