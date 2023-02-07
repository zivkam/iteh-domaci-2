<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdavnicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'website' => $this->faker->unique()->url(),
            'godina' => $this->faker->year($max = 'now'),
            'email' => $this->faker->unique()->email()
         ];
 
    }
}
