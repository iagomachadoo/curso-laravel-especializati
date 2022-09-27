<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = ['Produto 1', 'Produto 2', 'Produto 3'];

        return $produtos;
    }

    public function show($id)
    {
        return "Exibindo o produto com id: {$id}";
    }
    
    public function cadastrar()
    {
        return 'Exibindo o form de cadastro de um novo produto';
    }
    

}
