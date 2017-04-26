@extends('layouts.app')

@section('contentheader_title')
	Listado de Propiedades
@endsection

@section('contentheader_description')
	0
@endsection

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_controls')
	<a href="{{url('Properties/create')}}" class="btn btn-success pull-right">
	  <i class="fa fa-plus" aria-hidden="true"></i>Agregar
	</a>
@endsection

@section('main-content')

  <div class="container-fluid spark-screen">

    <div class="row">
	  <div class="col-xs-12">
		<div class="box box-primary">
			<div class="form-inline" id="filters">

				<div class="form-group">
                  <div class="col-xs-4 col-md-2">
                    {!! Form::select('project',$projects,null,['class'=>'select form-control', 'placeholder'=>'Proyecto']) !!}
                  </div>

					<div class="col-xs-4 col-md-offset-4">
                      {!! Form::select('propertyType',$propertyTypes,null,['class'=>'select form-control', 'placeholder'=>'Tipo de Propiedad']) !!}
					</div>
				</div>

{{--                <div class="form-group">

                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Tipo de Propiedad
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          @for ($i = 0; $i < 10; $i++)
                            <li><a href="#">{{ $i }}</a></li>
                          @endfor
                        </ul>
                      </div>

                </div>--}}


{{--
				<div class="form-group">

				{!! Form::label('name', 'Estado de la Propiedad') !!}

				{!! Form::text('name',null ,['class'=>'form-control','placeholder'=>'Nombre del Estado', 'requerid' ]) !!}

				</div>

				<div class="form-group">
				{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
				</div>
--}}

			</div>
{{--
			<p class="text-center">
				<a href="/pro/agencies/houses/list/?advanced=True">Búsqueda avanzada</a>
			</p>

			<hr style="margin:15px;">
--}}

          <div class="box-body">
            <div class="row">
              <table class="table table-striped">
                <thead>
                  <td>ID</td>
                  <td>Codigo</td>
                  <td>Tipo</td>
                  <td>Habitaciones</td>
                  <td>Baños</td>
                  <td>Precio</td>
                  <td>Area</td>
                  <td>Dirección</td>
                  <td>Ciudad</td>
                  <td>Acciones</td>
                </thead>
                <tbody>
                @foreach ($properties as $property)
                  <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->propertyType->name }}</td>
                    <td> {{ $property->bedrooms }}</td>
                    <td>{{ $property->bathrooms }}</td>
                    <td>{{$property->value}}</td>
                    <td>{{ $property->area }}</td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->city->name }}</td>
                    <td>
                      <a href="{{ route('Properties.edit', $property->id )}}" type="button" class="btn btn-warning" alt="Editar">
                        <i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="" alt="Borrar"
                         type="button" onclick="return confirm('Seguro en Eliminar?')"
                         class="btn btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i> </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>

              </table>
            </div>
          </div>

		</div>
      </div>
    </div>
  </div>

{{ "hola" }}
{{  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}
{{ "DOCUMENT_ROOT" }}
  {{ "$_SERVER[DOCUMENT_ROOT]" }}
@endsection



@section('js')
  <script>

    var cityDefault = 0;


    $(".chosen-select").chosen({
      no_results_text: "Oops, No hay Datos!",
      placeholder_text_multiple:"Seleccione..."
    });

    $("#state_id").change(function(event){

      $("#city_id").empty();
      $.get("/cities/"+ event.target.value, function(response, state){
        $.each(response, function(key, value) {
          if ( cityDefault == value.id)
          {
            $("#city_id").append("<option value='" + value.id + "' selected='selected'>" + value.name + "</option>");
          }
          else
          {
            $("#city_id").append("<option value='" + value.id + "'>" + value.name + "</option>");
          }
        });
      });
      if( cityDefault > 0)
        $("#city_id").val(cityDefault);
    });


    $("#bathrooms").blur(function(){
      if(Number($("#bathrooms").val()) > Number($("#bathrooms").prop('max')))
        $("#bathrooms").val($("#bathrooms").prop('max'));
    });


    $("#bedrooms").blur(function(){
      if(Number($("#bedrooms").val()) > Number($("#bedrooms").prop('max')))
        $("#bedrooms").val($("#bedrooms").prop('max'));
    });

  </script>

@endsection