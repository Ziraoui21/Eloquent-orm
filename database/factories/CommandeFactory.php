<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "dateCmd" => $this->faker->date(),
            "client_id" => $this->faker->numberBetween(1,15)
        ];
    }
}
