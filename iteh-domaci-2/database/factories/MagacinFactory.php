<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prodavnica;
use App\Models\Grad;

class MagacinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tip' => $this->faker->randomElement($array = array ('maloprodaja','velikoprodaja','glavni')),
            'telefon' => $this->faker->unique()->e164PhoneNumber(),
            'ulica' => $this->faker->streetAddress(),
            'sef' => $this->faker->name(),
            'prodavnica_id' => Prodavnica::factory(),
            'grad_id' => Grad::factory()

        ];
    }
}
