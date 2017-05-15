<h4 style="padding-left:5px;">Inmuebles</h4>

<div style="margin-top:20px;">
    <i class="fa fa-thumbs-up"></i> INMUEBLES FAVORITOS
    <a id="btmAddProperty" href="{{ route('Trackings.addProperty', (( $tracking == null )? 0: $tracking->id ))}}" type="button" class="btn btn-primary pull-right btn-xs">
        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Agregar Inmueble </a>

</div>
<br>

@if( $tracking != null && $myproperties != null)
    @foreach($myproperties as  $myproperty )
        <div class="info-box" style="position: relative;margin:2px 0;" ondragstart="return false;">
            <div class="info-box-icon bg-aqua">
                <a href="/pro/agencies/house/357244/tracking/" style="color:white;">
                    <i class="fa fa-paperclip attach" style="display:none;"></i>
                    <i class="fa fa-paperclip sent bg-maroon" style="display:none"></i>

                    <i class="fa fa-home"></i>

                </a>
            </div>
            <div class="info-box-content" style="padding-left:10px;">
                <a href="/pro/agencies/house/357244/tracking/" class="house-link">{{ $myproperty->propertyType->name }}
                    {{ $myproperty->address }}, {{ number_format($myproperty->area,0) }} m<sup>2</sup>
                </a><br>
                <span class="label label-default">{{ $myproperty->name }}</span>
                <span class="label label-primary" style="margin-right:2px;">{{ number_format($myproperty->value,2,',','.') }} USD</span>

                {{--<div class="btn-group" style="position: absolute; left: 100px; bottom: 9px; ">Orlando cofre</div>--}}

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
    @endforeach
@endif

<div style="margin-top:20px;">
    <i class="fa fa-home"></i> INMUEBLES SUGERIDOS
</div>


<br>

@if( $propertiesSuggested != null)
@foreach($propertiesSuggested as  $propertySuggested )
<div class="info-box" style="position: relative;margin:2px 0;" ondragstart="return false;">
    <div class="info-box-icon bg-aqua">
        <a href="/pro/agencies/house/357244/tracking/" style="color:white;">
            <i class="fa fa-paperclip attach" style="display:none;"></i>
            <i class="fa fa-paperclip sent bg-maroon" style="display:none"></i>

            <i class="fa fa-home"></i>

        </a>
    </div>
    <div class="info-box-content" style="padding-left:10px;">
        <a href="/pro/agencies/house/357244/tracking/" class="house-link">{{ $propertySuggested->propertyType->name }}
            {{ $propertySuggested->address }}, {{ number_format($propertySuggested->area,0) }} m<sup>2</sup>
        </a><br>
        <span class="label label-default">{{ $propertySuggested->name }}</span>
        <span class="label label-primary" style="margin-right:2px;">{{ number_format($propertySuggested->value,2,',','.') }} USD</span>

        {{--<div class="btn-group" style="position: absolute; left: 100px; bottom: 9px; ">Orlando cofre</div>--}}

        <div class="btn-group" style="position: absolute; right: 5px; bottom: 5px; ">

            <a class="btn btn-sm btn-default" href="/pro/agencies/contact/600458/dislike/357244/">
                <i style="font-size:130%;" class="fa fa-thumbs-up"></i>
            </a>

            <a class="btn btn-sm btn-default" href="http://witei.com/house/357244-piso-en-venta-en-madrid-de-130-m2-150000eur-EJEMPLO/" target="_blank">
                <i style="font-size:130%;" class="fa fa-eye"></i>
            </a>
        </div>
    </div><!-- /.info-box-content -->
</div>
@endforeach
@endif