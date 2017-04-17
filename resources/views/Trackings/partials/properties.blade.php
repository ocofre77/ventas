
<h4 style="padding-left:5px;">Inmuebles</h4>

<div class="form-group">
    {!! Form::select('property_id',$properties,null,['class'=>'select form-control','required', 'placeholder'=>'Selecione  Inmueble']) !!}
</div>

<div style="margin-top:20px;">
    <i class="fa fa-thumbs-up"></i> INMUEBLES FAVORITOS

    <a class="btn btn-primary pull-right btn-xs" style="margin-top:-5px;"
       href="#" >
        <i class="glyphicon glyphicon-plus"></i>
        Agregar inmueble
    </a>



</div>


<br>

<div class="info-box" style="position: relative;margin:2px 0;"
     property-pic="https://witei.com/static/img/house_no_pic.jpg"
     property-title="Piso en venta en Madrid de 130 m2" property-pk="357244"
     property-description="Lujoso piso con bonitas vistas. Muy luminoso. Mejor ver."
     property-cost="150.000 €" property-bedrooms="2"
     property-bathrooms="2" property-agency="Margarita Nazate"
     property-externalurl="" ondragstart="return false;">
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
            orlando cofre
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
