<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name("men"),
            "price" => $this->faker->randomFloat("2"),
            "categorie_id" => $this->faker->numberBetween(6, 10)
        ];
    }
}
