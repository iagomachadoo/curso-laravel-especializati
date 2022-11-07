<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome_produto' => $this->faker->lastName(),
            'descricao_produto' => $this->faker->sentence(),
            'codigo_produto' => $this->faker->ean8(),
            'arquivo' => $this->faker->imageUrl(),
        ];
    }
}
