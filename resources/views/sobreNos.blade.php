@extends('layouts.basico')

@section('title', 'Sobre nós')

@section('body')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, esse é o nosso site!</h1>
        </div>

        <div class="informacao-pagina">
            <p>O nosso site é perfeito para você!</p>
            <p>Desenvolvido com a mais alta tecnologia para você!</p>
        </div>
    </div>

    @include('layouts.rodape')
@endsection
