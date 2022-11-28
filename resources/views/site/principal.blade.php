@extends('layout.index_basic')
@section('titulo', 'Home')

@section('page')

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Gestão de Estoque</h1>
                <p>Software para gestão de estoque ideal para sua empresa.
                <p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa em total controle</span>
                </div>
            </div>
        </div>

        <div class="direita">
            <div class="img_estoque">
                <img class="imagem-estoque" src="{{ asset('img/estoque.png') }}">
            </div>
        </div>
    </div>
@endsection
