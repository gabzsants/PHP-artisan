<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "{{ asset('css/estilo-base.css') }}">
    </head>

    <body>
        @include('layouts.topo')
        @yield('body')
    </body>
</html>
