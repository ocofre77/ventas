var cityDefault = 0;
var path = "/ventas/public";

$(".chosen-select").chosen({
    no_results_text: "Oops, No hay Datos!",
    placeholder_text_multiple:"Seleccione..."
});

$("#state_id").change(function(event){

    $("#city_id").empty();
    $.get(path * "/cities/"+ event.target.value, function(response, state){
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




var cityDefault = 0;
var path = "/ventas/public";

$(".chosen-select").chosen({
    no_results_text: "Oops, No hay Datos!",
    placeholder_text_multiple:"Seleccione..."
});

$("#state_id").change(function(event){

    $("#city_id").empty();
    $.get(path * "/cities/"+ event.target.value, function(response, state){
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
