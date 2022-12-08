@extends('Admin.template.template')

@section('title', 'Gestão de produtos')
    
@section('conteudo')

    <h1>Exibindo os produtos</h1>

    {{-- 
    <ul>
        <li>produto 1</li>
        <li>produto 2</li>
        <li>produto 3</li>
        <li>produto 4</li>
        <li>produto 5</li>
    </ul> 
    --}}

    {{-- Estrutura de controle --}}

    {{-- 
    @if ($teste === 123)
        <p>É igual</p>
    @endif 
    --}}

    {{-- 
    @if ($teste === 123)
        <p>É igual</p>
    @else
        <p>É diferente</p>
    @endif 
    --}}

    {{--
    @if ($teste === 123)
        <p>É igual ai tipo e valor</p>

    @elseif ($teste == 123)
        <p>É igual ao valor</p>

    @else
        <p>Não é igual</p>

    @endif
    --}}

    {{--
    @unless ($teste === '123')
        <p>É diferente</p>

    @endunless
    --}}

    {{--
    @unless ($teste === 123)
        <p>É diferente</p>
        
    @else
        <p>É igual</p>

    @endunless
    --}}

    {{--
    @isset($teste)
        <p>A variável exite</p>

    @endisset
    --}}

    {{--
    @empty($teste2)
        <p>Vazio...</p>

    @else
        <p>Não esta vazio</p>

    @endempty
    --}}

    {{--
    @auth
        <p>Autenticao</p>

    @else
        <p>Não autenticado</p>

    @endauth
    --}}

    {{--
    @guest
        <p>Não esta autenciado</p>
    @endguest
    --}}

    {{--
    @switch($teste)
        @case(123)
            <p>{{$teste}}</p>
            @break
        @case(12)
            <p>Não é igual</p>
            @break
        @default
            Default
    @endswitch
    --}}

    {{-- Estrutura de repetição --}}

    {{--
    @if (isset($produtos))
        <ul>
            @foreach ($produtos as $produto)
                <li>{{$produto}}</li>
            @endforeach
        </ul>
    @endif
    --}}

    {{--
    <ul>
        @forelse ($produtos as $produto)  
            <li class="@if ($loop->first) first @endif @if ($loop->last) last @endif">{{$produto}}</li>
        @empty
            <li>Não existem produtos na lista</li>
        @endforelse
    </ul>
    --}}

    {{--Includes, components e slot--}}
    {{--
    @include('Admin.includes.alerts.alert', ['conteudo' => ' - Alerta incluído'])
    
    @component('Admin.components.card')
        @slot('titulo')
            Esse é o título do card
        @endslot

        Esse é o conteúdo do card
    @endcomponent
    --}}

    {{-- Trabalhando com formulários --}}
    {{-- <a class="btn btn-primary" href="{{route('produtos.create')}}" role="button">Cadastrar Novo Produto</a> --}}

    {{-- <a class="btn btn-secondary" href="{{route('produtos.edit', 'id')}}" role="button">Editando Produto</a> --}}

    {{-- <ul>
        @foreach ($polts as $polt)
            <li>
                <h2>{{ $polt->titulo }}</h2>
                <p>{{ $polt->conteudo }}</p>
                <img src="{{ $polt->imagem }}" alt="">
                <span>{{ $polt->autor }}</span>
            </li>
        @endforeach
    </ul> --}}

    <table>
        <thead>
            <tr>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome_produto}}</td>
                    <td>{{ $produto->descricao_produto}}</td>
                    <td>{{ $produto->codigo_produto}}</td>
                    {{-- <td><img src="{{ $produto->arquivo}}" alt=""></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('produtos.destroy', $produto->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar o produto: {{$produto->nome_produto}}</button>
    </form>
    {{-- {{ $cidades->links() }} --}}
@endsection




{{-- 
@push('style')
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
@endpush

@push('script')
    <script src="{{asset('assets/js/script.js')}}"></script>
@endpush 
--}}