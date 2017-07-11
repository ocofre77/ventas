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
                    { data: 'id', name: 'tasks.id'},
                    { data: 'user_name', name: 'users.name' },
                    { data: 'customer_name', name: 'customers.name' },
                    { data: 'task_types_name', name: 'task_types.name'},
                    { data: 'date', name: 'tasks.date'},
                    { data: 'hour_from', name:'tasks.hour_from'},
                    { data: 'hour_to', name:'tasks.hour_to'},
                    { data: 'notes', name:'tasks.notes'},
                ]
            });
        });
    </script>

@endsection