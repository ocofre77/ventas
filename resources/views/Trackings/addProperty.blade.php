@extends('layouts.app')

@section('contentheader_title')
Agregar Propiedad
@endsection

@section('contentheader_description')

@endsection

@section('htmlheader_title')
    Tracking
@endsection


@section('main-content')


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Seleccione la Propiedad</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Form::Open(['route' => 'Trackings.storeProperty','method' => 'POST']) !!}
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputEmail3">Proyecto</label>

                    <div class="col-sm-10">
                        {!! Form::select('project_id',$projects,null,['class'=>'select form-control','required','id'=>'project_id', 'placeholder'=>'Selecione Proyecto']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputPassword3">Inmueble</label>
                    <div class="col-sm-10">
                        <select id="property_id" name="property_id" required='required' class="select form-control" placeholder="Seleccione Propiedad"></select>
                    </div>
                </div>

            </div>
            {!! Form::hidden('tracking_id', $tracking_id  ) !!}
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Cancelar</button>
                <button class="btn btn-info pull-right" type="submit">Agregar</button>
            </div>
        {!! Form::Close() !!}

    </div>


@endsection