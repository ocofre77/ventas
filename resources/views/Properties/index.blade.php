@extends('layouts.app')

@section('contentheader_title')
	Listado de Propiedades
@endsection

@section('contentheader_description')
	{{ $properties->total() }}
@endsection

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_controls')

  {!! Form::Open(['route' => 'Properties.index','method' => 'GET','files'=> true, 'class'=>'navbar-form navbar-right']) !!}
    {!! Form::select('project',$projects,null,['class'=>'select form-control', 'placeholder'=>'Proyecto']) !!}
    {!! Form::select('propertyType',$propertyTypes,null,['class'=>'select form-control', 'placeholder'=>'Tipo de Propiedad']) !!}
    <button type="submit" class="btn btn-default">Buscar</button>
    <a href="{{url('Properties/create')}}" class="btn btn-success ">
      <i class="fa fa-plus" aria-hidden="true"></i>Agregar
    </a>
  {!! Form::Close() !!}

@endsection

@section('main-content')

  <div class="container-fluid spark-screen">
    <div class="row">
	  	<div class="col-xs-12">
				<div class="box box-primary">
					<div class="form-inline" id="filters">
					</div>

          <div class="box-body">
            <div class="row">
              <table class="table table-striped">
                <thead>
                  <td>ID</td>
                  <td>Imagen</td>
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
                    <td>
                      @if( $property->images->count() > 0 )
                        <img src="images/galery/{{ $property->images[0]->name }}" style="width:60px; height: 40px;"  alt="">
                      @else
                      <img src="img/no-photo.png" style="width:60px; height: 40px;"  alt="">
                      @endif
                    </td>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->propertyType->name }}</td>
                    <td> {{ $property->bedrooms }}</td>
                    <td>{{ $property->bathrooms }}</td>
                    <td>{{$property->value}}</td>
                    <td>{{ $property->area }}</td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->city->name }}</td>
                    <td style="width:96px;">
                      <a href="{{ route('Properties.edit', $property->id )}}" type="button" class="btn btn-xs btn-warning " alt="Editar">
                        <i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="" alt="Borrar"
                         data-href="{{ route('Properties.destroy', $property->id )}}"
                         type="button"
                         class="btn btn-xs btn-danger"  data-toggle="modal" data-target="#confirm-delete">
                        <i class="fa fa-trash" aria-hidden="true"></i> </a>
                      <a class="btn btn-xs btn-default"
                         href="{{ route('Properties.show', $property->id )}}" target="_blank">

                        <i style="font-size:130%;" class="fa fa-eye"></i>
                      </a>

                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="text-center">
            {{ $properties->links() }}
          </div>
		</div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirmar Borrado</h4>
        </div>

        <div class="modal-body">
          <p>Estás a punto de eliminar un inmueble, este procedimiento es irreversible.</p>
          <p>¿Quieres proceder?</p>
          <p class="debug-url"></p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger btn-ok">Delete</a>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('js')
  <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
  </script>
@endsection
