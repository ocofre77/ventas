@extends('layouts.app')

@section('contentheader_title')
    Tracking
@endsection

@section('contentheader_description')
    0
@endsection

@section('htmlheader_title')
    Tracking
@endsection


@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tracking</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        {!! Form::Open(['route' => 'Trackings.store','method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('property_type_id', 'Tipo de Propiedad') !!}
                            {!! Form::select('property_type_id',$propertyTypes,null,['class'=>'select form-control','required', 'placeholder'=>'Tipo de Propiedad']) !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('bedrooms_min', 'Habitaciones: min') !!}
                                    {!! Form::number('bedrooms_min',null,['class'=>'form-control','placeholder'=>'0', 'requerid', 'min'=> '0' ]) !!}

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('bedrooms_max', 'Habitacines:max') !!}
                                    {!! Form::number('bedrooms_max',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('bathrooms_min', 'Baños: min') !!}
                                    {!! Form::number('bathrooms_min',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('bathrooms_max', 'Baños:max') !!}
                                    {!! Form::number('bathrooms_max',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}

                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::Close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection