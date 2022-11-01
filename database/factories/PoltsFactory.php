<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoltsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker ->sentence($nbWords = 6, $variableNbWords = true),
            'autor' => $this->faker ->name(),
            'conteudo' => $this->faker ->paragraph(),
            'imagem' => $this->faker ->imageUrl(),
        ];
    }
}
