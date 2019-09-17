<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/style.css') }}" rel="stylesheet">


</head>
<body>

    @hasSection('cabecalho')
        <header>
            @yield('cabecalho')
        </header>
    @endif

    <main>
        @yield('conteudo')
    </main>

    @hasSection('rodape')
        <footer>
            @yield('rodape')
        </footer>
    @endif

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
