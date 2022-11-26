<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/style_basic.css')}}">
    </head>

    <body>
        @include('layout.layout_partials.topo')
        @yield('page')
    </body>
</html>