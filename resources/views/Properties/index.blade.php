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

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="form-inline" id="filters">

				<div class="form-group">
					<div class="controls col-xs-6 col-md-2"> 
                      {!! Form::select('propertyType',$propertyTypes,null,['class'=>'select form-control', 'placeholder'=>'Tipo de Propiedad']) !!}
					</div>
				</div>

        <div class="form-group">
            
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
          
        </div>


				<div class="form-group">

				{!! Form::label('name', 'Estado de la Propiedad') !!}

				{!! Form::text('name',null ,['class'=>'form-control','placeholder'=>'Nombre del Estado', 'requerid' ]) !!}

				</div>

				<div class="form-group">
				{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
				</div>
			</div>
			<p class="text-center">
				<a href="/pro/agencies/houses/list/?advanced=True">Búsqueda avanzada</a>
			</p>
			<hr style="margin:15px;">
<form id="house_action_form" action="/pro/house/mass_action/" method="post">
      <input type="hidden" name="csrfmiddlewaretoken" value="zIMsh3Y86TVWvfea5z9ORmpQR4T6M2w2">
      <div id="house_action_form_header" style="display:none">
        <label class="control-label" style="padding:10px">
          <select name="action" class="select form-control" style="font-weight:normal">
            <option value="" selected="selected">Selecciona una acción</option>
            <option value="status_inactive">Cambiar estado a inactivo</option>
            <option value="status_available">Cambiar estado a disponible</option>
            <option value="generate_magazine">Generar revista</option>
          </select>
        </label>
        <button type="submit" style="margin-right:10px;" value="0" class="btn btn-primary btn-sm confirm-dialog-button-form">
          Aplicar
        </button>
        <small class="text-muted" id="action-counter"></small>
      </div>
      <table class="table table-striped table-hover table-condensed">
        <thead>
          <tr style="font-size:120%;">
            <th>
              <input class="checkbox" id="id_select_all" name="select_all" type="checkbox" style="margin:4px auto;" value="310945,310944,310927,310655">
            </th>
            <th class="hidden-xs">Foto</th>
            <th>Ref</th>
            <th class="hidden-xs">Tipo</th>
            <th class="hidden-xs">Planta</th>
            <th class="hidden-xs">Hab.</th>
            <th class="hidden-xs">Baño</th>
            <th class="hidden-xs">Sup.</th>
            
            <th>Ciudad</th>
            
            
            <th class="hidden-xs">Calle</th>
            
            <th>Alquiler</th>
            <th>Venta</th>
            
            
              <th class="hidden-xs">Colaborador</th>
            
            <th></th>
          </tr>
        </thead>
        <tbody class="list">
          
          <tr class="clickable" onclick="window.location='/pro/agencies/house/310945/tracking/'">
            <td onclick="event.stopImmediatePropagation();">
              <input id="id_houses_0" name="houses" type="checkbox" value="310945">
            </td>
            <td class="hidden-xs" style="width:110px;">
              
                <img class="img-thumbnail lazy" width="100" height="100" data-original="/static/img/house_no_pic.jpg" src="/static/img/house_no_pic.jpg" style="display: inline-block;">
              
            </td>
            <td class="identifier">DEP-0002</td>
            <td class="hidden-xs">piso</td>
            <td class="hidden-xs">N/A</td>
            <td class="hidden-xs">4</td>
            <td class="hidden-xs">3</td>
            <td class="hidden-xs">260m</td>
            
            <td class="city">Quito</td>
            
            <td class="street hidden-xs">
              <span data-toggle="tooltip" data-placement="top" title="Avenida 10 de Agosto, 14, -, Quito, Quito">
                
                  Avenida 10 de Agosto
                
              </span>
            </td>
            <td class="renting_cost">-
              $</td>
            <td class="selling_cost">800.000
              $</td>
            
            
            <td class="hidden-xs" style="background-color: #d9edf7">Ana Paola Peña</td>
            
            <td>
              
                
                  <a class="btn btn-info" href="/pro/house/update/310945/">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                
              
            </td>
          </tr>
          
          <tr class="clickable" onclick="window.location='/pro/agencies/house/310944/tracking/'">
            <td onclick="event.stopImmediatePropagation();">
              <input id="id_houses_1" name="houses" type="checkbox" value="310944">
            </td>
            <td class="hidden-xs" style="width:110px;">
              
                <img class="img-thumbnail lazy" width="100" height="100" data-original="/static/img/house_no_pic.jpg" src="/static/img/house_no_pic.jpg" style="display: inline-block;">
              
            </td>
            <td class="identifier">WIT-0001</td>
            <td class="hidden-xs">piso</td>
            <td class="hidden-xs">4</td>
            <td class="hidden-xs">2</td>
            <td class="hidden-xs">2</td>
            <td class="hidden-xs">200m</td>
            
            <td class="city">Madrid</td>
            
            <td class="street hidden-xs">
              <span data-toggle="tooltip" data-placement="top" title="Goya, 20, 28001, Madrid, Madrid">
                
                  Goya
                
              </span>
            </td>
            <td class="renting_cost">-
              $</td>
            <td class="selling_cost">600.000
              $</td>
            
            
            <td class="hidden-xs">-</td>
            
            <td>
              
                
                  <a class="btn btn-info" href="/pro/house/update/310944/">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                
              
            </td>
          </tr>
          
          <tr class="clickable" onclick="window.location='/pro/agencies/house/310927/tracking/'">
            <td onclick="event.stopImmediatePropagation();">
              <input id="id_houses_2" name="houses" type="checkbox" value="310927">
            </td>
            <td class="hidden-xs" style="width:110px;">
              
                
                  
                  <img class="img-thumbnail lazy" width="100" height="100" data-original="https://witei-media.s3.amazonaws.com/cache/c4/46/c44600fa22aa23b22ce1272560251e31.jpg" src="https://witei-media.s3.amazonaws.com/cache/c4/46/c44600fa22aa23b22ce1272560251e31.jpg" style="display: inline-block;">
                  
                
              
            </td>
            <td class="identifier">DEP-CAROLINA</td>
            <td class="hidden-xs">piso</td>
            <td class="hidden-xs">29</td>
            <td class="hidden-xs">3</td>
            <td class="hidden-xs">2</td>
            <td class="hidden-xs">125m</td>
            
            <td class="city">Quito</td>
            
            <td class="street hidden-xs">
              <span data-toggle="tooltip" data-placement="top" title="Avenida de los Shyris &amp; Naciones Unidas, S/N, -, Quito, Quito">
                
                  Avenida de los Shyris &amp; Naciones Unidas
                
              </span>
            </td>
            <td class="renting_cost">-
              $</td>
            <td class="selling_cost">200
              $</td>
            
            
            <td class="hidden-xs" style="background-color: #d9edf7">Ana Paola Peña</td>
            
            <td>
              
                
                  <a class="btn btn-info" href="/pro/house/update/310927/">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                
              
            </td>
          </tr>
          
          <tr class="clickable" onclick="window.location='/pro/agencies/house/310655/tracking/'">
            <td onclick="event.stopImmediatePropagation();">
              <input id="id_houses_3" name="houses" type="checkbox" value="310655">
            </td>
            <td class="hidden-xs" style="width:110px;">
              
                <img class="img-thumbnail lazy" width="100" height="100" data-original="/static/img/house_no_pic.jpg" src="/static/img/house_no_pic.jpg" style="display: inline-block;">
              
            </td>
            <td class="identifier">EJEMPLO</td>
            <td class="hidden-xs">piso</td>
            <td class="hidden-xs">N/A</td>
            <td class="hidden-xs">2</td>
            <td class="hidden-xs">2</td>
            <td class="hidden-xs">130m</td>
            
            <td class="city">Madrid</td>
            
            <td class="street hidden-xs">
              <span data-toggle="tooltip" data-placement="top" title="Calle de Goya, 20, 28001, Madrid, Madrid">
                
                  Calle de Goya
                
              </span>
            </td>
            <td class="renting_cost">-
              $</td>
            <td class="selling_cost">150.000
              $</td>
            
            
            <td class="hidden-xs">-</td>
            
            <td>
              
                
                  <a class="btn btn-info" href="/pro/house/update/310655/">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                
              
            </td>
          </tr>
          
        </tbody>
      </table>
    </form>

    <!--
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    -->
		</div>
	</div>
</div>

@endsection