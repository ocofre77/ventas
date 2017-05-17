@extends('layouts.app')

@section('contentheader_title')
    Mail
@endsection

@section('htmlheader_title')
    Mail
@endsection

@section('contentheader_description')
    0
@endsection

@section('contentheader_controls')

@endsection

@section('main-content')

        <!-- quick email widget -->
    <div class="box box-info">
        <div class="box-header">
            <i class="fa fa-envelope"></i>

            <h3 class="box-title">Quick Email</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>


        {!! Form::Open(['route' => 'Mail.store','method' => 'POST']) !!}
        <div class="box-body">
                <div class="form-group">
                    <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                    <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

        </div>
        {!! Form::submit('Send',['class'=>'btn btn-primary']) !!}

        {!! Form::Close() !!}
    </div>


@endsection
