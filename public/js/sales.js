
    $("#state_id").change(function(event){

        $("#city_id").empty();
        $.get("/cities/"+ event.target.value, function(response, state){
            $.each(response, function(key, value) {
                $("#city_id").append("<option value='" + value.id + "'>" + value.name + "</option>");
            });
        })
    });


    $("#bathrooms").blur(function(){
        if(Number($("#bathrooms").val()) > Number($("#bathrooms").prop('max')))
            $("#bathrooms").val($("#bathrooms").prop('max'));
    });


    $("#bedrooms").blur(function(){
        if(Number($("#bedrooms").val()) > Number($("#bedrooms").prop('max')))
            $("#bedrooms").val($("#bedrooms").prop('max'));
    });




