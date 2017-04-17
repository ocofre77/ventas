<div class="row">
    <div class="col-md-4">
        {!! Form::label('date', 'Fecha') !!}
        {!! Form::date('date', \Carbon\Carbon::now(),['class'=>' form-control']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('hour_from', 'Hora Desde') !!}
        {!! Form::date('hour_from', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('hour_to', 'Hora Hasta') !!}
        {!! Form::date('hour_to', \Carbon\Carbon::now(),['   class'=>'form-control']) !!}
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
        {!! Form::textarea('notes', null,['class'=>'form-control']) !!}
    </div>
</div>
