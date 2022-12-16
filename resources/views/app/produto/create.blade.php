@extends('app.layouts.basic_app')

@section('titulo', 'Produto')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-produto">
            <p>Produto | Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-produto">
                <form action="{{route('produto.store')}}" method="post">
                    @csrf
                    <div class="form-group{{$errors->has('no_produto') ? 'has-error' : ''}}">
                        <input type="text" name="no_produto" value="{{old('no_produto')}}" placeholder="Nome" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('no_produto'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('no_produto')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('ds_produto') ? 'has-error' : ''}}">
                        <input type="text" name="ds_produto" value="{{old('ds_produto')}}" placeholder="Descrição Produto" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('ds_produto'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('ds_produto')}}</span>
                        @endif                       
                    </div>
                    <div class="form-group{{$errors->has('vl_mercado') ? 'has-error' : ''}}">
                        <input type="text" name="vl_mercado" value="{{old('vl_mercado')}}" placeholder="Valor de Mercado" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('vl_mercado'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('vl_mercado')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('qt_produto') ? 'has-error' : ''}}">
                        <input type="text" name="qt_produto" value="{{old('qt_produto')}}" placeholder="Quantidade em Estoque" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('qt_produto'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('qt_produto')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('no_marca') ? 'has-error' : ''}}">
                        <input type="text" name="no_marca" value="{{old('no_marca')}}" placeholder="Marca" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('no_marca'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('no_marca')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('ds_modelo') ? 'has-error' : ''}}">
                        <input type="text" name="ds_modelo" value="{{old('ds_modelo')}}" placeholder="Modelo" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('ds_modelo'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('ds_modelo')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('nr_serie') ? 'has-error' : ''}}">
                        <input type="text" name="nr_serie" value="{{old('nr_serie')}}" placeholder="Número de Serie" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('nr_serie'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('nr_serie')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('dt_entrada') ? 'has-error' : ''}}">
                        <input type="date" name="dt_entrada" value="{{old('dt_entrada')}}" placeholder="Data de Entrada" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('dt_entrada'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('dt_entrada')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('dt_saida') ? 'has-error' : ''}}">
                        <input type="date" name="dt_saida" value="{{old('dt_saida')}}" placeholder="Data de Saída" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('dt_saida'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('dt_saida')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
