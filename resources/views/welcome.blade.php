@extends('layout')

@section('titulo','Laravel Vue')

@section('cabecalho')
    <div class="container">
        <div class="jumbotron mt-3">
            <h1>Exemplos de componentes Vue no Laravel 6</h1>
            <p class="lead">Exemplos do livro "Front-end com Vue.js: Da teoria à prática sem complicações" </p>
            <a class="btn btn-lg btn-primary" href="https://vuejs.org/" role="button" target="_blank">Docs Vue.js</a>
        </div>
    </div>
@endsection

@section('conteudo')

    <div class="container">

        <div class="row">

            <div class="col-12">
                <div id="app">
                    <example-component></example-component>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div id="app-1">
                    <criando-exibindo-dados></criando-exibindo-dados>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div id="app-2">
                    <manipulando-dados></manipulando-dados>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div id="app-3">
                    <componentes-juntos></componentes-juntos>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('rodape')
    <div class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Laravel e Vue.js.</span>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            console.log('JQuery funcionando!');
        });
    </script>
@endsection
