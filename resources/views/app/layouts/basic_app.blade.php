<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão de Estoque - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/style_basic.css')}}">
    </head>

    <body>
        @include('app.layouts._partials.topo_app')
        @yield('page')
    </body>
</html>