@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Editar aprendiz</h1>
@stop

@section('content')
    <div class="col-md-3">
        <form action="{{route('instructor.update',$apprentice->id)}}" method="post" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" {{-- value="{{$apprentice->nombre}}" --}}>
            </div>
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" class="form-control" name="apellido" {{-- value="{{$apprentice->apellido}}" --}}>
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="correo" {{-- value="{{$apprentice->correo}}" --}}>
            </div>
            <div class="form-group">
                <label for="">Genero</label>
                <input type="text" class="form-control" name="genero" {{-- value="{{$apprentice->genero}}" --}}>
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
