@extends('app.layouts.basic_app')

@section('titulo', 'Fornecedor')
@section('page')
    <div class="conteudo-pagina">
        <div class="titulo-app-fornecedor">
            <p>Fornecedor | Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.create') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informa-pagina">
            <div class="info-app-fornecedor">
                <form action="{{route('app.fornecedor.create')}}" method="POST">
                    <input type="hidden" name="id" value="{{$fornecedor->id ?? ''}}">
                    @csrf
                    <div class="form-group{{$errors->has('nome') ? 'has-error' : ''}}">
                        <input type="text" name="nome" value="{{$fornecedor->nome ?? old('nome')}}" placeholder="Nome Fornecedor" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('nome'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('nome')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('cnpj') ? 'has-error' : ''}}">
                        <input type="text" name="cnpj" value="{{$fornecedor->cnpj ?? old('cnpj')}}" placeholder="CNPJ" class="form-control" style="margin-bottom: 20px">                        
                        @if ($errors->has('cnpj'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('cnpj')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                        <input type="text" name="email" value="{{$fornecedor->email ?? old('email')}}" placeholder="E-mail" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('email'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('uf') ? 'has-error' : ''}}">
                        <input type="text" name="uf" value="{{$fornecedor->uf ?? old('uf')}}" placeholder="UF" class="form-control" style="margin-bottom: 20px">
                        @if ($errors->has('uf'))
                            <span class="help-block" style="color: #FF1A1A">{{$errors->first('uf')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    {{$msg ?? ''}}
                </form>
            </div>
        </div>
    </div>
@endsection




