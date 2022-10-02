@extends('Admin.template.template')

@section('title', 'Gestão de produtos')
    
@section('conteudo')

    <h1>Exibindo os produtos</h1>

    <ul>
        <li>produto 1</li>
        <li>produto 2</li>
        <li>produto 3</li>
        <li>produto 4</li>
        <li>produto 5</li>
    </ul>

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
@endsection
