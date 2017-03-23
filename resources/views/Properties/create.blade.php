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
            <input type="hidden" name="csrfmiddlewaretoken" value="zIMsh3Y86TVWvfea5z9ORmpQR4T6M2w2">
                <fieldset>
                    <legend>Localización</legend>
                    <div class="row">
                        <div class="col-md-6 form-block">
                            <div class="unverified_address">
                                <div class="row" style="border: solid 1px red;">
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
                                        <input type="button" name="verify_addres" value="Buscar" class="btn btn btn-primary" id="button-id-verify_addres">
                                        </div>
                                </div>
                            </div>
                            <div class="verified_address hidden">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div id="div_id_town" class="form-group">
                                            <div class="controls ">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Ciudad</span>
                                                    <input class="textinput textInput form-control" id="id_town" maxlength="100" name="town" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-lg-offset-1">
                                        <div id="div_id_zip_code" class="form-group">
                                            <div class="controls ">
                                                <div class="input-group">
                                                    <span class="input-group-addon">C.P.</span>
                                                    <input class="textinput textInput form-control" id="id_zip_code" maxlength="20" name="zip_code" type="text" value="-">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div id="div_id_street" class="form-group">
                                            <div class="controls ">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Calle</span>
                                                    <input class="textinput textInput form-control" id="id_street" maxlength="255" name="street" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-3 col-lg-offset-1">
                                        <div id="div_id_street_number" class="form-group">
                                            <div class="controls ">
                                                <div class="input-group">
                                                        <span class="input-group-addon">N°</span>
                                                        <input class="numberinput form-control" id="id_street_number" min="0" name="street_number" type="number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div id="div_id_province" class="form-group">
                                            <div class="controls ">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Provincia</span>
                                                    <input class="textinput textInput form-control" id="id_province" maxlength="80" name="province" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="well" id="address-result-box">
                                        <p id="address-result-text" style="font-size:110%">
                                            Utiliza el buscador para
                                            localizar tu inmueble
                                        </p><a class="btn btn-warning hidden" id="fix-address-btn">
                                            Corregir
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-12 text-center">
                                <input type="button" name="auto-search" value="Usar buscador automático" class="btn btn btn-primary hidden" id="button-id-auto-search">
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
                                                                                        <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 212px;">
                                                                                            <span class="selection">
                                                                                                <span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_public_address-container">
                                                                                                    <span class="select2-selection__rendered" id="select2-id_public_address-container" title="Ocultar número de calle">Ocultar número de calle</span>
                                                                                                    <span class="select2-selection__arrow" role="presentation">
                                                                                                        <b role="presentation"/>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="dropdown-wrapper" aria-hidden="true"/>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div id="div_id_district" class="form-group">
                                            <label for="id_district" class="control-label ">
                                                Distrito
                                            </label>
                                            <div class="controls ">
                                                <input class="textinput textInput form-control" id="id_district" maxlength="255" name="district" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-lg-offset-1">
                                        <div id="div_id_zone" class="form-group">
                                                <label for="id_zone" class="control-label ">
                                                    Zona
                                                </label>
                                            <div class="controls ">
                                                <input class="textinput textInput form-control" id="id_zone" maxlength="255" name="zone" type="text">
                                            </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5">
                                        <div id="div_id_urbanization" class="form-group">
                                            <label for="id_urbanization" class="control-label ">
                                                Urbanización
                                            </label>
                                            <div class="controls ">
                                                <input class="textinput textInput form-control" id="id_urbanization" maxlength="150" name="urbanization" type="text">
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-lg-1 col-lg-offset-1">
                                        <div id="div_id_block" class="form-group">
                                            <label for="id_block" class="control-label ">
                                                Bloque
                                            </label>
                                            <div class="controls ">
                                                <input class="textinput textInput form-control" id="id_block" maxlength="10" name="block" type="text">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-2 col-lg-offset-1">
                                        <div id="div_id_doorway" class="form-group">
                                            <label for="id_doorway" class="control-label ">
                                                Portal
                                            </label>
                                            <div class="controls ">
                                                <input class="textinput textInput form-control" id="id_doorway" maxlength="10" name="doorway" type="text">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-1 col-lg-offset-1">
                                        <div id="div_id_door" class="form-group">
                                            <label for="id_door" class="control-label ">Puerta</label>
                                            <div class="controls ">
                                                <input class="textinput textInput form-control" id="id_door" maxlength="10" name="door" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div id="map_search_results"/>
                            </div>

                        <div class="col-md-6 form-block">
                        </div>
                        <p id="html_map_text"/>
                    </div>
               
            </fieldset>
        </form>
    </div>
</div>


@endsection