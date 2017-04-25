@extends('layouts.app')

@section('htmlheader_title')
    Usuarios
@endsection

@section('contentheader_title')
    Usuarios
@endsection


@section('main-content')
<form action="{{ route('entrust-gui::users.store') }}" method="post" role="form">
    @include('entrust-gui::users.partials.form')
    <button type="submit" id="create" class="btn btn-labeled btn-primary">
        <span class="btn-label"><i class="fa fa-plus"></i></span>
        {{ trans('entrust-gui::button.create') }}
    </button>
    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}">
        <span class="btn-label"><i class="fa fa-chevron-left"></i></span>
        {{ trans('entrust-gui::button.cancel') }}
    </a>
</form>
@endsection
