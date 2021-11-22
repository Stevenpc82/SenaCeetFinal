@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles</h1>
@stop

@section('content')
    <div>
        <a class="btn btn-danger" href="{{route('guias.index')}}">Regresar</a>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <p class="display-5">Nombre:  {{$guide->name}}</p>
                <p>Id: {{$guide->id}}</p>
                <h2>Guia:</h2>
                <iframe id="iframepdf" width="100%" height="600px" src="{{url('storage',$guide->guia)}}"></iframe>
            </div>
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
