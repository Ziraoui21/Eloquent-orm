<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitCommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "produit_id" => $this->faker->numberBetween(1,10),
            "commande_id" => $this->faker->numberBetween(1,10),
            "qte" => $this->faker->randomNumber(3)
        ];
    }
}
