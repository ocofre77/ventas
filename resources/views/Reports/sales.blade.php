@extends('layouts.app')

@section('contentheader_title')
    Reporte de Ventas
@endsection

@section('htmlheader_title')
    Reporte de Ventas
@endsection

@section('contentheader_description')
    0
@endsection

@section('contentheader_controls')
@endsection

@section('main-content')

                <div class="box">

                    <table class="table table-bordered" id="sales-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario Vendedor</th>
                            <th>Cliente</th>
                            <th>Proyecto</th>
                            <th>Tipo</th>
                            <th>Propiedad</th>
                            <th>Precio</th>
                        </tr>
                        </thead>
                    </table>

                </div>
@endsection

@section('js')

    <script>
        $(function() {
            $('#sales-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: '{!! route('Reports.salesData') !!}',
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'user_name', name: 'user_name' },
                    { data: 'customer_name', name: 'customer_name' },
                    { data: 'project_name', name: 'project_name'},
                    { data: 'property_type', name: 'property_type'},
                    { data: 'name', name:'name'},
                    { data: 'value', name:'value'},
                ]
            });
        });
    </script>

@endsection