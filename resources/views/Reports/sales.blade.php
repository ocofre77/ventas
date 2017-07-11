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
                    <div class="panel-body">
                        <form method="POST" id="search-form" class="form-inline" role="form">

                            <div class="form-group">
                                <label for="name">Fecha Desde:</label>
                                <input type="text" class="form-control" name="date_from" id="date_from" placeholder="Fecha desde">
                            </div>
                            <div class="form-group">
                                <label for="email">Fecha Hasta:</label>
                                <input type="text" class="form-control" name="date_to" id="date_to" placeholder="Fecha hasta">
                            </div>

                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
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
                            <th>Fecha</th>
                        </tr>
                        </thead>
                    </table>

                </div>
@endsection

@section('js')
    @push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>

    @endpush

    <script>

/*
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
                    { data: 'updated_at' name:'updated_at' },
                ]
            });
        });
*/


        var oTable = $('#sales-table').DataTable({
            dom: "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
            buttons: [
                'export', 'print', 'reset', 'reload'
            ],
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! route('Reports.salesData') !!}',
                data: function (d) {
                    d.date_from = $('input[name=date_from]').val();
                    d.date_to = $('input[name=date_to]').val();
                }
            },
            columns: [
                { data: 'id', name: 'id'},
                { data: 'user_name', name: 'user.name' },
                { data: 'customer_name', name: 'customer.name' },
                { data: 'project_name', name: 'project.name'},
                { data: 'property_type', name: 'property_type'},
                { data: 'name', name:'name'},
                { data: 'value', name:'value'},
                { data: 'updated_at', name:'updated_at' },

            ]
        });

        $('#search-form').on('submit', function(e) {
            oTable.draw();
            e.preventDefault();
        });

    </script>

@endsection