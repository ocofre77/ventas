@extends('layouts.app')

@section('contentheader_title')
    Reporte de Actividades Vendedor
@endsection

@section('htmlheader_title')
    Reporte de Actividades Vendedor
@endsection

@section('contentheader_description')
    0
@endsection

@section('contentheader_controls')
@endsection

@section('main-content')

    <div class="box">

        <table class="table table-bordered" id="tasks-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Usuario Vendedor</th>
                <th>Cliente</th>
                <th>Tipo Tarea</th>
                <th>Fecha</th>
                <th>Hora Desde</th>
                <th>Hora Hasta</th>
                <th>Descripción</th>
            </tr>
            </thead>
        </table>

    </div>
@endsection

@section('js')

    <script>
        $(function() {
            $('#tasks-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('Reports.tasksData') !!}',
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'user_name', name: 'user_name' },
                    { data: 'customer_name', name: 'customer_name' },
                    { data: 'task_type_name', name: 'task_type_name'},
                    { data: 'date', name: 'date'},
                    { data: 'hour_from', name:'hour_from'},
                    { data: 'hour_to', name:'hour_to'},
                    { data: 'notes', name:'notes'},
                ]
            });
        });
    </script>

@endsection