@extends('layouts.app')

@section('contentheader_title')
	Caracteristicas
@endsection

@section('htmlheader_title')
	Caracteristicas
@endsection

@section('contentheader_description')
	0
@endsection

@section('contentheader_controls')
	<a href="{{url('Tags/create')}}" type="button" class="btn btn-primary">
	<i class="fa fa-plus" aria-hidden="true"></i>
	Agregar
	</a>
@endsection

@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Listado Caracteristicas</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">

			
						<div class="row">
							<table class="table table-striped">
								<thead>
									<td>ID</td>
									<td>Descripción</td>
									<td>Acción</td>
								</thead>
								<tbody>
									@foreach ($tags as $tag)
										<tr>
											<td>{{ $tag->id }}</td>
											<td>{{ $tag->name }}</td>
											<td>
												<a href="{{ route('Tags.edit', $tag->id )}}" type="button" class="btn btn-warning">
													<i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
												<a href="{{ route('Tags.destroy', $tag->id )}}" type="button" onclick="return confirm('Seguro en Eliminar?')" class="btn btn-danger">
													<i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
											</td>
										</tr>
									@endforeach
								</tbody>

							</table>
						</div>

					</div>

					<div class="text-center">
						{{ $tags->links() }}
					</div>


				</div>
			</div>
		</div>
	</div>
@endsection
