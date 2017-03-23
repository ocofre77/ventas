@extends('layouts.app')

@section('contentheader_title')
	Tipo de Propiedad
@endsection

@section('contentheader_description')
	0
@endsection

@section('htmlheader_title')
	Tipo de Propiedad
@endsection


@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Crear Tipo de Propiedad</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>

					<div class="box-body">

					{!! Form::Open(['route' => 'PropertyTypes.store','method' => 'POST']) !!}
						<div class="form-group">

						{!! Form::label('name', 'Tipo de Propiedad') !!}
						{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del Estado', 'requerid' ]) !!}

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