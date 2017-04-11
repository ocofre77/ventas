@extends('layouts.app')

@section('contentheader_title')
    <h1 id="section-title">

        Arely Cortez

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
                <h4 style="padding-left:5px;">Actividad</h4>





                <ul class="timeline">
                    <li>
                        <i class="fa fa-plus"></i>
                        <div class="timeline-item" style="width:0;">
                            <button type="button" data-toggle="modal" data-target="#task_modal" class="btn btn-success">
                                Agregar
                            </button>
                        </div>
                    </li>

                    <h3></h3>
                    <li class="time-label">
          <span class="bg-gray">
            11 Abr. 2017
          </span>
                    </li>




                    <li id="task-889751">
                        <i class="fa fa-home"></i>
                        <div class="timeline-item">
    <span class="pull-right" style="padding:5px;">


        <a href="/pro/agencies/task/done/889751" class="btn btn-xs btn-success">
            <i class="fa fa-check"></i>
        </a>


      <div class="btn-group" role="group">
          <button class="btn btn-xs btn-default dropdown-toggle" type="button" id="task-889751-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-cog"></i>
          </button>
          <ul class="dropdown-menu pull-right" aria-labelledby="task-889751-options">
              <li>
                  <a href="/pro/agencies/task/update/889751?next_url=/pro/agencies/contact/600458/tracking/">
                      <i class="fa fa-edit"></i>
                      Editar
                  </a>
              </li>

              <li>
                  <a href="/pro/agreements/contract/visit_report/357244/create/?from_task=889751">
                      <i class="fa fa-file-text-o"></i>
                      Crear parte de visita
                  </a>
              </li>


          </ul>
      </div>

    </span>
                            <h3 class="timeline-header">
                                <strong>14:15 - 15:15 Visita</strong>
                            </h3>
                            <div class="timeline-body">

                                <a href="/pro/agencies/house/357244/tracking/">Piso en Calle de Goya, Madrid, Madrid de 130 m2</a>
                                <br>



                                <p>
                                </p><p>visit</p>
                                <p></p>

                            </div>
                            <div class="timeline-footer">


                                <img src="https://witei.com/static/img/profile_pics/avatar4.png" style="position:absolute;bottom:5px;right:5px;border-radius:3px;width:25px;height:25px" data-toggle="tooltip" data-placement="left" title="Margarita Nazate">

                            </div>
                        </div>
                    </li>


                    <h3></h3>
                    <li class="time-label">
          <span class="bg-gray">
            09 Abr. 2017
          </span>
                    </li>




                    <li id="task-882823">
                        <i class="fa fa-user-plus"></i>
                        <div class="timeline-item">
    <span class="pull-right" style="padding:5px;">

      <div class="btn-group" role="group">
          <button class="btn btn-xs btn-default dropdown-toggle" type="button" id="task-882823-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-cog"></i>
          </button>
          <ul class="dropdown-menu pull-right" aria-labelledby="task-882823-options">
              <li>
                  <a href="/pro/agencies/task/update/882823?next_url=/pro/agencies/contact/600458/tracking/">
                      <i class="fa fa-edit"></i>
                      Editar
                  </a>
              </li>


              <li>
                  <a href="/pro/agencies/task/undone/882823">
                      <i class="fa fa-repeat"></i>
                      Reactivar
                  </a>
              </li>

          </ul>
      </div>

    </span>
                            <h3 class="timeline-header">
                                <strong>15:26 - 15:41 Crear contacto</strong>
                            </h3>
                            <div class="timeline-body">



                            </div>
                            <div class="timeline-footer">


                                <img src="https://witei.com/static/img/profile_pics/avatar2.png" style="position:absolute;bottom:5px;right:5px;border-radius:3px;width:25px;height:25px" data-toggle="tooltip" data-placement="left" title="Margarita Nazate">

                            </div>
                        </div>
                    </li>


                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>

























                <!-- Fin Time -->
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
                            {!! Form::hidden('contact_id',$id) !!}
                            <div class="form-group">
                                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::Close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h4 style="padding-left:5px;">Inmuebles</h4>

                <div style="margin-top:20px;">
                    <i class="fa fa-thumbs-up"></i> INMUEBLES FAVORITOS
                    <a class="btn btn-primary pull-right btn-xs" style="margin-top:-5px;" href="/pro/agencies/contact/600458/interested_in/">
                        <i class="glyphicon glyphicon-plus"></i>
                        Agregar inmueble
                    </a>
                    <br>

                    <div class="info-box" style="position: relative;margin:2px 0;" property-pic="https://witei.com/static/img/house_no_pic.jpg" property-title="Piso en venta en Madrid de 130 m2" property-pk="357244" property-description="Lujoso piso con bonitas vistas. Muy luminoso. Mejor ver." property-cost="150.000 €" property-bedrooms="2" property-bathrooms="2" property-agency="Margarita Nazate" property-externalurl="" ondragstart="return false;">
                        <div class="info-box-icon bg-aqua">
                            <a href="/pro/agencies/house/357244/tracking/" style="color:white;">
                                <i class="fa fa-paperclip attach" style="display:none;"></i>
                                <i class="fa fa-paperclip sent bg-maroon" style="display:none"></i>

                                <i class="fa fa-home"></i>

                            </a>
                        </div>
                        <div class="info-box-content" style="padding-left:10px;">
                            <a href="/pro/agencies/house/357244/tracking/" class="house-link">
                                Piso en
                                Calle de Goya,
                                Madrid,
                                130 m<sup>2</sup>
                            </a><br>
                            <span class="label label-default">EJEMPLO</span>

    <span class="label label-primary" style="margin-right:2px;">
      150.000 €
    </span>


                            <div class="btn-group" style="position: absolute; left: 100px; bottom: 9px; ">

                            </div>

                            <div class="btn-group" style="position: absolute; right: 5px; bottom: 5px; ">


                                <a class="btn btn-sm btn-default" href="/pro/agencies/contact/600458/dislike/357244/">
                                    <i style="font-size:130%;" class="fa fa-thumbs-down"></i>
                                </a>


                                <a class="btn btn-sm btn-default" href="http://witei.com/house/357244-piso-en-venta-en-madrid-de-130-m2-150000eur-EJEMPLO/" target="_blank">
                                    <i style="font-size:130%;" class="fa fa-eye"></i>
                                </a>

                            </div>
                        </div><!-- /.info-box-content -->
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection