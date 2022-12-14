<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autor' => $this->faker ->name(),
            'titulo' => $this->faker ->sentence(),
            'conteudo' => $this->faker ->paragraph(),
        ];
    }
}
