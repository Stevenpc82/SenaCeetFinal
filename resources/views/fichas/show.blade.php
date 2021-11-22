@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles</h1>
@stop

@section('content')
    <div>
        <a class="btn btn-danger" href="{{route('fichas.index')}}">Regresar</a>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Ficha:  {{$ficha->name}}</h2>
                <h3>Id: {{$ficha->id}}</h3>
            </div>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
