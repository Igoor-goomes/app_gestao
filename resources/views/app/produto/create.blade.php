@extends('app.layouts.basic_app')

@section('titulo', 'Produto')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-produto">
            <p>Produto | Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.produto.index')}}">Voltar</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-produto">
                <form action="{{route('app.produto.store')}}" method="post">
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
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
