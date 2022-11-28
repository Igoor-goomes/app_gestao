@extends('layout.index_basic')
@section('titulo','Sobre Nós')

@section('page')
    
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, Seja Bem Vindo ao Gestão de Estoque</h1>
        </div>

        <div class="informacao-pagina">
            <p>O Sistema Gestão de Estoque é o sistema online de controle e gestão coompleta do seu estoque que pode transformar e potencializar os negócios
                da sua empresa.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
            <img src="{{ asset('img/sobre-estoque.png') }}">
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(61) 3370-7070</span>
            <br>
            <span>gestaoestoque@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
