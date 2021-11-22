@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado Guias</h1>
@stop

@section('content')
    <div>
        <a href="{{route('guias.create')}}" type="button" class="btn btn-secondary btn-lg">Crear</a>
    </div>
    <br>
    <div class="modal-content">
        <div class="p-4">
            <div>
                <table id="guide" class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Guia</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @forelse($guides as $guide)
                            <th>{{$guide->id}}</th>
                            <th>{{$guide->name}}</th>
                            <th> <a href="{{url('storage',$guide->guia)}}"
                                class="btn btn-sm btn-outline-primary">PDF</a>
                            </th>
                            <td>
                                <form action="{{route('guias.destroy', $guide->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('guias.show',$guide->id)}}"
                                       class="btn btn-sm btn-outline-info">Detalles</a>
                                    <a href="{{route('guias.edit',$guide->id)}}"
                                       class="btn btn-sm btn-outline-warning ">Editar</a>
                                    <button class="btn btn-sm btn-outline-danger submit-prevent-button" type="sumbit">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Sin registros
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#products').DataTable({
                "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "ALL"]]
            });
        });
    </script>
@stop
