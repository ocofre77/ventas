@extends('layouts.app')

@section('contentheader_title')
    Contactos
@endsection

@section('htmlheader_title')
    Contactos
@endsection

@section('contentheader_description')
    0
@endsection

@section('contentheader_controls')
    <a href="{{url('Customers/create')}}" type="button" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i> Agregar
    </a>
@endsection

@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Listado Estados de Propiedad</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Email</td>
                                <td>Tipo</td>
                                <td>Acción</td>
                                </thead>
                                <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email  }}</td>
                                        <td>{{ $customer->customerType->name }}</td>
                                        <td>
                                            <a href="{{ route('Customers.edit', $customer->id )}}" type="button" class="btn btn-warning">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                            <a href="{{ route('Customers.destroy', $customer->id )}}" type="button" onclick="return confirm('Seguro en Eliminar?')" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection