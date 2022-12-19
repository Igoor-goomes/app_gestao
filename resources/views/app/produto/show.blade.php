@extends('app.layouts.basic_app')

@section('titulo', 'Produto')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-produto">
            <p>Produto | Visualizar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.produto.index')}}">Voltar</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-produto-table">
                <div class="card-body table-responsive">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-dark"><strong>Produto Detalhes</strong> </li>
                        <li class="list-group-item"><strong>Nome: </strong>{{$produto->no_produto}}</li>
                        <li class="list-group-item"><strong>Descrição do Produto: </strong>{{$produto->ds_produto}}</li>
                        <li class="list-group-item"><strong>Valor de Mercado: </strong>R${{number_format(($produto->vl_mercado),'2',',','.')}}</li>
                        <li class="list-group-item"><strong>Quantidade em Estoque: </strong>{{$produto->qt_produto}}</li>
                        <li class="list-group-item"><strong>Marca: </strong>{{$produto->no_marca}}</li>
                        <li class="list-group-item"><strong>Modelo: </strong>{{$produto->ds_modelo}}</li>
                        <li class="list-group-item"><strong>Data Entrada: </strong>{{date('d/m/Y', strtotime($produto->dt_entrada))}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
