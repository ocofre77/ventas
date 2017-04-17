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
                        {!! Form::Open(['route' => ['Properties.update',$property],'method' => 'PUT']) !!}

                        <div class="row">

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'Código') !!}
                                            {!! Form::text('name',$property->name,['class'=>'form-control','placeholder'=>'Código', 'required','autocomplete'=>'off' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::label('name', 'Tipo de Propiedad') !!}
                                        {!! Form::select('property_type_id',$propertyTypes,$property->property_type_id,['class'=>'select form-control','required', 'placeholder'=>'Tipo de Propiedad']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('state_id', 'Provincia') !!}
                                            {!! Form::select('state_id',$states,$property->city->state->id,['class'=>'select form-control','required', 'placeholder'=>'Seleccione Provincia']) !!}
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
                                            {!! Form::text('address',$property->address,['class'=>'form-control','placeholder'=>'Ingrese la dirección', 'required' ]) !!}
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
                                                {!! Form::number('bedrooms',$property->bedrooms,['class'=>'form-control','required' ,'placeholder'=>'0', 'min'=>'0', 'max'=>'20' ]) !!}
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
                                                {!! Form::number('bathrooms',$property->bathrooms,['class'=>'form-control','required','placeholder'=>'0', 'min'=>'0', 'max'=>'10', 'maxlength'=>'2' ]) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('area', 'Area') !!}
                                            {!! Form::text('area',$property->area,['class'=>'form-control','placeholder'=>'0.00', 'required' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('useful_area', 'Area Util') !!}
                                            {!! Form::text('useful_area',$property->useful_area,['class'=>'form-control','placeholder'=>'0.00', 'required' ]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('property_status_id', 'Estado Inmueble') !!}
                                            {!! Form::select('property_status_id',$propertyStates, $property->property_status_id, ['class'=>'select form-control', 'placeholder'=>'Estado Inmueble']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('value', 'Precio') !!}

                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </span>
                                                {!! Form::text('value',$property->value,['class'=>'form-control','placeholder'=>'0.00', 'requerid' ]) !!}
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('owner_id', 'Propietario') !!}
                                    {!! Form::text('owner_id',$property->owner_id,['class'=>'form-control','placeholder'=>'Propietario', 'requerid' ]) !!}
                                </div>

                            </div>

                            <!-- Segunda Columna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tags','Caracteristicas') !!}
                                    {!! Form::select('tags[]',$tags,$my_tags,['class'=>'form-control chosen-select','multiple', 'required']) !!}

                                </div>
                                <div class="form-group">
                                    {!! Form::label('notes', 'Descripción') !!}
                                    {!! Form::textarea('notes', $property->notes, ['class'=>'form-control', 'requerid'] ) !!}
                                </div>
                                <div class="form-group">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Editar',['class'=>'btn btn-primary', 'rows'=>3]) !!}
                        </div>
                        {!! Form::Close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>

        if( $("#state_id").val() > 0 ){
            cityDefault = {{ $property->city->id }};
            $("#state_id").trigger('change');
        }

    </script>

@endsection