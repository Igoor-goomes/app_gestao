@extends('layout.index_basic')
@section('titulo', $titulo)

@section('page')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Gestão de Estoque | Login</h1>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                        <input name="usuario" value="{{ old('usuario') }}" type="text" class="form-control" placeholder="E-mail">
                            @if($errors->has('usuario'))
                                <span class="help-block">{{ $errors->first('usuario') }}</span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
                        <input name="senha" value="{{ old('senha') }}" type="password" class="form-control" placeholder="Senha">
                            @if($errors->has('senha'))
                                <span class="help-block">{{ $errors->first('senha') }}</span>
                            @endif
                    </div>
                    <button type="submit" class="btn btn-success">Acessar</button>
                    <button type="submit" class="btn btn-success">Primeiro Acesso</button>
                </form>
                @if ($errors->has('usuario')||$errors->has('senha'))
                    <span class="help-block">Necessário realizar login para ter acesso a página</span>
                @endif
            </div>
        </div>
        
    </div>
@endsection
