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

        $("#errorId").html('');
        $(ajaxform+" input[name=cedula]").css( "border-color", "white" );
        $(ajaxform+" input[name=sexo]").css( "border-color", "white" );
        $(ajaxform+" input[name=nombre]").css( "border-color", "white" );
        $(ajaxform+" input[name=apellidos]").css( "border-color", "white" );
        $(ajaxform+" input[name=email]").css( "border-color", "white" );
        $(ajaxform+" input[name=ciudad]").css( "border-color", "white" );
        $(ajaxform+" input[name=celular]").css( "border-color", "white" );
        $(ajaxform+" input[name=fecha_nacimiento]").css( "border-color", "white" );
        if(cedula==""){
            $(ajaxform+" input[name=cedula]").focus();
            $(ajaxform+" input[name=cedula]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">La cédula es obligatoria</p>');
        }
        else if(cedula.length < 9 || isNaN(cedula)){
            if(isNaN(cedula)){
                $(ajaxform+" input[name=cedula]").val(" ");
                $(ajaxform+" input[name=cedula]").css( "border-color", "red" );
                $("#errorId").append('<p style="color:red" id="erId">La cédula recibe solo datos numericos, minimo 9</p>');
            }            
            $(ajaxform+" input[name=cedula]").focus();
        }
        else if(sexo===0){
            $(ajaxform+" input[name=sexo]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="sexoId">Seleccione un sexo</p>');
        }
        else if(nombre==""){
            $(ajaxform+" input[name=nombre]").focus();
            $(ajaxform+" input[name=nombre]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">El nombre es obligatorio</p>');
        }
        else if(apellidos==""){
            $(ajaxform+" input[name=apellidos]").focus();
            $(ajaxform+" input[name=apellidos]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">Los apellidos son obligatorios</p>');
        }
        else if(email==""){
            $(ajaxform+" input[name=email]").focus();
            $(ajaxform+" input[name=email]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">El email es obligatorio</p>');
        }
        else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
            $(ajaxform+" input[name=email]").focus();
            $(ajaxform+" input[name=email]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">El email no es valido</p>');
        }
        else if(ciudad==""){
            $(ajaxform+" input[name=ciudad]").focus();
            $(ajaxform+" input[name=ciudad]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">La ciudad es obligatoria</p>');
        }
        else if(celular==""){
            $(ajaxform+" input[name=celular]").focus();
            $(ajaxform+" input[name=celular]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">El celular es obligatorio</p>');
        }
        else if(celular.length < 10 || isNaN(celular)){
            if(isNaN(celular)){
                $(ajaxform+" input[name=celular]").val(" ");
                $(ajaxform+" input[name=celular]").css( "border-color", "red" );
                $("#errorId").append('<p style="color:red" id="erId">El celular recibe solo datos numericos, minimo 10</p>');
            }            
            $(ajaxform+" input[name=celular]").focus();
        }
        else if(fecha_nacimiento==""){
            $(ajaxform+" input[name=fecha_nacimiento]").focus();
            $(ajaxform+" input[name=fecha_nacimiento]").css( "border-color", "red" );
            $("#errorId").append('<p style="color:red" id="erId">La fecha de nacimiento es obligatoria</p>');
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