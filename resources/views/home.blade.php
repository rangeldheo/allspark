@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Olá Allspark</h1>
@stop

@section('content')
    <p>Bem vindo ao nosso painel inicial</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
