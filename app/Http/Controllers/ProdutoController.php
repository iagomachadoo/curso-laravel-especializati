<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //Trabalhando com construtor

    //Criando um atributo

    protected $request;

    public function __construct(Request $request)
    {
        //$this->request = $request;
        //dd($request);

        /*
        //pegando um parâmetro da requisição
        $parametro = $request->parm1;
        dd($parametro);
        */

        //$this->middleware('App\Http\Middleware\Authenticate')->only(['create', 'show', 'store']);

        $this->middleware('App\Http\Middleware\Authenticate')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Listagem de Produtos';

        //$this->request;
    }

    /**
     * Show the form for creating a new resource.
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Mostrar o formulário pra criar um novo Produtos';
        
    }

    /**
     * Store a newly created resource in storage.
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Mostrar produto {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Mostrar o formulário pra editar um novo Produtos';
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
