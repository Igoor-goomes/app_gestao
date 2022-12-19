@extends('layout.index_basic')
@section('titulo','Login')

@section('page')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Gestão de Estoque | Login</h1>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="E-mail">
                            @if($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input name="password" value="{{ old('password') }}" type="password" class="form-control" placeholder="Senha">
                            @if($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    <button type="submit" class="btn btn-success">Acessar</button>
                </form>
                @if ($errors->has('usuario')||$errors->has('senha'))
                    <span class="help-block">Necessário realizar login para ter acesso a página</span>
                @endif
            </div>
        </div>
        
    </div>
@endsection
