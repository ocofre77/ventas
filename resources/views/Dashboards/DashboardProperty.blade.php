@extends('layouts.app')

@section('contentheader_title')
    Tipos de Propiedad
@endsection

@section('contentheader_description')
    0
@endsection

@section('htmlheader_title')
    Estado de Propiedades
@endsection

@section('contentheader_controls')

@endsection

@section('main-content')

<section class="content">

    <div role="alert" class="row alert alert-dismissible alert-success" style="margin:0px;margin-bottom:10px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <p class="success">
            Has cerrado sesión.
        </p>
    </div>




    <div class="row">
        <div class="col-md-12">

            <div class="row" style="margin:0">
                <div style="display:inline">
                    <div class="col-md-2 col-xs-4">




                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual cyan">
                                    <div class="statbox-sparkline">
                                    </div>
                                </div> <div class="title">

                                    Inmuebles activos

                                </div>
                                <div class="value">
                                    1
                                </div>
                                <a class="more" href="&#10;    &#10;      /pro/agencies/houses/list/ &#10;    &#10;    ">Ver todos
                                    <i class="pull-right icon-angle-right"></i></a> </div>
                        </div>


                    </div>
                    <div class="col-md-2 col-xs-4" id="active_contacts">




                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual cyan">
                                    <div class="statbox-sparkline">
                                    </div>
                                </div> <div class="title">

                                    Contactos activos

                                </div>
                                <div class="value">
                                    1
                                </div>
                                <a class="more" href="&#10;    &#10;      /pro/agencies/contact/list/ &#10;    &#10;    ">Ver todos
                                    <i class="pull-right icon-angle-right"></i></a> </div>
                        </div>


                    </div>
                    <div class="col-md-2 col-xs-4">




                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual cyan">
                                    <div class="statbox-sparkline">
                                    </div>
                                </div> <div class="title">

                                    Tareas activas

                                </div>
                                <div class="value">
                                    0
                                </div>
                                <a class="more" href="&#10;    &#10;      /pro/agencies/task/list/2017/week/12/#day-23&#10;    &#10;    ">Ver todos
                                    <i class="pull-right icon-angle-right"></i></a> </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="alert-message alert-message-info" style="margin:0;padding:10px">
                        <h4>
                            <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                            Wiconsejo</h4>
                        <p>
                            Rellenando las demandas de un contacto, podrás saber rápidamente que inmuebles coinciden con sus gustos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expired_tasks" aria-controls="expired_tasks" role="tab" data-toggle="tab">Urgente </a></li>
                    <li role="presentation"><a href="#last_contacts" aria-controls="last_contacts" role="tab" data-toggle="tab">Últimos Contactos</a></li>
                    <li role="presentation"><a href="#last_properties" aria-controls="last_properties" role="tab" data-toggle="tab">Inmuebles</a></li>
                    <li role="presentation"><a href="#pending_tasks" aria-controls="pending_tasks" role="tab" data-toggle="tab">Tareas </a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="expired_tasks">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Contacto</th>
                                <th>Tipo</th>
                                <th>Fecha límite</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>






                        <div class="row" style="background-color:#fafafa;margin:5px 5px 15px 5px;
  background-image:url('/static/img/dashboard/task_placeholder.svg');
  background-position:right bottom;background-repeat: no-repeat;
  background-size: contain;">
                            <div class="col-md-9">
                                <p style="font-size:23px;color:#808080;padding-top:20px;">
                                    ¡Tienes todo al día!
                                </p>
                                <p style="font-size:15px;color:#808080;padding-bottom:20px;">
                                    Contínua trabajando duro, creando y cerrando tareas mientras disfrutas usando Witei :)
                                </p>
                            </div>
                        </div>





                    </div>
                    <div role="tabpanel" class="tab-pane" id="last_contacts">
                        <a class="btn btn-success btn-sm pull-right" href="/pro/agencies/contact/create/">
                            <i class="glyphicon glyphicon-plus"></i>
                            Agregar contacto
                        </a>





                        <div class="info-box" style="position:relative;margin:2px 0;min-height:60px;">

                            <div class="info-box-icon" style="background-color:#2ecc71;
              height:60px;width:60px;line-height:50px" data-toggle="tooltip" data-placement="left" title="Etapa comercial: contacto. Origen: Comercial">
                                <a href="/pro/agencies/contact/521820/tracking/" style="color:white;font-size:80%;">
                                    CD
                                </a>
                            </div>

                            <div class="info-box-content" style="padding-left:10px;margin-left:60px;">

                                <a href="/pro/agencies/contact/521820/tracking/" style="font-size:110%;">
                                    <strong>Contacto de Prueba <i></i></strong>
                                </a>
                                <!--

                                <div class="contact-funnel-step funnel-title-0 label"
                                      style=" font-size:90%; font-weight:600; color: white; padding-left: 10px; padding-right: 10px; " >
                                  contacto
                                </div>

                                -->

                                <br>

                                Quiere un
                                piso

                                en venta por menos de 180.000
                                €


                            </div><!-- /.info-box-content -->

                            <img src="https://witei.com/static/img/profile_pics/avatar1.png" style="position:absolute;top:34px;right:5px;border-radius:3px;width:25px;" data-toggle="tooltip" data-placement="left" title="Cecilia Margarita Nazate">


                            <div class="btn-group" style="position: absolute; right: 5px; top: 5px; ">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-xs btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">




                                        <li>
                                            <a href="/pro/link/conversation/?create=true&amp;contact_id=521820">
                                                <span class="fa fa-paper-plane"></span>
                                                Abrir conversación
                                            </a>
                                        </li>

                                        <li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="last_properties">
                        <a class="btn btn-success btn pull-right btn-sm" href="/pro/house/create/">
                            <i class="glyphicon glyphicon-plus"></i>
                            Crear Inmueble
                        </a>







                        <div class="info-box" style="position: relative;margin:2px 0;" property-pic="https://witei.com/static/img/house_no_pic.jpg" property-title="Piso en venta en Madrid de 130 m2" property-pk="319050" property-description="Lujoso piso con bonitas vistas. Muy luminoso. Mejor ver." property-cost="150000 €" property-bedrooms="2" property-bathrooms="2" property-agency="Cecilia Margarita Nazate" property-externalurl="" ondragstart="return false;">
                            <div class="info-box-icon bg-aqua">
                                <a href="/pro/agencies/house/319050/tracking/" style="color:white;">
                                    <i class="fa fa-paperclip attach" style="display:none;"></i>
                                    <i class="fa fa-paperclip sent bg-maroon" style="display:none"></i>

                                    <i class="fa fa-home"></i>

                                </a>
                            </div>
                            <div class="info-box-content" style="padding-left:10px;">
                                <a href="/pro/agencies/house/319050/tracking/" class="house-link">
                                    Piso en
                                    Calle de Goya,
                                    Madrid,
                                    130 m<sup>2</sup>
                                </a><br>
                                <span class="label label-default">EJEMPLO</span>



                                <span class="label label-primary">150.000 €</span>




                                <div class="btn-group" style="position: absolute; left: 100px; bottom: 9px; ">

                                </div>

                                <div class="btn-group" style="position: absolute; right: 5px; bottom: 5px; ">



                                    <a class="btn btn-sm btn-default" href="http://witei.com/house/319050-piso-en-venta-en-madrid-de-130-m2-150000eur-EJEMPLO/" target="_blank">
                                        <i style="font-size:130%;" class="fa fa-eye"></i>
                                    </a>

                                </div>
                            </div><!-- /.info-box-content -->
                        </div>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="pending_tasks">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Contacto</th>
                                <th>Tipo</th>
                                <th>Fecha límite</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>






                        <div class="row" style="background-color:#fafafa;margin:5px 5px 15px 5px;
  background-image:url('/static/img/dashboard/task_placeholder.svg');
  background-position:right bottom;background-repeat: no-repeat;
  background-size: contain;">
                            <div class="col-md-9">
                                <p style="font-size:23px;color:#808080;padding-top:20px;">
                                    ¡Enhorabuena, no tienes tareas pendientes!
                                </p>
                                <p style="font-size:15px;color:#808080;padding-bottom:20px;">
                                    Recuerda que las tareas puede ayudarte a dar seguimiento a tus contactos, jamás olvidar una cita y mostrar fácilmente al "jefe" tu duro trabajo
                                </p>
                            </div>
                        </div>





                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xs-12">
                <div class="row" style="margin:0">


                    <div class="box box-primary direct-chat direct-chat-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tablón de la oficina</h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages " id="board-messages" style="min-height:400px">

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <form action="/pro/board_message/create/" method="post">
                                <input type="hidden" name="csrfmiddlewaretoken" value="H9zUhvpinLCT3MRoH2CqJz8yCBb9sUaS">
                                <div class="input-group">
                                    <input type="text" name="body" required="" placeholder="Escribe un mensaje…" class="form-control">
        <span class="input-group-btn">
          <input type="submit" class="btn btn-success btn-flat" value="Enviar">
        </span>
                                </div>
                            </form>
                        </div><!-- /.box-footer-->
                    </div>

                </div>
            </div>
        </div>

    </div></section>

@endsection