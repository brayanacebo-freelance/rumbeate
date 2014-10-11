<div id="fb-root"></div>
<script>
( function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id))
		return;
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')); 
</script>
<style>
.custom-input-file {
	position:relative;
	overflow:hidden;
	cursor:pointer;
	border-style:solid;
	border-width:0px;
	-webkit-appearance:none;
	-webkit-border-radius:8px;
	background-color:#008cba;
	border-color:#007095;
	color:white;
	text-align:center;
	font-family:"Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
	font-weight:normal;
	line-height:normal;
	font-size:12pt;
	width:200px;
	min-height:40px;
	margin:0 0 0 0;
	display:inline-block;
	padding-top:10px;
}
.custom-input-file:hover {
	background-color:#007095;
	color:#fff;
}
.custom-input-file .input-file {
	margin:0;
	padding:0;
	outline:0;
	font-size:10000px;
	border:10000px solid transparent;
	opacity:0;
	filter:alpha(opacity=0);
	position:absolute;
	right:-1000px;
	top:-1000px;
	cursor:pointer;
}
.custom-input-file .archivo {
	background-color:#000;
	color:#fff;
	font-size:7pt;
	overflow:hidden;
}


</style>
<script>

$(function() {
	$(".custom-input-file input:file").change(function() {
		$(this).parent().find(".archivo").html($(this).val());

	}).css('border-width', function() {
		if (navigator.appName == "Microsoft Internet Explorer")
			return 0;
	});
}); 


</script>
<script type="text/javascript">
function GetFileInfo () {
	var fileInput = document.getElementById ("image");

	var message = "";
	if ('files' in fileInput) {
		if (fileInput.files.length == 0) {
			message = "Please browse for one or more files.";
		} else {
			for (var i = 0; i < fileInput.files.length; i++) {
				message += "";
				var file = fileInput.files[i];
				if ('name' in file) {
					message += "" + file.name + "<br />";
				}
				else {
					message += " " + file.fileName + "<br />";
				}
				if ('size' in file) {
                           // message += "size: " + file.size + " bytes <br />";
                       }
                       else {
                            //message += "size: " + file.fileSize + " bytes <br />";
                        }
                        if ('mediaType' in file) {
                        	message += "type: " + file.mediaType + "<br />";
                        }
                    }
                }
            } 
            else {
            	if (fileInput.value == "") {
            		message += "Please browse for one or more files.";
            		message += "<br />Use the Control or Shift key for multiple selection.";
            	}
            	else {
            		message += "Your browser doesn't support the files property!";
            		message += "<br />The path of the selected file: " + fileInput.value;
            	}
            }

            var info = document.getElementById ("info");
            info.innerHTML = message;
        }
        </script>
        <script type="text/javascript">
	/**************************************************************
	 Máscara de entrada. Script creado por Tunait! (21/12/2004)
	 Si quieres usar este script en tu sitio eres libre de hacerlo con la condición de que permanezcan intactas estas líneas, osea, los créditos.
	 No autorizo a distribuír el código en sitios de script sin previa autorización
	 Si quieres distribuírlo, por favor, contacta conmigo.
	 Ver condiciones de uso en http://javascript.tunait.com/
	 tunait@yahoo.com
	 ****************************************************************/
	 var patron = new Array(2, 2, 4)
	 var patron2 = new Array(1, 3, 3, 3, 3)
	 function mascara(d, sep, pat, nums) {
	 	if (d.valant != d.value) {
	 		val = d.value
	 		largo = val.length
	 		val = val.split(sep)
	 		val2 = ''
	 		for ( r = 0; r < val.length; r++) {
	 			val2 += val[r]
	 		}
	 		if (nums) {
	 			for ( z = 0; z < val2.length; z++) {
	 				if (isNaN(val2.charAt(z))) {
	 					letra = new RegExp(val2.charAt(z), "g")
	 					val2 = val2.replace(letra, "")
	 				}
	 			}
	 		}
	 		val = ''
	 		val3 = new Array()
	 		for ( s = 0; s < pat.length; s++) {
	 			val3[s] = val2.substring(0, pat[s])
	 			val2 = val2.substr(pat[s])
	 		}
	 		for ( q = 0; q < val3.length; q++) {
	 			if (q == 0) {
	 				val = val3[q]
	 			} else {
	 				if (val3[q] != "") {
	 					val += sep + val3[q]
	 				}
	 			}
	 		}
	 		d.value = val
	 		d.valant = val
	 	}
	 }
	 </script>

	 <div class="large-12 medium-12 small-12 contenedor_home">

	 	<div class="row">
	 		<article class="large-12 medium-12 small-12">

	 			<!----------CONTENEDOR PAGINA 1------------>

	 			<div class="large-12 medium-12 small-12 general_premios" id="contenedor_1">

	 				<header class="large-12 medium-12 small-12 header" id="logo_1">

	 					<!--Logo texto 640px hasta 1024px-->
	 					<div class="large-1 blank_logo">
	 						&nbsp
	 					</div>

	 					<div class="large-10 medium-12 small-12 logo_cancun_texto">
	 						<img src="<?php echo assets_url('img/texto_logo.png'); ?>" width="100%" tittle="logo texto cancun">
	 					</div>
	 					<!--Fin logo texto 640px hasta 1024px-->

	 					<!--logo texto 0px hasta 640px-->
	 					<div class="small-12 logo_cancun_texto_2">
	 						<img src="<?php echo assets_url('img/texto_logo_2.png'); ?>" width="100%" tittle="logo texto cancun">
	 					</div>

	 					<div class="small-1 blank_logo_small">
	 						&nbsp
	 					</div>

	 					<div class="small-10 logo_cancun_2">
	 						<img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="100%" tittle="logo texto cancun">
	 					</div>

	 					<div class="small-3 blank_premios">
	 						&nbsp
	 					</div>
	 					<!--Fin logo texto 0px hasta 640px-->

	 					<div class="large-12 medium-12 small-12 contendedor_logo">
	 						<div class="large-3 medium-3 blank_logo">
	 							&nbsp
	 						</div>

	 						<div class="large-5 medium-6 small-10 logo_cancun">
	 							<img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="100%" tittle="logo cancun durex">
	 						</div>
	 					</div>

	 				</header>

	 				<div class="large-12 medium-12 small-12 descripcion_premios">
	 					<div class="large-2 medium-1 small-4 blank_mecanica">
	 						&nbsp
	 					</div>

	 					<div class="large-2 medium-3 small-5 texto_mecanica">
	 						<p>
	 							¿Cómo
	 							<br />
	 							<span style="font-weight:400;">participar</span>?
	 						</p>
	 					</div>

	 					<div class="large-2 medium-3 small-4 mecanica_1">
	 						<p>
	 							<span style="font-weight:400;"> Compra productos DUREX® </span>
	 							<br />
	 							de cualquier referencia
	 						</p>
	 					</div>

	 					<div class="large-2 medium-3 small-4 mecanica_2">
	 						<p>
	 							Registra tus compras
	 							<br />
	 							y datos personales en
	 							<br/>
	 							<span style="font-weight:400;text-align:center;">www.rumbeatecancun.com</span>
	 						</p>
	 					</div>

	 					<div class="large-2 medium-3 small-4 mecanica_3">
	 						<p>
	 							Participa y gana*
	 							<br />
	 							1 de los 5 viajes a Cancún
	 							<br/>
	 							<span style="font-weight:400;">con todos los gastos pagos</span>
	 						</p>
	 					</div>

	 					<div class="large-2 medium-2 small-2 blank_mecanica">
	 						&nbsp
	 					</div>

	 				</div>

	 				<div class="large-4 medium-4 small-12 compra">
	 					<div class="large-1 medium-1 small-1 blank_mecanica">
	 						&nbsp
	 					</div>

	 					<div class="large-3 medium-4 small-3 texto_compra">
	 						<p>
	 							Compra en:
	 						</p>
	 					</div>

	 					<div class="large-7 medium-7 small-7 logos_compra">
	 						<img src="<?php echo assets_url('img/logos.png'); ?>" width="100%">
	 					</div>

	 					<div class="large-12 medium-12 small-12 texto_terminos">
	 						Conoce los términos y condiciones <a href="home/terminos_y_condiciones" >aquí.</a>
	 					</div>

	 				</div>

	 				<div class="large-12 medium-12 small-12 footer">
	 					<div class="large-2 medium-2 small-2 plugin_redes">
	 						<div class="large-12 medium-12 small-12 twitter_megusta">
	 							<a href="https://twitter.com/DurexColombia" class="twitter-follow-button" data-show-count="false">Follow @DurexColombia</a>
	 							<script>
	 							! function(d, s, id) {
	 								var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
	 								if (!d.getElementById(id)) {
	 									js = d.createElement(s);
	 									js.id = id;
	 									js.src = p + '://platform.twitter.com/widgets.js';
	 									fjs.parentNode.insertBefore(js, fjs);
	 								}
	 							}(document, 'script', 'twitter-wjs');
	 							</script>
	 						</div>

	 						<div class="large-12 medium-12 small-12 facebook">
	 							<div class="fb-like" data-href="https://www.facebook.com/DurexColombia" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
	 						</div>

	 					</div>

	 					<div class="large-2 medium-2 small-5 ya_participaste "><img src="<?php echo assets_url('img/btn_ya_compraste.png'); ?>" width="70%" alt="Botón participa">
	 					</div>

	 					<div class="large-3 medium-3 small-7 participa">
	 						<a href="javascript:;" class="large-12 medium-12 small-12 btn_participa" id="btn_1">
	 							<div class="coco_loco large-6 medium-6 small-6"><img src="<?php echo assets_url('img/coco_loco.png'); ?>" width="100%" alt="Coco loco">
	 							</div>
	 							<div class="flecha_participa large-6 medium-6 small-6"><img src="<?php echo assets_url('img/btn_participa.png'); ?>" width="100%" alt="Botón participa">
	 							</div> </a>

	 						</div>
	 					</div>

	 				</div>

	 				<!----------CONTENEDOR PAGINA 2------------>

	 				<div class="formulario_contendedor large-12 medium-12 small-12" id="contenedor_2">

	 					<header class="large-12 medium-12 small-12 header_2" id="logo_1">

	 						<div class="large-12 medium-12 small-12 contendedor_logo_2">
	 							<!--Logo texto 640px hasta 1024px-->
	 							<div class="large-1 medium-1 small-1 blank_logo_header_2">
	 								&nbsp
	 							</div>

	 							<div class="large-4 medium-5 small-10 cancun_header_2">
	 								<img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="100%" tittle="logo cancun durex">
	 							</div>

	 							<div class="large-6 medium-7 cancun_texto_header_2">
	 								<img src="<?php echo assets_url('img/texto_logo_2.png'); ?>" width="100%" tittle="logo cancun durex">
	 							</div>

	 							<!--Fin logo texto 640px hasta 1024px-->
	 						</div>

	 						<!--logo texto 0px hasta 640px-->

	 						<!--Fin logo texto 0px hasta 640px-->

	 					</header>

	 					<div class="header_fomulario large-12 medium-12 small-12">
	 						<div class="large-12 medium-12 small-12 factura_center">
	 							<div class="large-12 medium-12 small-12 descripcion_factura">
	 								<div class="large-3 medium-1 small-3 blank_mecanica_2">
	 									&nbsp
	 								</div>

	 								<div class="large-2 medium-3 small-2 info_factura">
	 									<p>
	 										<span style="font-weight:400;">1. Llena el formulario</span>
	 										<br />
	 										con tus datos personales.
	 										<br />

	 									</p>
	 								</div>

	 								<div class="large-2 medium-3 small-2 info_factura_2">
	 									<p>
	 										<span style="font-weight:400;">2. Toma una foto clara </span>
	 										<br />
	 										y legible de la factura
	 										<br />
	 										de tu compra Durex.

	 									</p>
	 								</div>

	 								<div class="large-2 medium-3 small-2 info_factura_3">
	 									<p>
	 										<span style="font-weight:400;">3. Sube tu foto, &nbsp;</span>confirma
	 										<br />
	 										que el archivo haya cargado
	 										<br />
	 										exitosamente y envíalo.
	 									</p>
	 								</div>

	 								<div class="large-3 medium-1 small-3 blank_mecanica">
	 									&nbsp
	 								</div>
	 							</div>
	 						</div>

	 						<div class="large-12 medium-12 small-12 formulario">

	 							<!-- INICIO DEL FORMULARIO -->

	 							<!-- NOTIFICACIONES -->
	 							<?php if(@$statusJson == "error"): ?>
	 							<div style="color: red;padding: 10px;">
	 								<?php echo @$msgJson ?>
	 							</div>
	 						<?php endif; ?>



	 						<?php echo form_open_multipart(site_url('home/send'), 'class="crud form_contac_ajax" id="formAjax"'); ?>
	 						<ul class="columna_1 large-7 medium-7 small-12">
	 							<div class="texto_registrado small-12" style="color: white;left: 50px;position: relative;">
	 								¿Ya estás registrado?
	 								<br />
	 								Digita solo tú número de cédula y clic <a id="getData">Aquí</a>.
	 							</div>



	 							<div class="small-12 blank_campo_formulario">
	 								&nbsp
	 							</div>

	 							<li class="campo large-6 medium-6 small-6">
	 								<div class="texto_campo large-5 medium-5 small-6">
	 									Cédula
	 								</div>
	 								<div class="input large-7 medium-7 small-6" >
	 									<input type="text" class="campo_input" style="height:30px;" name="cedula" value="<?php echo set_value('cedula'); ?>" id="cedula"/>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-6">
	 								<div class="texto_campo_sexo large-5 medium-5 small-4" >
	 									Sexo
	 								</div>
	 								<div class="input radio_button large-7 medium-7 small-6" id="sexoo">
	 									<input type="radio" name="sexo" value="Femenino" class="radio_button" id="sexo_femenino" <?php echo set_checkbox('sexo', 'Femenino'); ?>>
	 									<label class="label_1">F</label>
	 									<input type="radio" name="sexo" value="Masculino" class="radio_button" id="sexo_masculino" <?php echo set_checkbox('sexo', 'Masculino'); ?>>
	 									<label class="label_1">M</label>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<div class="texto_campo large-5 medium-5 small-3" >
	 									Nombre
	 								</div>
	 								<div class="input large-7 medium-7 small-8" >
	 									<input type="text" class="campo_input" style="height:30px;" name="nombre" value="<?php echo set_value('nombre'); ?>" id="nombre"/>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<div class="texto_campo large-5 medium-5 small-3" >
	 									Apellidos
	 								</div>
	 								<div class="input large-7 medium-7 small-8" >
	 									<input type="text" class="campo_input" style="height:30px;" name="apellidos" value="<?php echo set_value('apellidos'); ?>" id="apellidos"/>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<div class="texto_campo large-5 medium-5 small-3" >
	 									Email
	 								</div>
	 								<div class="input large-7 medium-7 small-8" >
	 									<input type="text" class="campo_input" style="height:30px;" name="email" value="<?php echo set_value('email'); ?>" id="email"/>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<div class="texto_campo large-5 medium-5 small-3" >
	 									Ciudad
	 								</div>
	 								<div class="input large-7 medium-7 small-8" >
	 									<select type="text" class="campo_input" style="height:34px;" name="ciudad" id="ciudad">
	 										<option value="ninguna" disabled selected>Selecciona tu ciudad</option>
	 										<option value="Acacías">Acacías</option>
	 										<option value="Aguachica">Aguachica</option>
	 										<option value="Agustín Codazzi">Agustín Codazzi</option>
	 										<option value="Apartadó">Apartadó</option>
	 										<option value="Arauca">Arauca</option>
	 										<option value="Arjona">Arjona</option>
	 										<option value="Armenia">Armenia</option>
	 										<option value="Ayapel">Ayapel</option>
	 										<option value="Baranoa">Baranoa</option>
	 										<option value="Barrancabermeja">Barrancabermeja</option>
	 										<option value="Barranquilla">Barranquilla</option>
	 										<option value="Bello">Bello</option>
	 										<option value="Bogotá">Bogotá</option>
	 										<option value="Bucaramanga">Bucaramanga</option>
	 										<option value="Buenaventura">Buenaventura</option>
	 										<option value="Cajicá">Cajicá</option>
	 										<option value="Calarcá">Calarcá</option>
	 										<option value="Caldas">Caldas</option>
	 										<option value="Cali">Cali</option>
	 										<option value="Candelaria">Candelaria</option>
	 										<option value="Carepa">Carepa</option>
	 										<option value="Cartagena">Cartagena</option>
	 										<option value="Cartago">Cartago</option>
	 										<option value="Caucasia">Caucasia</option>
	 										<option value="Cereté">Cereté</option>
	 										<option value="Chía">Chía</option>
	 										<option value="Chigorodó">Chigorodó</option>
	 										<option value="Chinchiná">Chinchiná</option>
	 										<option value="Chiquinquirá">Chiquinquirá</option>
	 										<option value="Ciénaga">Ciénaga</option>
	 										<option value="Ciénaga de Oro">Ciénaga de Oro</option>
	 										<option value="Copacabana">Copacabana</option>
	 										<option value="Corozal">Corozal</option>
	 										<option value="Cúcuta">Cúcuta</option>
	 										<option value="Dosquebradas">Dosquebradas</option>
	 										<option value="Duitama">Duitama</option>
	 										<option value="El Banco">El Banco</option>
	 										<option value="El Carmen de Bolívar">El Carmen de Bolívar</option>
	 										<option value="El Cerrito">El Cerrito</option>
	 										<option value="El Espinal">El Espinal</option>
	 										<option value="Envigado">Envigado</option>
	 										<option value="Facatativá">Facatativá</option>
	 										<option value="Florencia">Florencia</option>
	 										<option value="Florida">Florida</option>
	 										<option value="Floridablanca">Floridablanca</option>
	 										<option value="Fundación">Fundación</option>
	 										<option value="Funza">Funza</option>
	 										<option value="Fusagasugá">Fusagasugá</option>
	 										<option value="Garzón">Garzón</option>
	 										<option value="Girardot">Girardot</option>
	 										<option value="Girardota">Girardota</option>
	 										<option value="Girón">Girón</option>
	 										<option value="Granada">Granada</option>
	 										<option value="Guadalajara de Buga">Guadalajara de Buga</option>
	 										<option value="Ibagué">Ibagué</option>
	 										<option value="Ipiales">Ipiales</option>
	 										<option value="Itagui">Itagui</option>
	 										<option value="Jamundí">Jamundí</option>
	 										<option value="La Ceja">La Ceja</option>
	 										<option value="La Dorada">La Dorada</option>
	 										<option value="La Estrella">La Estrella</option>
	 										<option value="La Plata">La Plata</option>
	 										<option value="Lorica">Lorica</option>
	 										<option value="Los Patios">Los Patios</option>
	 										<option value="Madrid">Madrid</option>
	 										<option value="Magangué">Magangué</option>
	 										<option value="Maicao">Maicao</option>
	 										<option value="Malambo">Malambo</option>
	 										<option value="Manaure">Manaure</option>
	 										<option value="Manizales">Manizales</option>
	 										<option value="Marinilla">Marinilla</option>
	 										<option value="Medellín">Medellín</option>
	 										<option value="Montelíbano">Montelíbano</option>
	 										<option value="Montería">Montería</option>
	 										<option value="Mosquera">Mosquera</option>
	 										<option value="Necoclí">Necoclí</option>
	 										<option value="Neiva">Neiva</option>
	 										<option value="Ocaña">Ocaña</option>
	 										<option value="Orito">Orito</option>
	 										<option value="Palmira">Palmira</option>
	 										<option value="Pamplona">Pamplona</option>
	 										<option value="Pasto">Pasto</option>
	 										<option value="Pereira">Pereira</option>
	 										<option value="Piedecuesta">Piedecuesta</option>
	 										<option value="Pitalito">Pitalito</option>
	 										<option value="Planeta Rica">Planeta Rica</option>
	 										<option value="Plato">Plato</option>
	 										<option value="Popayán">Popayán</option>
	 										<option value="Pradera">Pradera</option>
	 										<option value="Puerto Asís">Puerto Asís</option>
	 										<option value="Puerto Boyacá">Puerto Boyacá</option>
	 										<option value="Quibdó">Quibdó</option>
	 										<option value="Riohacha">Riohacha</option>
	 										<option value="Rionegro">Rionegro</option>
	 										<option value="Riosucio">Riosucio</option>
	 										<option value="Sabanalarga">Sabanalarga</option>
	 										<option value="Sabaneta">Sabaneta</option>
	 										<option value="Sahagún">Sahagún</option>
	 										<option value="San Andrés">San Andrés</option>
	 										<option value="San Andres de Tumaco">San Andres de Tumaco</option>
	 										<option value="San José del Guaviare">San José del Guaviare</option>
	 										<option value="San Marcos">San Marcos</option>
	 										<option value="San Vicente del Caguán">San Vicente del Caguán</option>
	 										<option value="Santa Marta">Santa Marta</option>
	 										<option value="Santa Rosa de Cabal">Santa Rosa de Cabal</option>
	 										<option value="Santander de Quilichao">Santander de Quilichao</option>
	 										<option value="Sincelejo">Sincelejo</option>
	 										<option value="Soacha">Soacha</option>
	 										<option value="Sogamoso">Sogamoso</option>
	 										<option value="Soledad">Soledad</option>
	 										<option value="Tame">Tame</option>
	 										<option value="Tierralta">Tierralta</option>
	 										<option value="Tuluá">Tuluá</option>
	 										<option value="Tunja">Tunja</option>
	 										<option value="Turbaco">Turbaco</option>
	 										<option value="Turbo">Turbo</option>
	 										<option value="Uribia">Uribia</option>
	 										<option value="Valle del Guamuez">Valle del Guamuez</option>
	 										<option value="Valledupar">Valledupar</option>
	 										<option value="Villa del Rosario">Villa del Rosario</option>
	 										<option value="Villamaría">Villamaría</option>
	 										<option value="Villavicencio">Villavicencio</option>
	 										<option value="Yopal">Yopal</option>
	 										<option value="Yumbo">Yumbo</option>
	 										<option value="Zipaquirá">Zipaquirá</option>
	 										<option value="Zona Bananera">Zona Bananera</option>
	 									</select>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<div class="texto_campo large-5 medium-5 small-3" >
	 									Celular
	 								</div>
	 								<div class="input large-7 medium-7 small-8" >
	 									<input type="text" class="campo_input" style="height:30px;" name="celular" value="<?php echo set_value('celular'); ?>" id="celular"/>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<div class="texto_campo large-5 medium-5 small-6" >
	 									Fecha de nacimiento
	 								</div>
	 								<div class="input large-7 medium-7 small-5" >
	 									<input type="text" name="fecha_nacimiento" onkeyup="mascara(this,'/',patron,true)" maxlength="10" placeholder="DD/MM/AAAA" value="<?php echo set_value('fecha_nacimiento'); ?>" style="height:30px;margin-top:5px;" id="fecha_nacimiento"/>
	 								</div>
	 							</li>

	 							<li class="campo large-6 medium-6 small-12">
	 								<label class="texto_check large-9 medium-9 small-10"><a href="home/terminos_y_condiciones" target="_blank" tittle="terminos y condiciones">Acepto los términos y condiciones</a> </label>
	 								<input type="checkbox" class="large-1 medium-1 small-1" name="terminos" value="1" <?php echo set_checkbox('terminos', '1'); ?> id="terminosId">
	 							</li>

	 							<li class="campo large-6 medium-6 small-12 politicas">
	 								<label class="texto_check_2 large-9 medium-9 small-10"><a href="home/politicas_de_privacidad" target="_blank" title="políticas de privacidad">Acepto las políticas de privacidad</a> </label>
	 								<input type="checkbox" class="large-1 medium-1 small-1" name="politicas" value="1" <?php echo set_checkbox('politicas', '1'); ?> id="politicasId" >
	 							</li>

	 							<li class="campo large-6 medium-6 small-12" id="errorId" style="left: 20px;"></li>
	 						</ul>

	 						<ul class="columna_3 large-4 medium-4 small-12 columns">

	 							<li class="campo large-12 medium-12 small-12">
	 								<div class="contenedor_subir_factura large-10 medium-10 small-10">
	 									<div class="texto_subir_factura large-12 medium-12 small-12" >
	 										Sube la foto de tu factura de compra
	 									</div>
	 								</div>
	 							</li>

	 							<li class="campo large-12 medium-12 small-12">
	 								<div class="contenedor_subir_factura_2 large-12 medium-12 small-12">
	 									<div class="texto_campo_examinar large-12 medium-12 small-12" >
	 										<div class="custom-input-file">
	 											<form id="form1" runat="server">
	 												<?php echo form_upload('image', '', ' id="image" class="input-file" onchange="GetFileInfo ()" '); ?>
	 												<div id="info" style="margin-top:0px">Examinar</div>

	 											</form>
	 										</div>

	 									</div>
	 								</div>
	 							</li>

	 							<li class="campo large-12 medium-12 small-12">
	 								<div class="linea_separador large-12 medium-12 small-12" >
	 									&nbsp
	 								</div>
	 							</li>

	 							<li class="campo large-12 medium-12 small-12">
	 								<div class="texto_campo_tienda large-12 medium-12 small-12" >
	 									Si compraste en la Tienda Durex, solo ingresa el número de la factura:
	 								</div>
	 								<div class="input_tienda large-7 medium-7 small-7" >
	 									<input type="text" class="campo_input" style="height:30px;" name="numero_factura" value="<?php echo set_value('numero_factura'); ?>" id="numero_factura"/>
	 								</div>
	 							</li>
	 						</ul>

	 						<!-- <input type="submit" value"Enviar"> -->
	 						<?php echo form_close(); ?>

	 						<!-- FIN DEL FORMULARIO -->

	 					</div>

	 					<div class="large-5 medium-5 small-5 plugin_redes">
	 						&nbsp
	 					</div>

	 					<div class="large-3 medium-3 small-3 plugin_redes">
	 						&nbsp
	 					</div>

	 					<div class="small-3 blank_subir_factura">
	 						&nbsp
	 					</div>

	 					<div class="large-3 medium-3 small-6 participa">
	 						<a href="#" id="submitButton"> <!-- <a href="#" class="large-12 medium-12 small-12 btn_participa"> --> <!-- <div class="btn_enviar large-10 medium-12 small-12" id="btn_2"> --> <img src="<?php echo assets_url('img/btn_enviar_formulario.png'); ?>" width="100%" alt="Enviar formularoooooio"> <!-- </div> --> </a>

	 					</div>
	 				</div>
	 			</div>

	 			<!----------CONTENEDOR PAGINA 3------------>

	 			<div class="large-12 medium-12 small-12 contendedor_gracias" id="contenedor_3">
	 				<div class="large-12 medium-12 small-12 contenedor_logo">
	 					<div class="large-3 medium-3 small-2 blank_tienda_durex">
	 						&nbsp
	 					</div>
	 					<div class="large-6 medium-6 small-10 logo_cancun_gracias"><img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="80%" >
	 					</div>
	 				</div>

	 				<div class="large-12 medium-12 small-12">

	 					<div class="large-7 medium-7 small-12 gracias"><img src="<?php echo assets_url('img/texto_gracias.png'); ?>" tittle="texto gracias" width="100%">
	 					</div>

	 					<div class="small-1 blank_tienda_durex">

	 					</div>

	 					<div class="large-4 medium-4 small-10 twitter" >
	 						<span style='font-weight: 300; font-family: "Lato",sans-serif; font-size: 1.8rem; color: rgb(255, 255, 255);'>Únete a la conversación:</span>
	 						<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/DurexColombia" data-widget-id="514064867058143232">Tweets por @DurexColombia</a>
	 						<script>
	 						! function(d, s, id) {
	 							var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
	 							if (!d.getElementById(id)) {
	 								js = d.createElement(s);
	 								js.id = id;
	 								js.src = p + "://platform.twitter.com/widgets.js";
	 								fjs.parentNode.insertBefore(js, fjs);
	 							}
	 						}(document, "script", "twitter-wjs");
	 						</script>

	 						<div class="contenedor_facebook large-12 maedium-12">

	 							<div class="fb-like-box" data-href="https://www.facebook.com/DurexColombia" data-width="312" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>

	 						</div>

	 					</div>

	 				</div>

	 				<div class="large-7 medium-7 small-7 blank_tienda_durex">
	 					&nbsp
	 				</div>

	 			</div>

	 		</article>
	 	</div>
	 </div>

	 <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" type="text/javascript"></script>
	 <script src="js/jquery.si.js" type="text/javascript"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	 <script src="js/vendor/jquery.js"></script>
	 <script src="js/foundation.min.js"></script>

	 <script>$(document).foundation();</script>

	 <!----------ESCONDER CONTENEDORES------------>

	 <script>

	 $("#getData").click(function() {
	 	var cedulaThis = $( "#cedula" ).val();
	 	$.post( "http://movimientosinteligentes.com/durex/home/getData", { cedula: cedulaThis }, function( data ) {
	 		console.log(data);
	 		if(data === 'no'){
	 			$("#errorId").append('<p style="color:red" id="erId">La cédula no se encuentra registrada</p>');
	 		}else{
	 			var obj = jQuery.parseJSON(data);
	 			$( "#nombre" ).val( obj.nombre );
	 			$( "#apellidos" ).val( obj.apellidos );
	 			$( "#email" ).val( obj.email );
	 			$( "#celular" ).val( obj.celular );
	 			$( "#fecha_nacimiento" ).val( obj.fecha_nacimiento );
	 			$( "#numero_factura" ).val( obj.numero_factura );

	 			$("#ciudad option[value="+ obj.ciudad +"]").attr("selected",true);

	 			$( "#terminosId" ).prop("checked", "checked");
	 			$( "#politicasId" ).prop("checked", "checked");

	 			if(obj.sexo === 'Masculino'){
	 				$("#sexo_masculino").prop("checked", "checked");
	 			}else{
	 				$("#sexo_femenino").prop("checked", "checked");
	 			}
	 		}
	 		
	 	});
	 });

	 jQuery(document).ready(function() {
	 	jQuery("#btn_1").click(function() {
	 		jQuery("#contenedor_1").hide();
	 		jQuery("#contenedor_3").hide();
	 		jQuery("#contenedor_2").show();
	 		jQuery("#logo_1").show();
	 	});
	 });

	 jQuery(document).ready(function() {
	 	jQuery("#btn_2").click(function() {
	 		jQuery("#contenedor_2").hide();
	 		jQuery("#contenedor_1").hide();
	 		jQuery("#logo_1").hide();
	 		jQuery("#contenedor_3").show();
	 	});
	 });

	 <?php if(@$statusJson == "error"): ?>
	 jQuery(document).ready(function() {
	 	jQuery("#contenedor_1").hide();
	 	jQuery("#contenedor_3").hide();
	 	jQuery("#contenedor_2").show();
	 	jQuery("#logo_1").show();
	 }); 
	 <?php endif; ?><?php if(@$statusJson == "success"): ?>
	 jQuery(document).ready(function() {
	 	jQuery("#contenedor_2").hide();
	 	jQuery("#contenedor_1").hide();
	 	jQuery("#logo_1").hide();
	 	jQuery("#contenedor_3").show();
	 }); 
	 <?php endif; ?></script>

<!----------FIN ESCONDER CONTENEDORES------------>