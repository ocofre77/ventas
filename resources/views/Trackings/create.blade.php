@extends('layouts.app')

@section('contentheader_title')
    <h1 id="section-title">

        {{ $customer->name }}

        <div style="font-size:12px;display:inline-block;margin:0px 0px 0px 5px;">
            <div class="rating-container rating-xs rating-animate"><div class="rating"><span class="empty-stars"><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span></span><span class="filled-stars" style="width: 0%;"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span></span></div><input id="rating-input" class="rating hide" min="0" max="3" step="1" data-size="xs" data-stars="3" value="0" data-show-clear="false" data-show-caption="false" type="number"></div>
        </div>

        <small>

        </small>
        <small class="pull-right">

            <!-- Conversations -->
            <div class="btn-group pull-right" title="Indica un correo válido para empezar a enviar mensajes.">
                <a class="btn btn-primary disabled" href="#">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Nueva conversación
                </a>

            </div>
            <!-- END Conversations -->
            <!-- Edit -->
            <div class="btn-group pull-right" style="margin-right:8px;">
                <a class="btn btn-primary" href="/pro/agencies/contact/600458/update/">
                    <i class="glyphicon glyphicon-edit"></i> Editar
                </a>

                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="confirm-dialog" href="" data-url="/pro/agencies/contact/600458/delete/" data-text="Al eliminar este contacto se eliminarán también todas sus conversaciones, perfil, e historial.">
                            <i class="fa fa-remove"></i>
                            Eliminar contacto
                        </a>
                    </li>
                </ul>

            </div>
            <!-- END Edit -->

            <form method="post" class="pull-right" style="margin-right:8px;" action="/api/v1/contact/update_funnel_step/">
                <input name="csrfmiddlewaretoken" value="e3XrsmQk6l8qIuRwpoXx97nBWGdtdTDv" type="hidden">
                <input name="contact_id" value="600458" type="hidden">
                <input name="step_id" value="10" type="hidden">
                <input class="btn btn-success" value="ganado" type="submit">
            </form>
            <form method="post" class="pull-right" style="margin-right:8px;" action="/api/v1/contact/update_funnel_step/">
                <input name="csrfmiddlewaretoken" value="e3XrsmQk6l8qIuRwpoXx97nBWGdtdTDv" type="hidden">
                <input name="contact_id" value="600458" type="hidden">
                <input name="step_id" value="-1" type="hidden">
                <input class="btn btn-danger" value="inactivo" type="submit">
            </form>


        </small>
    </h1>
@endsection

@section('contentheader_description')

@endsection

@section('htmlheader_title')
    Tracking
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
                <div class="row">

                    <div class="col-md-3">
                        @include('Trackings.partials.tasks')
                    </div>

            <div class="col-md-4">
                <h4 style="padding-left:5px;">Intereses</h4>

                <div class="box">
                    <div class="box-body">
                        {!! Form::Open(['route' => 'Trackings.store','method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('property_type_id', 'Tipo de Propiedad') !!}
                                        {!! Form::select('property_type_id',$propertyTypes,null,['class'=>'select form-control','required', 'placeholder'=>'Tipo de Propiedad']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('business_status_id', 'Estado') !!}
                                        {!! Form::select('business_status_id',$businessStatus,null,['class'=>'select form-control','required', 'placeholder'=>'Estado Negocio']) !!}
                                    </div>
                                </div>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('area_min', 'Area: desde') !!}
                                        {!! Form::number('area_min',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('area_max', 'Area: hasta') !!}
                                        {!! Form::number('area_max',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('value_min', 'Precio: mínimo') !!}
                                        {!! Form::number('value_min',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('value_max', 'Precio:máximo') !!}
                                        {!! Form::number('value_max',null,['class'=>'form-control','placeholder'=>'0', 'requerid','min'=> '0' ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::label('tags','Caracteristicas') !!}
                                        {!! Form::select('tags[]',$tags,null,['class'=>'form-control chosen-select','multiple', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::hidden('contact_id',$customer->id) !!}
                            <div class="form-group">
                                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::Close() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                @include('Trackings.partials.properties')
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        //Date picker
        $('#date').datepicker({
            autoclose: true
        });


        //Timepicker
        /*
        $(".timepicker").timepicker({
            showInputs: true
        });
        */



        $('#hour_from').timepicker({
            'setTime': new Date(),
            'minTime': '7:00am',
            'maxTime': '7:00pm',
            'showDuration': true
        });

        $('#hour_to').timepicker('setTime', new Date());


        $('#btmAddTask').addClass('disabled');
        $('#btmAddTask').removeAttr('data-toggle');

        /*
        $('#btmAddTask').removeClass('disabled');
        $('#btmAddTask').attr("data-toggle", "modal");
*/

/*
         $('#timepicker4').timepicker({
         minuteStep: 1,
         secondStep: 5,
         showInputs: false,
         template: 'modal',
         modalBackdrop: true,
         showSeconds: true,
         showMeridian: false,
         step:15,
         });
*/


    </script>
@endsection