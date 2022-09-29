@extends('Admin.template.template')

@section('title', 'Adicionando novo produto')

@section('conteudo')

    <form action="" method="post">
        <div class="mb-3 mt-5">
          <label for="" class="form-label">Nome do Produto</label>

          <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">

          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Choose file</label>

          <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">

          <div id="fileHelpId" class="form-text">Help text</div>
        </div>
    </form>

@endsection