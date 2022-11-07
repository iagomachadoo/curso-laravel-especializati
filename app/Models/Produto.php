<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $filelabel = [
        'nome_produto',
        'descricao_produto',
        'codigo_produto',
        'arquivo'
    ];
}
