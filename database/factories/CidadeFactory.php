<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cidade' => $this->faker ->city(),
            'estado' => $this->faker ->state(),
            'pais' => $this->faker ->country(),
        ];
    }
}
