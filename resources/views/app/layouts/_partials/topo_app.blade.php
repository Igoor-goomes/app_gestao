<div class="topo">

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="#">Seja Bem vindo(a) {{Auth::user()->name}}</a></li>
            <li><a href="{{ route('app.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
            <li><a href="{{ route('app.produto.index') }}">Produto</a></li>
            <li><a href="{{ route('site.login') }}">Sair</a></li>
        </ul>
    </div>
</div>