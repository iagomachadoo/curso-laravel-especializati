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
    
    public function creat()
    {
        return 'Exibindo o form de cadastro de um novo produto';
    }

    public function store()
    {
        return 'Cadastrar um novo produto';
    }
    
    public function edit($id)
    {
        return "Exibindo o form para editar o produto {$id}";
    }

    public function update($id)
    {
        return "Editando o produto {$id}";
    }

    public function destroy($id)
    {
        return "Apagando o produto {$id}";
    }
}
