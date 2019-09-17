@extends('layout')

@section('titulo','Laravel Vue')


@section('cabecalho')
    Cabeçalho Teste
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

    </div>

@endsection

@section('rodape')
    Rodapé Teste
@endsection
