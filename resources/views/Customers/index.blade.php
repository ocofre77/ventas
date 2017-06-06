@extends('layouts.app')

@section('contentheader_title')
    Listado Contactos
@endsection

@section('htmlheader_title')
    Listado Contactos
@endsection

@section('contentheader_description')
    {{ $customers->total() }}
@endsection

@section('contentheader_controls')

    {!! Form::open(['route'=>'Customers.index', 'method' =>'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class ="input-group" >
        {!! Form::text('name',null,['class'=> 'form-control','placeholder'=>'Buscar Contacto..','aria-describedby'=>'search'])!!}
        <span class="input-group-addon" id="search">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    </div>
    <div class ="input-group" >
        <a href="{{url('Customers/create')}}" type="button" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
        </a>
    </div>
    {!! Form::close() !!}
@endsection

@section('main-content')



    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!--
                    <div class="box-header with-border">
                        <h3 class="box-title">Listado Contactos</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    -->
                    <div class="box-body">

                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Email</td>
                                <td>Teléfono</td>
                                <td>Celular</td>
                                <td>Tipo</td>
                                <td>Acción</td>
                                </thead>
                                <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email  }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->cell_phone }}</td>
                                        <td>{{ $customer->customerType->name }}</td>
                                        <td>
                                            <a href="{{ route('Customers.edit', $customer->id )}}" type="button" class="btn btn-warning">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                            <a href="{{ route('Customers.destroy', $customer->id )}}" type="button" onclick="return confirm('Seguro en Eliminar?')" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
                                            <a href="{{ route('Trackings.create', $customer->id )}}" type="button" class="btn btn-info">
                                                <i class="fa fa-home" aria-hidden="true"></i> Oferta</a>

{{--
                                            <a href="{{ route('Trackings.edit', $customer->id )}}" type="button" class="btn btn-info">
                                                <i class="fa fa-home" aria-hidden="true"></i> Oferta</a>
--}}


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>


                    </div>
                    <div class="text-center">
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
