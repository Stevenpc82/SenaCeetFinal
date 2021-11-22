@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Nuevo aprendiz</h1>
@stop

@section('content')
    <div class="col-md-3">
        <form action="{{route('fichas.store')}}" method="post" >
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <br>
            <div class="form-group, p-2">
                <button class="btn btn-primary" type="submit">Crear</button>
                <a href="{{route('fichas.index')}}" class="btn btn-danger" >Cancelar</a>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
