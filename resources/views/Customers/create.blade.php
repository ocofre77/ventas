@extends('layouts.app')

@section('contentheader_title')
    Contactos
@endsection

@section('contentheader_description')
    0
@endsection

@section('htmlheader_title')
    Contactos
@endsection


@section('main-content')

    @if( count( $errors) > 0 )
        {{ dd($errors) }}
    @endif


    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crear Contacto</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        {!! Form::Open(['route' => 'Customers.store','method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del Cliente', 'requerid', 'maxlength' => 60 ]) !!}
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('customer_type_id', 'Tipo de Contacto') !!}
                                    {!! Form::select('customer_type_id',$customerTypes, null, ['class'=>'form-control','placeholder' => 'Seleccione..']) !!}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email', 'requerid' ]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('phone', 'Teléfono') !!}
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Teléfono', 'requerid', 'maxlength' => 10  ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('cell_phone', 'Celular') !!}
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">
                                            <i class="fa fa-mobile"></i>
                                        </span>
                                        {!! Form::text('cell_phone',null,['class'=>'form-control','placeholder'=>'Celular', 'requerid', 'maxlength' => 10 ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('city', 'Ciudad') !!}
                                    {!! Form::text('city',null,['class'=>'form-control','placeholder'=>'Ciudad', 'requerid', 'maxlength' => 40 ]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Direccion') !!}
                            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Dirección', 'requerid', 'maxlength' => 120 ]) !!}
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                              {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                              <a class="btn btn-labeled btn-default" href="{{ route('Customers.index') }}">
                                  <span class="btn-label"><i class="fa fa-chevron-left"></i></span>
                                  {{ trans('entrust-gui::button.cancel') }}
                              </a>
                          </div>
                        </div>

                        {!! Form::Close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
