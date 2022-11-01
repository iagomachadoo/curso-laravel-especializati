<?php

namespace Database\Seeders;

use App\Models\Comentario;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            'autor' => 'Fulano da Silva',
            'titulo' => 'Comentário Teste',
            'conteudo' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
        ]);
    }
}
