<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProduto;
use App\Models\Cidade;
use App\Models\Polts;
use App\Models\Produto;
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

        //$this->middleware('App\Http\Middleware\Authenticate')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $teste = 1;
        $teste2 = [];
        $produtos = ['produto 1', 'produto 2', 'produto 3', 'produto 4', 'geladeira']; */
        
        /* return view('teste', [
            'teste' => $teste
        ]); */

        $produtos = Produto::all();
        $polts = Polts::all();
        /* $cidades = Cidade::all(); */
        $cidades = Cidade::paginate(5);

        return view('Admin.pages.produtos.index', compact('produtos', 'polts', 'cidades'));

        //$this->request;
    }

    /**
     * Show the form for creating a new resource.
     * Mostra o formulário para criar um novo registro.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     * Armazene um registro recém criado.
     *
     * @param  App\Http\Requests\StoreUpdateProduto  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProduto $request)
    {
        /* $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'nullable|min:3|max:10000',
            'arquivo' => 'required|image',
        ]);
        */
        dd('OK');
        
        /* dd($request -> all()); */
        /* dd($request -> only(['nome', 'descricao'])); */
        /* dd($request -> nome); */
        /* dd($request -> has('nome')); */
        /* dd($request -> input('dimensoes', 'valor default')); */
        /* dd($request -> except('_token', 'nome')); */
        if ($request -> file('arquivo')-> isValid()) {
            
            $nomeArquivo = $request->nome . '.' . $request->file('arquivo')->extension();
            
            //dd($request->file('arquivo'));
            //dd($request->file('arquivo')->store('produtos'));
            dd($request->file('arquivo')->storeAs('produtos', $nomeArquivo, 'public'));
        }
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
        return view('Admin.pages.produtos.edit' , compact('id'));
        
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
        dd("Editando o produto {$id}");
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
