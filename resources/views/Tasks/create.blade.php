@extends('layouts.app')

@section('contentheader_title')
    Registro de Tarea
@endsection

@section('contentheader_description')
    0
@endsection

@section('htmlheader_title')
    Registro de Tarea
@endsection

@section('main-content')

                <!--
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">Modal Header</h4>
                               </div>
                -->

                {!! Form::Open(['route' => 'Tasks.store', 'method' => 'POST']) !!}

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-md-6">
                            {!! Form::label('date', 'Fecha') !!}

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {!! Form::text('date', \Carbon\Carbon::now()->format('d/m/Y'),['class'=>' form-control pull-righ']) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-md-6">
                            {!! Form::label('hour_from', 'Hora Desde') !!}
                            <div class="input-group">
                                {!! Form::text('hour_from',null,['class'=>'form-control timepicker time']) !!}
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-6">
                            {!! Form::label('hour_to', 'Hora Hasta') !!}
                            <div class="input-group">
                                {!! Form::text('hour_to', null ,['   class'=>'form-control timepicker time']) !!}
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('task_type_id','Tipo de Tarea') !!}
                            {!! Form::select('task_type_id',$taskTypes, null,['class' =>'select form-control' ]) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('property_id','Inmueble') !!}
                            {!! Form::text('property_id', null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::label('notes','Notas') !!}
                            {!! Form::textarea('notes', null,['class'=>'form-control','size' => '30x3']) !!}
                        </div>
                    </div>
                    {!! Form::hidden('tracking_id', $tracking_id  ) !!}
                </div>
                    {!! Form::submit('Agregar Tarea',['class'=>'btn btn-primary']) !!}

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                {!! Form::Close() !!}

@endsection

@section('js')

    <script>
        //Date picker
        $('#date').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        });

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: true
        });

        $('.row .time').timepicker({
            'showDuration': true,
            'minTime': '8:00am',
            'maxTime': '6:pm',
            'step':15,
            'timeFormat': 'g:ia'
        });



    </script>



@endsection