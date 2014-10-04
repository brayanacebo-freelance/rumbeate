$(document).ready(function(){
    $("#sexo_femenino").click(function(e){
        $("#sexoId").remove();
    });
    $("#sexo_masculino").click(function(e){
        $("#sexoId").remove();
    });
    $("#terminosId").click(function(e){
        $("#erId").remove();
    });
    $("#politicasId").click(function(e){
        $("#erId").remove();
    });
    var submitButton = $('#submitButton');

    submitButton.click(function(e){

        e.preventDefault();

        var ajaxform = "#formAjax";

        var cedula = $(ajaxform+" input[name=cedula]").val();
        var sexo = $(ajaxform+" input[name=sexo]:checked").length;

        var nombre = $(ajaxform+" input[name=nombre]").val();
        var apellidos = $(ajaxform+" input[name=apellidos]").val();
        var email = $(ajaxform+" input[name=email]").val();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var ciudad = $(ajaxform+" input[name=ciudad]").val();
        var celular = $(ajaxform+" input[name=celular]").val();
        var fecha_nacimiento = $(ajaxform+" input[name=fecha_nacimiento]").val();
        var politicas = $(ajaxform+" input[name=politicas]").is(':checked');

        var terminos = $(ajaxform+" input[name=terminos]").is(':checked');

        if(cedula==""){
            $(ajaxform+" input[name=cedula]").focus();
        }
        else if(cedula.length < 9 || isNaN(cedula)){
            if(isNaN(cedula)){
                $(ajaxform+" input[name=cedula]").val(" ");
            }            
            $(ajaxform+" input[name=cedula]").focus();
        }
        else if(sexo===0){
            $("#sexoo").append('<p style="color:red" id="sexoId">Seleccione un sexo</p>');
        }
        else if(nombre==""){
            $(ajaxform+" input[name=nombre]").focus();
        }
        else if(apellidos==""){
            $(ajaxform+" input[name=apellidos]").focus();
        }
        else if(email==""){
            $(ajaxform+" input[name=email]").focus();
        }
        else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
            $(ajaxform+" input[name=email]").focus();
        }
        else if(ciudad==""){
            $(ajaxform+" input[name=ciudad]").focus();
        }
        else if(celular==""){
            $(ajaxform+" input[name=celular]").focus();
        }
        else if(celular.length < 10 || isNaN(celular)){
            if(isNaN(celular)){
                $(ajaxform+" input[name=celular]").val(" ");
            }            
            $(ajaxform+" input[name=celular]").focus();
        }
        else if(fecha_nacimiento==""){
            $(ajaxform+" input[name=fecha_nacimiento]").focus();
        }
        else if(terminos==false){
            $("#errorId").append('<p style="color:red" id="erId">Aceptar los términos y condiciones y las políticas de privacidad es obligatorio</p>');
        }
        else if(politicas==false){
            $("#errorId").append('<p style="color:red" id="erId">Aceptar los términos y condiciones y las políticas de privacidad es obligatorio</p>');
        }
        else {
            $("#formAjax").submit();
        }

    });
});