@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar aprendiz</h1>
@stop

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <div class="col-md-3">
        <form action="{{route('guias.update',$guide->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{$guide->name}}">
            </div>
        </br>
            <div class="mb-3">
                <label for="formFile" class="form-label">Seleccione la Guia</label>
                <input type="file" class="form-control" name="guia">
            </div>
            <br>
            <div class="form-group, p-2">
                <button class="btn btn-primary" type="submit">Actualizar</button>
                <a href="{{route('instructor.index')}}" class="btn btn-danger" >Cancelar</a>
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
