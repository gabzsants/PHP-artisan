@extends('layouts.basico')

@section('title', 'Página inicial')

@section('body')
    <div class="conteudo-destaque">
        <div class="esquerda">
            <div class="informacoes">
                <h1>Esse é o nosso site!</h1>
                <p>O site ideal para você!<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Site completo!</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Tenha acesso a todo nosso site!</span>
                </div>
            </div>
            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>
        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                @component('components.formularioContato', ["tipoBorda" => "borda-branca"])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
