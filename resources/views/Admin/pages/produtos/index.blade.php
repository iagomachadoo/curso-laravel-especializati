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
    @include('Admin.includes.alerts.alert', ['conteudo' => ' - Alerta incluído'])
    
    @component('Admin.components.card')
        @slot('titulo')
            Esse é o título do card
        @endslot

        Esse é o conteúdo do card
    @endcomponent
@endsection

{{--
<style>
    .first{
        background-color: blue;
    }
    .last{
        background-color: red;
    }
</style>
--}}