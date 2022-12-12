@extends('app.layouts.basic_app')

@section('titulo', 'Fornecedor')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-fornecedor">
            <p>Fornecedor - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.create') }}">Novo</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-fornecedor">
                ...Lista...
            </div>
        </div>
    </div>
@endsection
