@extends('layout.index_basic')
@section('titulo', 'Home')

@section('page')

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Gestão de Estoque</h1>
                <p>O sistema de Gestão de Estoque é ideal para sua empresa/négocio.</p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Fácil utilização</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Seguro</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Estrátegico</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Construção em Laravel 7.0</span>
                </div>                
                <div class="chamada">
                    <h2 class="texto-branco">Registre-se Aqui!</h2>
                    <form action="{{route('site.registro')}}" method="POST">
                        @csrf
                        <div class="form-group{{$errors->has('name') ? 'has-error' : ''}}">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nome">
                                @if ($errors->has('name'))
                                    <span class="help-block">{{$errors->first('name')}}</span>
                                @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="exemplo@exemplo.com.br">
                                @if ($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                @endif
                        </div>
                        <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                            <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Senha">
                                @if ($errors->has('password'))
                                    <span class="help-block">{{$errors->first('password')}}</span>
                                @endif
                        </div>                       
                            <button type="submit" class="btn btn-success">Cadastrar Usuário</button>
                    </form>
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
