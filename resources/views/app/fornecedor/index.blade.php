@extends('app.layouts.basic_app')

@section('titulo', 'Fornecedor')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-fornecedor">
            <p>Fornecedor</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.create') }}">Novo</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-fornecedor">
                <form action="{{ route('app.fornecedor.show') }}" method="post">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome Fornecedor" class="form-control" style="margin-bottom: 20px">
                    <input type="text" name="site" placeholder="Site" class="form-control" style="margin-bottom: 20px">
                    <input type="text" name="uf" placeholder="UF" class="form-control" style="margin-bottom: 20px">
                    <input type="text" name="email" placeholder="E-mail" class="form-control" style="margin-bottom: 20px">
                    <button type="submit" class="btn btn-outline-success">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
