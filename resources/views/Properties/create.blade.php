@extends('adminlte::layouts.app')

@section('contentheader_title')
Formulario de Propiedad
@endsection

@section('contentheader_description')

@endsection

@section('htmlheader_title')
Formulario de Propiedad
@endsection


@section('main-content')

<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" method="post">
            <fieldset>
                <legend>Localización</legend>
                <div class="row">
                    <div class="col-md-6 form-block">
                        <div class="unverified_address">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="div_id_city_name" class="form-group">
                                        <div class="controls ">
                                            <div class="input-group">
                                                <span class="input-group-addon">Ciudad</span>
                                                <input autocomplete="off" class="textinput textInput form-control" id="id_city_name" maxlength="100" name="city_name" type="text"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-offset-1">
                                    <div id="div_id_zip_code_name" class="form-group">
                                        <div class="controls ">
                                            <div class="input-group">
                                                <span class="input-group-addon">C.P.</span>
                                                <input class="textinput textInput form-control" id="id_zip_code_name" name="zip_code_name" placeholder="Opcional" type="text"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="div_id_street_name" class="form-group">
                                        <div class="controls ">
                                            <div class="input-group">
                                                <span class="input-group-addon">Calle</span>
                                                    <input autocomplete="off" class="textinput textInput form-control" id="id_street_name" maxlength="100" name="street_name" type="text"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-offset-1">
                                    <div id="div_id_street_number_name" class="form-group">
                                        <div class="controls ">
                                            <div class="input-group">
                                                <span class="input-group-addon">N°</span>
                                                <input class="numberinput form-control" id="id_street_number_name" name="street_number_name" type="number"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 verify text-center">
                                    <input name="verify_addres" value="Buscar" class="btn btn btn-primary" id="button-id-verify_addres" type="butt  on"> 
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-lg-5">
                            <div id="div_id_public_address" class="form-group">
                                <label for="id_public_address" class="control-label  requiredField">
                                    Dirección pública<span class="asteriskField">*</span>
                                </label>
                                <div class="controls ">
                                    <select class="select form-control select2-hidden-accessible" id="id_public_address" name="public_address" tabindex="-1" aria-hidden="true" style="display: none;">
                                        <option value="all">Ver todos</option>
                                        <option value="street_num" selected="selected">Ocultar número de calle</option>
                                        <option value="street">Ocultar calle</option>
                                        <option value="none">Ocultar todo</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 196px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_public_address-container">
                                            <span class="select2-selection__rendered" id="select2-id_public_address-container" title="Ocultar número de calle">Ocultar número de calle</span>
                                            <span class="select2-selection__arrow" role="presentation">
                                                <b role="presentation"></b>
                                            </span>
                                        </span>
                                    </span>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                </div>
                            </div>
                        </div>





                </div>


                <div class="row"><div class="col-lg-5"><div id="div_id_district" class="form-group"><label for="id_district" class="control-label ">
                Distrito
                    </label><div class="controls "><input class="textinput textInput form-control" id="id_district" maxlength="255" name="district" type="text"> </div></div></div><div class="col-lg-6 col-lg-offset-1"><div id="div_id_zone" class="form-group"><label for="id_zone" class="control-label ">
                        Zona
                    </label><div class="controls "><input class="textinput textInput form-control" id="id_zone" maxlength="255" name="zone" type="text"> </div></div></div>
                </div>


                <div class="row"><div class="col-lg-5"><div id="div_id_urbanization" class="form-group"><label for="id_urbanization" class="control-label ">
                    Urbanización
                </label><div class="controls "><input class="textinput textInput form-control" id="id_urbanization" maxlength="150" name="urbanization" type="text"> </div></div></div><div class="col-lg-1 col-lg-offset-1"><div id="div_id_block" class="form-group"><label for="id_block" class="control-label ">
                    Bloque
                </label><div class="controls "><input class="textinput textInput form-control" id="id_block" maxlength="10" name="block" type="text"> </div></div></div><div class="col-lg-2 col-lg-offset-1"><div id="div_id_doorway" class="form-group"><label for="id_doorway" class="control-label ">
                    Portal
                </label><div class="controls "><input class="textinput textInput form-control" id="id_doorway" maxlength="10" name="doorway" type="text"> </div></div></div><div class="col-lg-1 col-lg-offset-1"><div id="div_id_door" class="form-group"><label for="id_door" class="control-label ">
                    Puerta
                </label><div class="controls "><input class="textinput textInput form-control" id="id_door" maxlength="10" name="door" type="text"> </div></div></div></div>



                </div>
            </fieldset>
            
            <fieldset>
                <legend>Características del inmueble</legend>

<div class="row"><div class="col-md-6 form-block"><div class="row"><div class="col-md-12"><div id="div_id_status" class="form-group"><label for="id_status_0" class="control-label  requiredField">
                Estado<span class="asteriskField">*</span></label><div class="controls "><input name="status" id="id_status_1" value="rentend" class="labelauty" style="display: none;" type="radio"><label for="id_status_1" style="display: inline-block; margin-left: 10px; font-size: 90%;"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked" style="">alquilado</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">alquilado</span></label><input name="status" id="id_status_2" value="sold" class="labelauty" style="display: none;" type="radio"><label for="id_status_2" style="display: inline-block; margin-left: 10px; font-size: 90%;"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked" style="">vendido</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">vendido</span></label><input checked="checked" name="status" id="id_status_3" value="available" class="labelauty" style="display: none;" type="radio"><label for="id_status_3" style="display: inline-block; margin-left: 10px; font-size: 90%;"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked" style="">disponible</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">disponible</span></label><input name="status" id="id_status_4" value="inactive" class="labelauty" style="display: none;" type="radio"><label for="id_status_4" style="display: inline-block; margin-left: 10px; font-size: 90%;"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked" style="">inactivo</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">inactivo</span></label><input name="status" id="id_status_5" value="reserved" class="labelauty" style="display: none;" type="radio"><label for="id_status_5" style="display: inline-block; margin-left: 10px; font-size: 90%;"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked" style="">reservado</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">reservado</span></label><input name="status" id="id_status_6" value="prospect" class="labelauty" style="display: none;" type="radio"><label for="id_status_6" style="display: inline-block; margin-left: 10px; font-size: 90%;"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked" style="">prospecto</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">prospecto</span></label></div></div></div></div><div class="row"><div class="col-lg-3"><div id="div_id_identifier" class="form-group"><label for="id_identifier" class="control-label ">
                Referencia
            </label><div class="controls "><input class="textinput textInput form-control" id="id_identifier" name="identifier" placeholder="SMG-" type="text"> </div></div></div><div class="col-lg-3 col-lg-offset-1"><input id="id_provider_identifier" name="provider_identifier" type="hidden"> </div></div><div class="row"><div class="col-lg-3"><div id="div_id_kind" class="form-group"><label for="id_kind" class="control-label  requiredField">
                Tipo<span class="asteriskField">*</span></label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_kind" name="kind" tabindex="-1" aria-hidden="true" style="display: none;"><option value="" selected="selected">---------</option><option value="flat">piso</option><option value="chalet">chalet</option><option value="country_house">casa rústica</option><option value="bungalow">bungalow</option><option value="room">habitación</option><option value="parking">plaza de parking</option><option value="shop">local</option><option value="industrial">Nave industrial</option><option value="office">oficina</option><option value="land">terreno</option><option value="storage">trastero</option><option value="building">edificio</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_kind-container"><span class="select2-selection__rendered" id="select2-id_kind-container" title="---------">---------</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div><div class="floor_data col-lg-3 col-lg-offset-1"><div id="div_id_floor" class="form-group"><label for="id_floor" class="control-label ">
                Planta
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_floor" name="floor" tabindex="-1" aria-hidden="true" style="display: none;"><option value="" selected="selected">---------</option><option value="-3">Sótano 3</option><option value="-2">Sótano 2</option><option value="-1">Sótano 1</option><option value="0">Bajo</option><option value="-11">Entreplanta</option><option value="-12">Semisótano</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_floor-container"><span class="select2-selection__rendered" id="select2-id_floor-container" title="---------">---------</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div><div class="building_floors_data col-lg-3 col-lg-offset-1" style="display: none;"><div id="div_id_building_floors" class="form-group"><label for="id_building_floors" class="control-label ">
                Plantas
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_building_floors" name="building_floors" tabindex="-1" aria-hidden="true" style="display: none;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_building_floors-container"><span class="select2-selection__rendered" id="select2-id_building_floors-container" title="1">1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div><div class="building_data col-lg-3 col-lg-offset-1" style="display: none;"><div id="div_id_number_floors_can_expand" class="form-group"><label for="id_number_floors_can_expand" class="control-label ">
                Alturas a expandir
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_number_floors_can_expand" name="number_floors_can_expand" tabindex="-1" aria-hidden="true" style="display: none;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_number_floors_can_expand-container"><span class="select2-selection__rendered" id="select2-id_number_floors_can_expand-container" title="0">0</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div></div><div class="row"><div class="bedroom_data col-lg-3"><div id="div_id_bedrooms" class="form-group"><label for="id_bedrooms" class="control-label  requiredField">dormitorios</label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_bedrooms" name="bedrooms" tabindex="-1" aria-hidden="true" style="display: none;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_bedrooms-container"><span class="select2-selection__rendered" id="select2-id_bedrooms-container" title="0">0</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div><div class="bathroom_data col-lg-3 col-lg-offset-1"><div id="div_id_bathrooms" class="form-group"><label for="id_bathrooms" class="control-label  requiredField">
                Baños<span class="asteriskField">*</span></label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_bathrooms" name="bathrooms" tabindex="-1" aria-hidden="true" style="display: none;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_bathrooms-container"><span class="select2-selection__rendered" id="select2-id_bathrooms-container" title="0">0</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div></div><div class="row"><div class="col-md-3"><div id="div_id_area" class="form-group"><label for="id_area" class="control-label  requiredField">
                Superficie<span class="asteriskField">*</span></label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_area" min="0" name="area" type="number"> <span class="input-group-addon">m²</span></div></div></div></div><div class="col-md-3 col-md-offset-1"><div id="div_id_area_util" class="form-group"><label for="id_area_util" class="control-label ">
                Superficie útil
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_area_util" min="0" name="area_util" type="number"> <span class="input-group-addon">m²</span></div></div></div></div><div class="col-md-3 col-md-offset-1"><div id="div_id_area_plot" class="form-group" style="display: none;"><label for="id_area_plot" class="control-label ">
                Superficie parcela
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_area_plot" min="0" name="area_plot" type="number"> <span class="input-group-addon">m²</span></div></div></div></div></div><div class="row"><div class="building_data col-md-3" style="display: none;"><div id="div_id_meters_front" class="form-group"><label for="id_meters_front" class="control-label ">
                Frontal
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_meters_front" min="0" name="meters_front" type="number"> <span class="input-group-addon">m²</span></div></div></div></div><div class="building_data col-md-3 col-md-offset-1" style="display: none;"><div id="div_id_meters_depth" class="form-group"><label for="id_meters_depth" class="control-label ">
                Profundidad
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_meters_depth" min="0" name="meters_depth" type="number"> <span class="input-group-addon">m²</span></div></div></div></div></div><div class="row"><div class="shop_data col-md-3" style="display: none;"><div id="div_id_area_underground" class="form-group"><label for="id_area_underground" class="control-label ">
                Area sótano
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_area_underground" min="0" name="area_underground" type="number"> <span class="input-group-addon">m²</span></div></div></div></div><div class="shop_data col-md-3 col-md-offset-1" style="display: none;"><div id="div_id_area_first_floor" class="form-group"><label for="id_area_first_floor" class="control-label ">
                Área primera planta
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_area_first_floor" min="0" name="area_first_floor" type="number"> <span class="input-group-addon">m²</span></div></div></div></div></div><div class="row"><div class="shop_data col-md-3" style="display: none;"><div id="div_id_area_window" class="form-group"><label for="id_area_window" class="control-label ">
                Tamaño escaparate
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_area_window" min="0" name="area_window" type="number"> <span class="input-group-addon">m²</span></div></div></div></div><div class="shop_data col-md-3 col-md-offset-1" style="display: none;"><div id="div_id_ceiling_height" class="form-group"><label for="id_ceiling_height" class="control-label ">
                Altura techos
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_ceiling_height" min="0" name="ceiling_height" type="number"> <span class="input-group-addon">m</span></div></div></div></div></div><div class="row"><div class="col-md-3"><div id="div_id_year_built" class="form-group"><label for="id_year_built" class="control-label ">
                Año de construcción
            </label><div class="controls "><input class="numberinput form-control" id="id_year_built" min="0" name="year_built" type="number"> </div></div></div><div class="col-md-3 col-md-offset-1"><div id="div_id_building_expenses" class="form-group"><label for="id_building_expenses" class="control-label ">
                Gastos comunitarios
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_building_expenses" min="0" name="building_expenses" type="number"> <span class="input-group-addon">€</span></div></div></div></div></div><div class="row"><div class="form-group"><div id="div_id_renting" class="checkbox"><label for="id_renting" class=""><input class="checkboxinput checkbox" id="id_renting" name="renting" type="checkbox">
                    Alquiler
                    


    




    



                </label></div></div><div class="renting_data col-md-10" style="display: none;"><div class="row"><div class="col-md-4"><div id="div_id_renting_cost" class="form-group"><label for="id_renting_cost" class="control-label ">
                Alquiler
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_renting_cost" name="renting_cost" type="number"> <span class="input-group-addon">€</span></div></div></div></div><div class="col-md-4 col-md-offset-1"><div id="div_id_renting_period" class="form-group"><label for="id_renting_period" class="control-label ">
                Periodicidad de cobro
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_renting_period" name="renting_period" tabindex="-1" aria-hidden="true" style="display: none;"><option value="" selected="selected">---------</option><option value="daily">día</option><option value="weekly">semana</option><option value="bimonthly">quincena</option><option value="monthly">mes</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 131px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_renting_period-container"><span class="select2-selection__rendered" id="select2-id_renting_period-container" title="---------">---------</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div></div><div class="row"><div class="col-md-4"><div id="div_id_commission_agency" class="form-group"><label for="id_commission_agency" class="control-label ">
                Honorarios inmobiliaria
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_commission_agency" min="0" name="commission_agency" type="number"> <span class="input-group-addon">€</span></div></div></div></div><div class="col-md-4 col-md-offset-1"><div id="div_id_bond_amount" class="form-group"><label for="id_bond_amount" class="control-label ">
                Fianza
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_bond_amount" name="bond_amount" type="number"> <span class="input-group-addon">€</span></div></div></div></div></div><div class="row"><div class="col-md-4"><div id="div_id_deposit" class="form-group"><label for="id_deposit" class="control-label ">
                Aval
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_deposit" name="deposit" type="number"> <span class="input-group-addon">€</span></div></div></div></div><div class="col-md-4 col-md-offset-1"><div class="form-group"><div id="div_id_vacation" class="checkbox"><label for="id_vacation" class=""><input class="checkboxinput checkbox" id="id_vacation" name="vacation" type="checkbox">
                    Alquiler Vacacional
                    


    




    



                </label></div></div></div></div></div></div><div class="row"><div class="form-group"><div id="div_id_selling" class="checkbox"><label for="id_selling" class=""><input class="checkboxinput checkbox" id="id_selling" name="selling" type="checkbox">
                    Venta
                    


    




    



                </label></div></div><div class="selling_data col-md-4" style="display: none;"><div id="div_id_selling_cost" class="form-group"><label for="id_selling_cost" class="control-label ">
                Coste de venta
            </label><div class="controls "><div class="input-group"><input class="numberinput form-control" id="id_selling_cost" name="selling_cost" type="number"> <span class="input-group-addon">€</span></div></div></div></div></div><div class="row"><div class="form-group"><div id="div_id_show_cost" class="checkbox"><label for="id_show_cost" class=""><input checked="checked" class="checkboxinput checkbox" id="id_show_cost" name="show_cost" type="checkbox">
                    Mostrar precio
                    


    




    
    
        <p id="hint_id_show_cost" class="help-block">Elige si mostrar u ocultar el precio en tu web</p></label></div></div></div></div><div class="col-md-6 form-block"><div id="div_id_tags" class="form-group"><label for="id_tags" class="control-label ">
                Etiquetas
            </label><div class="controls "><select multiple="" class="chosen selectmultiple form-control select2-hidden-accessible" id="id_tags" name="tags" tabindex="-1" aria-hidden="true" style="display: none;"><option value="40">acceso minusválidos</option><option value="62">adosado</option><option value="73">a estrenar</option><option value="3">aire acondicionado</option><option value="51">alarma</option><option value="120">almacén</option><option value="82">alto standing</option><option value="42">amueblado</option><option value="17">animales</option><option value="47">antena TV</option><option value="71">apartamento</option><option value="56">a reformar</option><option value="52">armarios empotrados</option><option value="1">ascensor</option><option value="133">aseo</option><option value="99">ático</option><option value="100">azotea</option><option value="41">balcón</option><option value="60">barbacoa</option><option value="97">bodega</option><option value="80">bohemio</option><option value="104">bungalow</option><option value="22">calefacción central</option><option value="128">calefacción eléctrica</option><option value="129">calefacción gasoil</option><option value="23">calefacción individual</option><option value="27">cámara de seguridad</option><option value="105">casa baja</option><option value="117">casa de pueblo</option><option value="75">céntrico</option><option value="26">chimenea</option><option value="132">cocina americana</option><option value="31">cocina amueblada</option><option value="32">cocina equipada</option><option value="95">conserje</option><option value="35">detector de humos</option><option value="48">diáfano</option><option value="121">dormitorio de servicio</option><option value="59">dúplex</option><option value="109">edificable</option><option value="107">edificio emblemático</option><option value="77">edificio protegido</option><option value="118">entrada desde calle</option><option value="69">escaleras</option><option value="24">esquina</option><option value="111">estructura de hormigón</option><option value="112">estructura de madera</option><option value="124">estructura metálica</option><option value="25">estudio</option><option value="5">exterior</option><option value="34">extintor</option><option value="33">extractor de humos</option><option value="18">garaje</option><option value="10">gas butano</option><option value="11">gas natural</option><option value="38">gimnasio</option><option value="76">histórico</option><option value="125">hotel</option><option value="81">independiente</option><option value="4">interior</option><option value="46">internet</option><option value="12">jardín</option><option value="87">jardín comunitario</option><option value="70">lavadero</option><option value="116">lavavajillas</option><option value="79">loft</option><option value="6">luminoso</option><option value="9">maletero</option><option value="84">mansión</option><option value="83">masía</option><option value="122">montacargas</option><option value="94">no amueblado</option><option value="72">obra nueva</option><option value="66">orientación este</option><option value="64">orientación norte</option><option value="67">orientación oeste</option><option value="65">orientación sur</option><option value="63">pareado</option><option value="19">parking</option><option value="106">patio de luces</option><option value="20">patio de manzana</option><option value="108">patio de uso</option><option value="101">patio interior</option><option value="131">pintura gotelé</option><option value="130">pintura lisa</option><option value="14">piscina</option><option value="86">piscina comunitaria</option><option value="135">pista de pádel</option><option value="45">pista de squash</option><option value="44">pista de tenis</option><option value="78">plaza garaje incluida</option><option value="96">porche</option><option value="2">portero</option><option value="29">puerta automática</option><option value="15">puerta blindada</option><option value="93">puerta de seguridad</option><option value="68">reformado</option><option value="123">salida de emergencia</option><option value="49">salida de humos</option><option value="43">sauna</option><option value="58">seguro</option><option value="74">singular</option><option value="102">solárium</option><option value="91">soleado</option><option value="115">sótano</option><option value="127">suelo gres</option><option value="113">suelo mármol</option><option value="53">suelo parquet</option><option value="92">suelo radiante</option><option value="54">suelo tarima</option><option value="37">suelo técnico</option><option value="114">suelo terrazo</option><option value="36">techo falso</option><option value="8">tendedero</option><option value="7">terraza</option><option value="103">traspaso</option><option value="30">trastero</option><option value="110">trastero incluido</option><option value="119">turístico</option><option value="90">urbanizacion privada</option><option value="50">vado permanente</option><option value="126">ventanas aluminio</option><option value="55">ventanas climalit</option><option value="28">videoportero</option><option value="88">vigilancia 24h</option><option value="89">vistas al golf</option><option value="61">vistas al mar</option><option value="98">vistas al monte</option><option value="134">wifi</option><option value="39">zona infantil</option><option value="85">zona verde</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 521px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" placeholder="Etiquetas: &quot;amueblado&quot;, &quot;exterior&quot;, etc." style="width: 519px;" type="search"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div><div><ul class="nav nav-tabs" role="tablist"><li role="presentation" class="active"><a href="#es" aria-controls="es" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-es"></span></a></li><li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-en"></span></a></li><li role="presentation"><a href="#ca" aria-controls="ca" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-ca"></span></a></li><li role="presentation"><a href="#fr" aria-controls="fr" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-fr"></span></a></li><li role="presentation"><a href="#nl" aria-controls="nl" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-nl"></span></a></li><li role="presentation"><a href="#ru" aria-controls="ru" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-ru"></span></a></li><li role="presentation"><a href="#nb" aria-controls="nb" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-nb"></span></a></li><li role="presentation"><a href="#fi" aria-controls="fi" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-fi"></span></a></li><li role="presentation"><a href="#de" aria-controls="de" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-de"></span></a></li><li role="presentation"><a href="#sv" aria-controls="sv" role="tab" data-toggle="tab"><span class="flag-icon flag-icon-sv"></span></a></li></ul></div><div class="tab-content"><div class="tab-pane active" role="tabpanel" id="es"><div id="div_id_description_es" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_es" maxlength="3000" name="description_es" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="en"><div id="div_id_description_en" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_en" maxlength="3000" name="description_en" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="ca"><div id="div_id_description_ca" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_ca" maxlength="3000" name="description_ca" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="fr"><div id="div_id_description_fr" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_fr" maxlength="3000" name="description_fr" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="nl"><div id="div_id_description_nl" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_nl" maxlength="3000" name="description_nl" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="ru"><div id="div_id_description_ru" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_ru" maxlength="3000" name="description_ru" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="fi"><div id="div_id_description_fi" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_fi" maxlength="3000" name="description_fi" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="nb"><div id="div_id_description_nb" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_nb" maxlength="3000" name="description_nb" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="de"><div id="div_id_description_de" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_de" maxlength="3000" name="description_de" rows="10"></textarea></div></div></div><div class="tab-pane" role="tabpanel" id="sv"><div id="div_id_description_sv" class="form-group"><div class="controls "><textarea class="textarea form-control" cols="40" id="id_description_sv" maxlength="3000" name="description_sv" rows="10"></textarea></div></div></div></div><div class="row"><div class="chosen col-lg-3"><div id="div_id_energy_certificate" class="form-group"><label for="id_energy_certificate" class="control-label ">
                Certificado energético
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_energy_certificate" name="energy_certificate" tabindex="-1" aria-hidden="true" style="display: none;"><option value="">---------</option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="not_specified">No especificado</option><option value="pending" selected="selected">En trámite</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_energy_certificate-container"><span class="select2-selection__rendered" id="select2-id_energy_certificate-container" title="En trámite">En trámite</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div><div class="col-lg-3 col-lg-offset-1 building_data" style="display: none;"><div id="div_id_horizontal_division_license" class="form-group"><label for="id_horizontal_division_license" class="control-label ">
                Licencia división horizontal
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_horizontal_division_license" name="horizontal_division_license" tabindex="-1" aria-hidden="true" style="display: none;"><option value="" selected="selected">---------</option><option value="not_specified">No especificado</option><option value="pending">En trámite</option><option value="granted">Concedido</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_horizontal_division_license-container"><span class="select2-selection__rendered" id="select2-id_horizontal_division_license-container" title="---------">---------</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div><div class="col-lg-3 col-lg-offset-1 building_data" style="display: none;"><div id="div_id_electricity_type" class="form-group"><label for="id_electricity_type" class="control-label ">
                Sistema eléctrico
            </label><div class="controls "><select class="select form-control select2-hidden-accessible" id="id_electricity_type" name="electricity_type" tabindex="-1" aria-hidden="true" style="display: none;"><option value="" selected="selected">---------</option><option value="mono">Unifase</option><option value="bi">Bifes</option><option value="tri">Trifase</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_electricity_type-container"><span class="select2-selection__rendered" id="select2-id_electricity_type-container" title="---------">---------</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div></div><div id="div_id_video_url" class="form-group"><label for="id_video_url" class="control-label ">
                Link al vídeo
            </label><div class="controls "><input class="urlinput form-control" id="id_video_url" maxlength="200" name="video_url" type="url"> </div></div><div id="div_id_virtual_visit" class="form-group"><label for="id_virtual_visit" class="control-label ">
                Link a visita virtual
            </label><div class="controls "><input class="urlinput form-control" id="id_virtual_visit" maxlength="200" name="virtual_visit" type="url"> </div></div><div id="div_id_external_web_url" class="form-group"><label for="id_external_web_url" class="control-label ">
                URL Externa
            </label><div class="controls "><input class="urlinput form-control" id="id_external_web_url" maxlength="200" name="external_web_url" type="url"> <p id="hint_id_external_web_url" class="help-block">Si no tienes tu web con nosotros, puedes indicar aquí tu propia URL para este inmueble para enlazarlo en las campañas de email.</p></div></div></div></div>


            </fieldset>     


        </form>
    </div>
</div>


@endsection