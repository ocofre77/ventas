@extends('layouts.app')

@section('contentheader_title')
    Inmnuebles
@endsection

@section('contentheader_description')
    0
@endsection

@section('htmlheader_title')
    Inmnuebles
@endsection

@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulario de Inmnueble</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        {!! Form::Open(['route' => 'Customers.store','method' => 'POST']) !!}

                        <div class="row">

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'Código') !!}
                                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Código', 'requerid' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::label('name', 'Tipo de Propiedad') !!}
                                        {!! Form::select('propertyType',$propertyTypes,null,['class'=>'select form-control', 'placeholder'=>'Tipo de Propiedad']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('state_id', 'Provincia') !!}
                                            {!! Form::select('state_id',$states,null,['class'=>'select form-control', 'placeholder'=>'Seleccione Provincia']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('city_id', 'Ciudad') !!}
                                            <select id="city_id" class="select form-control" placeholder="Seleccione Ciudad"></select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::label('address', 'Dirección') !!}
                                            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección', 'requerid' ]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('bedrooms', 'Habitaciones') !!}
                                            <div class="input-group">
                                                    <span class="input-group-addon" id="sizing-addon2">
                                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                                    </span>
                                                {!! Form::number('bedrooms',null,['class'=>'form-control','placeholder'=>'0', 'min'=>'0', 'max'=>'20' ]) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('bathrooms', 'Baños') !!}
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">
                                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                                </span>
                                                {!! Form::number('bathrooms',null,['class'=>'form-control','placeholder'=>'0', 'min'=>'0', 'max'=>'10', 'maxlength'=>'2' ]) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('state', 'Area') !!}
                                            {!! Form::text('state',null,['class'=>'form-control','placeholder'=>'Provincia', 'requerid' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('state', 'Area Util') !!}
                                            {!! Form::text('state',null,['class'=>'form-control','placeholder'=>'Provincia', 'requerid' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('state', 'Estado Inmueble') !!}
                                            {!! Form::select('propertyStatus',$propertyStates,null,['class'=>'select form-control', 'placeholder'=>'Estado Inmueble']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('state', 'Precio') !!}
                                            {!! Form::text('state',null,['class'=>'form-control','placeholder'=>'Provincia', 'requerid' ]) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('state', 'Propietario') !!}
                                    {!! Form::text('state',null,['class'=>'form-control','placeholder'=>'Propietario', 'requerid' ]) !!}
                                </div>

                            </div>

                            <!-- Segunda Columna -->
                            <div class="col-md-6">
                                <div class="row">
                                    tags
                                </div>
                                <div class="form-group">
                                    {!! Form::label('state', 'Descripción') !!}
                                    {!! Form::textarea('notes', null, ['class'=>'form-control', 'requerid'] ) !!}
                                </div>
                                <div class="form-group">

                                </div>
                            </div>
                        </div>
                        {!! Form::Close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection