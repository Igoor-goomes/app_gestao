@extends('layout.index_basic')
@section('titulo', $titulo)

@section('page')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Gestão de Estoque</h1>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}
                    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha do Usuário" class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : ''}}
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
        
    </div>
@endsection
