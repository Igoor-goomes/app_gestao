@extends('app.layouts.basic_app')

@section('titulo', 'Produto')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-produto">
            <p>Produto | Visualizar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-produto-table">
                <div class="card-body table-responsive">
                    <ul class="list-group">
                        <li class="list-group-item active"><strong>Produto Detalhes</strong> </li>
                        <li class="list-group-item text-lef"><strong>Nome: </strong>{{$produto->no_produto}}</li>
                        <li class="list-group-item"><strong>Descrição do Produto: </strong>{{$produto->ds_produto}}</li>
                        <li class="list-group-item"><strong>Valor de Mercado: </strong>{{$produto->vl_mercado}}</li>
                        <li class="list-group-item"><strong>Quantidade em Estoque: </strong>{{$produto->qt_produto}}</li>
                        <li class="list-group-item"><strong>Marca: </strong>{{$produto->no_marca}}</li>
                        <li class="list-group-item"><strong>Modelo: </strong>{{$produto->ds_modelo}}</li>
                        <li class="list-group-item"><strong>Número de Serie: </strong>{{$produto->nr_serie}}</li>
                        <li class="list-group-item"><strong>Data Entrada: </strong>{{$produto->dt_entrada}}</li>
                        <li class="list-group-item"><strong>Data Saída: </strong>{{$produto->dt_saida}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
