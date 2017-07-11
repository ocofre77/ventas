@extends('layouts.app')

@section('contentheader_title')
    Inmnuebles
@endsection

@section('contentheader_description')
    Crear
@endsection

@section('htmlheader_title')
    Inmnuebles
@endsection

@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!--
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulario de Inmnueble</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
-->
                    <div class="box-body">

                        {!! Form::Open(['route' => 'Properties.store','method' => 'POST','files'=> true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::label('project_id', 'Proyecto') !!}
                                            {!! Form::select('project_id',$projects,null,['class'=>'select form-control','required', 'placeholder'=>'Seleccione Proyecto']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'Código') !!}
                                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Código', 'required','autocomplete'=>'off' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::label('name', 'Tipo de Propiedad') !!}
                                        {!! Form::select('property_type_id',$propertyTypes,null,['class'=>'select form-control','required', 'placeholder'=>'Tipo de Propiedad']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('state_id', 'Provincia') !!}
                                            {!! Form::select('state_id',$states,null,['class'=>'select form-control','required', 'placeholder'=>'Seleccione Provincia']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('city_id', 'Ciudad') !!}
                                            <select id="city_id" name="city_id" required='required' class="select form-control" placeholder="Seleccione Ciudad"></select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::label('address', 'Dirección') !!}
                                            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección', 'required' ]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('bedrooms', 'Habitaciones') !!}
                                            <div class="input-group">
                                                    <span class="input-group-addon" id="sizing-addon2">
                                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                                    </span>
                                                {!! Form::number('bedrooms',null,['class'=>'form-control','required' ,'placeholder'=>'0', 'min'=>'0', 'max'=>'20' ]) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('bathrooms', 'Baños') !!}
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">
                                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                                </span>
                                                {!! Form::number('bathrooms',null,['class'=>'form-control','required','placeholder'=>'0', 'min'=>'0', 'max'=>'10', 'maxlength'=>'2' ]) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('area', 'Area') !!}
                                            {!! Form::text('area',null,['class'=>'form-control','placeholder'=>'0.00', 'required' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('useful_area', 'Area Util') !!}
                                            {!! Form::text('useful_area',null,['class'=>'form-control','placeholder'=>'0.00', 'required' ]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('property_status_id', 'Estado Inmueble') !!}
                                            {!! Form::select('property_status_id',$propertyStates,null,['class'=>'select form-control', 'placeholder'=>'Estado Inmueble']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('value', 'Precio') !!}

                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </span>
                                                {!! Form::text('value',null,['class'=>'form-control','placeholder'=>'0.00', 'requerid' ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- Segunda Columna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tags','Caracteristicas') !!}
                                    {!! Form::select('tags[]',$tags,null,['class'=>'form-control chosen-select','multiple', 'required']) !!}

                                </div>
                                <div class="form-group">
                                    {!! Form::label('notes', 'Descripción') !!}
                                    {!! Form::textarea('notes', null, ['class'=>'form-control', 'requerid'] ) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('image', 'Imágenes') !!}
                                    {!! Form::file('images[]', array('multiple'=>true)) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('owner_id', 'Propietario') !!}
                                    {!! Form::text('owner_id',null,['class'=>'form-control','placeholder'=>'Propietario', 'requerid' ]) !!}
                                </div>

                                <div class="form-group">
                              <!--
                                    {!!$map['html']!!}
                              -->
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Registrar',['class'=>'btn btn-primary', 'rows'=>3]) !!}
                        </div>
                        {!! Form::Close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
{{--

    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3bFi2IcZprQpW2KZpyndWEde2FCnN3Do"></script>
--}}

    <script type="text/javascript">
        $(".chosen-select").chosen({});
    </script>

@endsection