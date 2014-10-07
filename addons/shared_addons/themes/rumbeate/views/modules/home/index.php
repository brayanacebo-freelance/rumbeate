 	<div id="fb-root"></div>
 	<script>(function(d, s, id) {
 		var js, fjs = d.getElementsByTagName(s)[0];
 		if (d.getElementById(id)) return;
 		js = d.createElement(s); js.id = id;
 		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
 		fjs.parentNode.insertBefore(js, fjs);
 	}(document, 'script', 'facebook-jssdk'));</script>
 	<style>
 	.custom-input-file {
 		position: relative;
 		overflow: hidden;
 		cursor: pointer;
 		border-style: solid;
 		border-width: 0px;
 		-webkit-appearance: none;
 		-webkit-border-radius: 8px;
 		background-color: #008cba;
 		border-color: #007095;
 		color: white;
 		text-align: center;
 		font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
 		font-weight: normal;
 		line-height: normal;
 		font-size: 12pt;
 		width: 200px;
 		min-height: 40px;
 		margin: 0 0 0 0;
 		display: inline-block;
 		padding-top: 10px;
 	}
 	.custom-input-file:hover {
 		background-color: #007095;
 		color: #fff;
 	}
 	.custom-input-file .input-file {
 		margin: 0;
 		padding: 0;
 		outline:0;
 		font-size: 10000px;
 		border: 10000px solid transparent;
 		opacity: 0;
 		filter: alpha(opacity=0);
 		position: absolute;
 		right: -1000px;
 		top: -1000px;
 		cursor: pointer;
 	}
 	.custom-input-file .archivo {
 		background-color: #000;
 		color: #fff;
 		font-size: 7pt;
 		overflow: hidden;
 	}

 	</style>
 	<script>
 	$(function(){
 		$(".custom-input-file input:file").change(function(){
 			$(this).parent().find(".archivo").html($(this).val());
 		}).css('border-width',function(){
 			if(navigator.appName == "Microsoft Internet Explorer")
 				return 0;
 		});
 	});
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
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
function mascara(d,sep,pat,nums){
	if(d.valant != d.value){
		val = d.value
		largo = val.length
		val = val.split(sep)
		val2 = ''
		for(r=0;r<val.length;r++){
			val2 += val[r]	
		}
		if(nums){
			for(z=0;z<val2.length;z++){
				if(isNaN(val2.charAt(z))){
					letra = new RegExp(val2.charAt(z),"g")
					val2 = val2.replace(letra,"")
				}
			}
		}
		val = ''
		val3 = new Array()
		for(s=0; s<pat.length; s++){
			val3[s] = val2.substring(0,pat[s])
			val2 = val2.substr(pat[s])
		}
		for(q=0;q<val3.length; q++){
			if(q ==0){
				val = val3[q]
			}
			else{
				if(val3[q] != ""){
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
					<div class="large-1 blank_logo">&nbsp
					</div>

					<div class="large-10 medium-12 small-12 logo_cancun_texto">
						<img src="<?php echo assets_url('img/texto_logo.png'); ?>" width="100%" tittle="logo texto cancun">
					</div>
					<!--Fin logo texto 640px hasta 1024px-->


					<!--logo texto 0px hasta 640px-->
					<div class="small-12 logo_cancun_texto_2">
						<img src="<?php echo assets_url('img/texto_logo_2.png'); ?>" width="100%" tittle="logo texto cancun">
					</div>

					<div class="small-1 blank_logo_small">&nbsp
					</div>

					<div class="small-10 logo_cancun_2">
						<img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="100%" tittle="logo texto cancun">
					</div>

					<div class="small-3 blank_premios">&nbsp
					</div>
					<!--Fin logo texto 0px hasta 640px-->

					<div class="large-12 medium-12 small-12 contendedor_logo">
						<div class="large-3 medium-3 blank_logo">&nbsp
						</div>

						<div class="large-5 medium-6 small-10 logo_cancun">
							<img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="100%" tittle="logo cancun durex">
						</div>
					</div>

				</header>

				
				<div class="large-12 medium-12 small-12 descripcion_premios">
					<div class="large-2 medium-1 small-4 blank_mecanica">&nbsp
					</div>

					<div class="large-2 medium-3 small-5 texto_mecanica">
						<p>¿Cómo <br /> <span style="font-weight:400;">participar</span>?</p>
					</div>

					<div class="large-2 medium-3 small-4 mecanica_1">
						<p> <span style="font-weight:400;"> Compra productos DUREX® </span><br /> de cualquier referencia</p>	
					</div>

					<div class="large-2 medium-3 small-4 mecanica_2">	
						<p> Registra tus compras <br /> y datos personales en <br/><span style="font-weight:400;text-align:center;">www.rumbeatecancun.com</span></p>	
					</div>

					<div class="large-2 medium-3 small-4 mecanica_3">	
						<p>  Participa y gana*  <br /> 1 de los 5 viajes a Cancún <br/><span style="font-weight:400;">con todos los gastos pagos</span></p>
					</div>

					<div class="large-2 medium-2 small-2 blank_mecanica">&nbsp
					</div>
					
				</div>

				
				<div class="large-4 medium-4 small-12 compra">
					<div class="large-1 medium-1 small-1 blank_mecanica">&nbsp
					</div>

					<div class="large-3 medium-4 small-3 texto_compra">
						<p>Compra en: </p>
					</div>
					
					<div class="large-7 medium-7 small-7 logos_compra">
						<img src="<?php echo assets_url('img/logos.png'); ?>" width="100%">
					</div>

					<div class="large-12 medium-12 small-12 texto_terminos">
						Conoce los términos y condiciones <a href="home/terminos_y_condiciones" target="_blank">aquí.</a>
					</div>
					
				</div>

				<div class="large-12 medium-12 small-12 footer">
					<div class="large-2 medium-2 small-2 plugin_redes">
						<div class="large-12 medium-12 small-12 twitter_megusta">
							<a href="https://twitter.com/DurexColombia" class="twitter-follow-button" data-show-count="false">Follow @DurexColombia</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>

						<div class="large-12 medium-12 small-12 facebook">
							<div class="fb-follow" data-href="https://www.facebook.com/DurexColombia" data-height="250px" data-colorscheme="light" data-layout="button_count" data-show-faces="true"></div>
						</div>

					</div>

					<div class="large-2 medium-2 small-5 ya_participaste "><img src="<?php echo assets_url('img/btn_ya_compraste.png'); ?>" width="70%" alt="Botón participa">
					</div>

					<div class="large-3 medium-3 small-7 participa">
						<a href="javascript:;" class="large-12 medium-12 small-12 btn_participa" id="btn_1">
							<div class="coco_loco large-6 medium-6 small-6"><img src="<?php echo assets_url('img/coco_loco.png'); ?>" width="100%" alt="Coco loco">
							</div>
							<div class="flecha_participa large-6 medium-6 small-6"><img src="<?php echo assets_url('img/btn_participa.png'); ?>" width="100%" alt="Botón participa">
							</div>
						</a>

					</div>
				</div>	

			</div>
			


			
			<!----------CONTENEDOR PAGINA 2------------>


			<div class="formulario_contendedor large-12 medium-12 small-12" id="contenedor_2">
				
				<header class="large-12 medium-12 small-12 header_2" id="logo_1">
					
					
					<div class="large-12 medium-12 small-12 contendedor_logo_2">
						<!--Logo texto 640px hasta 1024px-->
						<div class="large-1 medium-1 small-1 blank_logo_header_2">&nbsp
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
							<div class="large-3 medium-1 small-3 blank_mecanica_2">&nbsp
							</div>	

							<div class="large-2 medium-3 small-2 info_factura">
								<p> <span style="font-weight:400;">1. Llena el formulario</span> <br />con tus datos personales.<br />
									<span class="texto_registrado_2">¿Ya estás registrado? <br />Digita solo tú número de cédula.</span>
								</p>	
							</div>

							<div class="large-2 medium-3 small-2 info_factura_2">	
								<p><span style="font-weight:400;">2. Toma una foto clara </span><br /> y legible de la factura <br /> de tu compra Durex.	

								</p>	
							</div>

							<div class="large-2 medium-3 small-2 info_factura_3">	
								<p><span style="font-weight:400;">3. Sube tu foto, &nbsp;</span>confirma <br />que el archivo haya cargado <br />exitosamente y envíalo.</p>
							</div>

							<div class="large-3 medium-1 small-3 blank_mecanica">&nbsp
							</div>
						</div>			
					</div>

					<div class="large-12 medium-12 small-12 formulario">


						<!-- INICIO DEL FORMULARIO -->

						<!-- NOTIFICACIONES -->
						<?php if(@$statusJson == "error"): ?>
						<div style="color: red;padding: 10px;"><?php echo @$msgJson ?></div>
					<?php endif; ?>

					<?php echo form_open_multipart(site_url('home/send'), 'class="crud form_contac_ajax" id="formAjax"'); ?>        
					<ul class="columna_1 large-7 medium-7 small-12">
						<div class="texto_registrado small-12" style="color: white;left: 50px;position: relative;">¿Ya estás registrado? <br />Digita solo tú número de cédula.
						</div>

						<div class="small-12 blank_campo_formulario">&nbsp
						</div>

						<li class="campo large-6 medium-6 small-6">
							<div class="texto_campo large-5 medium-5 small-6">Cédula</div>
							<div class="input large-7 medium-7 small-6" >
								<input type="text" class="campo_input" style="height:30px;" name="cedula" value="<?php echo set_value('cedula'); ?>"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-6">
							<div class="texto_campo_sexo large-5 medium-5 small-4" > Sexo </div>
							<div class="input radio_button large-7 medium-7 small-6" id="sexoo">
								<input type="radio" name="sexo" value="Femenino" class="radio_button" id="sexo_femenino" <?php echo set_checkbox('sexo', 'Femenino'); ?>>
								<label class="label_1">F</label>  
								<input type="radio" name="sexo" value="Masculino" class="radio_button" id="sexo_masculino" <?php echo set_checkbox('sexo', 'Masculino'); ?>><label class="label_1">M</label>  
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<div class="texto_campo large-5 medium-5 small-3" > Nombre</div>
							<div class="input large-7 medium-7 small-8" >
								<input type="text" class="campo_input" style="height:30px;" name="nombre" value="<?php echo set_value('nombre'); ?>"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<div class="texto_campo large-5 medium-5 small-3" > Apellidos</div>
							<div class="input large-7 medium-7 small-8" >
								<input type="text" class="campo_input" style="height:30px;" name="apellidos" value="<?php echo set_value('apellidos'); ?>"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<div class="texto_campo large-5 medium-5 small-3" > Email</div>
							<div class="input large-7 medium-7 small-8" >
								<input type="text" class="campo_input" style="height:30px;" name="email" value="<?php echo set_value('email'); ?>"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<div class="texto_campo large-5 medium-5 small-3" > Ciudad</div>
							<div class="input large-7 medium-7 small-8" >
								<input type="text" class="campo_input" style="height:30px;" name="ciudad" value="<?php echo set_value('ciudad'); ?>"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<div class="texto_campo large-5 medium-5 small-3" > Celular</div>
							<div class="input large-7 medium-7 small-8" >
								<input type="text" class="campo_input" style="height:30px;" name="celular" value="<?php echo set_value('celular'); ?>"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<div class="texto_campo large-5 medium-5 small-6" > Fecha de nacimiento</div>
							<div class="input large-7 medium-7 small-5" >
								<input type="text" name="fecha_nacimiento" onkeyup="mascara(this,'/',patron,true)" maxlength="10" placeholder="DD/MM/AAAA" value="<?php echo set_value('fecha_nacimiento'); ?>" style="height:30px;"/>
							</div>
						</li>

						<li class="campo large-6 medium-6 small-12">
							<label class="texto_check large-9 medium-9 small-10"><a href="home/terminos_y_condiciones" target="_blank" tittle="terminos y condiciones">Acepto los términos y condiciones</a>
							</label>
							<input type="checkbox" class="large-1 medium-1 small-1" name="terminos" value="1" <?php echo set_checkbox('terminos', '1'); ?> id="terminosId">
						</li>

						<li class="campo large-6 medium-6 small-12 politicas">
							<label class="texto_check_2 large-9 medium-9 small-10"><a href="home/politicas_de_privacidad" target="_blank" title="políticas de privacidad">Acepto las políticas de privacidad</a>
							</label>
							<input type="checkbox" class="large-1 medium-1 small-1" name="politicas" value="1" <?php echo set_checkbox('politicas', '1'); ?> id="politicasId">
						</li>

						<li class="campo large-6 medium-6 small-12" id="errorId" style="left: 20px;">
						</li>
					</ul>



					<ul class="columna_3 large-4 medium-4 small-12 columns">

						<li class="campo large-12 medium-12 small-12">
							<div class="contenedor_subir_factura large-10 medium-10 small-10">
								<div class="texto_subir_factura large-12 medium-12 small-12" > Sube la foto de tu factura de compra </div>
							</div>
						</li>

						

						<li class="campo large-12 medium-12 small-12">
							<div class="contenedor_subir_factura_2 large-12 medium-12 small-12">
								<div class="texto_campo_examinar large-12 medium-12 small-12" >
									<div class="custom-input-file">
										<?php echo form_upload('image', '', ' id="image" class="input-file"'); ?>
										Examinar
									</div>
								</div>
							</div>
						</li>

						<li class="campo large-12 medium-12 small-12"> 
							<div class="linea_separador large-12 medium-12 small-12" >&nbsp</div>
						</li>

						<li class="campo large-12 medium-12 small-12">
							<div class="texto_campo_tienda large-12 medium-12 small-12" > Si compraste en la Tienda Durex, solo ingresa el número de la factura:
							</div>
							<div class="input_tienda large-7 medium-7 small-7" >
								<input type="text" class="campo_input" style="height:30px;" name="numero_factura" value="<?php echo set_value('numero_factura'); ?>" id=""/>
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

				<div class="small-3 blank_subir_factura">&nbsp
				</div>

				<div class="large-3 medium-3 small-6 participa">
					<a href="#" id="submitButton">
						<!-- <a href="#" class="large-12 medium-12 small-12 btn_participa"> -->
						<!-- <div class="btn_enviar large-10 medium-12 small-12" id="btn_2"> -->
						<img src="<?php echo assets_url('img/btn_enviar_formulario.png'); ?>" width="100%" alt="Enviar formularoooooio">
						<!-- </div> -->
					</a>

				</div>
			</div>	
		</div>



		<!----------CONTENEDOR PAGINA 3------------>	

		<div class="large-12 medium-12 small-12 contendedor_gracias" id="contenedor_3">
			<div class="large-12 medium-12 small-12 contenedor_logo">
				<div class="large-3 medium-3 small-2 blank_tienda_durex">&nbsp
				</div>
				<div class="large-6 medium-6 small-10 logo_cancun_gracias"><img src="<?php echo assets_url('img/logo_cancun.png'); ?>" width="80%" >
				</div>
			</div>

			<div class="large-12 medium-12 small-12">

				<div class="large-7 medium-7 small-12 gracias"><img src="<?php echo assets_url('img/texto_gracias.png'); ?>" tittle="texto gracias" width="100%">
				</div>

				<div class="small-1 blank_tienda_durex">&nbsp
				</div>

				<div class="large-4 medium-4 small-10 twitter">
					<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/DurexColombia" data-widget-id="514064867058143232">Tweets por @DurexColombia</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					<div class="contenedor_facebook large-12 maedium-12">

						<div class="fb-like-box" data-href="https://www.facebook.com/DurexColombia" data-width="312" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>

					</div>

				</div>


			</div>

			<div class="large-7 medium-7 small-7 blank_tienda_durex">&nbsp
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

<script>
$(document).foundation();
</script>


<!----------ESCONDER CONTENEDORES------------>	


<script>

jQuery(document).ready(function(){
	jQuery("#btn_1").click(function(){
		jQuery("#contenedor_1").hide();
		jQuery("#contenedor_3").hide();
		jQuery("#contenedor_2").show();
		jQuery("#logo_1").show();
	});
});

jQuery(document).ready(function(){
	jQuery("#btn_2").click(function(){
		jQuery("#contenedor_2").hide();
		jQuery("#contenedor_1").hide();
		jQuery("#logo_1").hide();
		jQuery("#contenedor_3").show();
	});
});

<?php if(@$statusJson == "error"): ?>
jQuery(document).ready(function(){
	jQuery("#contenedor_1").hide();
	jQuery("#contenedor_3").hide();
	jQuery("#contenedor_2").show();
	jQuery("#logo_1").show();
});
<?php endif;?>

<?php if(@$statusJson == "success"): ?>
jQuery(document).ready(function(){
	jQuery("#contenedor_2").hide();
	jQuery("#contenedor_1").hide();
	jQuery("#logo_1").hide();
	jQuery("#contenedor_3").show();
});
<?php endif;?>

</script>


	<!----------FIN ESCONDER CONTENEDORES------------>