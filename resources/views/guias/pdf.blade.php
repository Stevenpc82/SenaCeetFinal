<embed src="file_name.pdf" width="800px" height="2100px" />
@extends('adminlte::page')

@section('title', 'PDF')

@section('content_header')
    <h1>Listado Guias</h1>
@stop

@section('content')

    <embed src="file_name.pdf" width="800px" height="2100px" />
    <img class="aQG aYB" id=":18c"
    src="{{'$guide->guia'}}"
    style="position: absolute; top: 0px; width: 100%;">

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
