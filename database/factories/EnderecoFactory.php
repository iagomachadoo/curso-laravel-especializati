<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'endereco' => $this->faker ->streetAddress(),
            'numero' => $this->faker ->buildingNumber(),
            'cidade' => $this->faker ->city(),
        ];
    }
}
