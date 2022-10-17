@extends('Admin.template.template')

@section('title', 'Adicionando novo produto')

@section('conteudo')

  <h1 class="mt-5">Cadastrar Novo Produto</h1>

 {{--  @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
  @endif --}}

  <form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="mb-3 mt-5">
        <label for="nome" class="form-label">Nome do Produto</label>

        <input type="text" class="form-control" name="nome" id="nome" placeholder="Geladeira" required>
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição do produto</label>

        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Duas portas, com 350L ...">
      </div>

      <div class="mb-3">
        <label for="arquivo" class="form-label">Escolha um Arquivo</label>

        <input type="file" class="form-control" name="arquivo" id="arquivo" required>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
      
      <a class="btn btn-secondary" href="{{route('produtos.index')}}" role="button">Voltar Para Listagem De Produtos</a>
  </form>


@endsection