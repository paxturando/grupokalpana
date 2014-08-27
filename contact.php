<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Cuéntanos tu proyecto - Grupo Kalpana</title>
	<meta name="description" content="Cuéntanos lo que estás buscando sin ningún compromiso, te responderemos en menos de 24 horas">
	<meta name="keywords" content="presupuesto, contacto, proyecto a medida">

	<link rel="canonical" href='http://www.grupokalpana.com/contact.php'>

	<link href='http://fonts.googleapis.com/css?family=Quicksand:700|Open+Sans:400,700|Happy+Monkey' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" >

	<script src="./js/scripts-analytics.js"></script>
</head>
<body>
	<?php include( 'php/header.php' ); ?>
	<div id="wrapper-cuerpo">	
		<div id="cabecera-cuerpo">
			<section>
				<article>
					<h2>Contacta con nosotros</h2>
					<p>Siempre estamos encantados de escuchar un nuevo proyecto y de poner toda nuestra experiencia y conocimiento en él. Cuéntanos lo que estás buscando sin ningún compromiso, te responderemos en menos de 24 horas.</p>
				</article>
				<img src="./images/contacto-layer.png" >
			</section>
		</div>
	  	<div id="wrapper-cuerpo-contenido">	
	  		<div id="wrapper-noticia-destacada">
		  		<section id="noticia-destacada">
		  			<ul class="noticia-destacada-unica">
		  				<li>
		  					<p><span class="icono-contacto"></span>¡Sí, hablemos de negocios!</p>
		  				</li>
		  			</ul>
		  		</section>
		  	</div>
		  	<div id="wrapper-panel-cuerpo">
		  		<?php
				//ini_set('display_errors','on');
        		//error_reporting(E_ALL);
        		$esPost = false;
		  		if( isset($_POST['form-name']) ){
		  			require_once 'php/sendform.php';
		  			$esPost = true;
		  			$resultCampos = sendForm();

		  			if( $resultCampos['enviado'] == 'ok' ){
		  				echo
			  			'<div id="comentario-enviado" class="ok">
			  				<p>El mensaje se ha enviado correctamente.</p>
			  				<p>¡Pronto nos pondremos en contacto contigo!</p>
			  			</div>';
		  			}
		  		}
	  			$fName = isset($_POST['form-name']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-name']: '';		  				            
	            $fApe = isset($_POST['form-apellidos']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-apellidos'] : '';
	            $fMail = isset($_POST['form-mail']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-mail'] : '';
	            $fTel = isset($_POST['form-tel']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-tel'] : '';
	            $fEmpresa = isset($_POST['form-empresa']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-empresa'] : '';
	            $fWeb = isset($_POST['form-web']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-web'] : '';
	            $fCom = isset($_POST['form-comentario']) && ($resultCampos['enviado'] != 'ok') ? $_POST['form-comentario'] : '';

	            $spanFName = ($esPost && ($resultCampos['fName'] != 'ok'))? ' style="display: inline;">nombre requerido' : '>';	            
	            $spanFMail = ($esPost && ($resultCampos['fMail'] > 0))? ' style="display: inline;">mail '.(($resultCampos['fMail'] > 1)?'inválido':'requerido') : '>';
	            $spanFTel = ($esPost && ($resultCampos['fTel'] !='ok'))? ' style="display: inline;">teléfono requerido' : '>';
	            $spanFCom = ($esPost && ($resultCampos['fCom'] !='ok'))? ' style="display: inline;">comentario requerido' : '>';	            

	            $classIName = ($esPost && ($resultCampos['fName'] != 'ok'))? 'campo-error' : '';
	            $classIMail = ($esPost && ($resultCampos['fMail'] > 0))? 'campo-error' : '';
	            $classITel = ($esPost && ($resultCampos['fTel'] != 'ok'))? 'campo-error' : '';
	            $classICom = ($esPost && ($resultCampos['fCom'] != 'ok'))? 'campo-error' : '';
		  		?>
		  		<form name="contacto" method="post" action="contact.php">
					<section class="campo-formulario">
		  				<label for"form-name">Nombre*</label>
		  				<span<?php echo $spanFName ?></span>
		  				<input type="text" name="form-name" id="form-name" value="<?php echo $fName; ?>" class="<?php echo $classIName ?>">
		  			</section>
		  			<section class="campo-formulario campo-last">
		  				<label for"form-apellidos">Apellidos</label>
		  				<span></span>
		  				<input type="text" name="form-apellidos" id="form-apellidos" value="<?php echo $fApe ?>">
		  			</section>
		  			<section class="campo-formulario">
		  				<label for"form-mail">Mail*</label>
		  				<span<?php echo $spanFMail ?></span>
		  				<input type="email" name="form-mail" id="form-mail" value="<?php echo $fMail ?>" class="<?php echo $classIMail ?>">
		  			</section>
		  			<section class="campo-formulario campo-last">
		  				<label for"form-tel">Teléfono*</label>
		  				<span<?php echo $spanFTel ?></span>
		  				<input type="tel" name="form-tel" id="form-tel" value="<?php echo $fTel ?>" class="<?php echo $classITel ?>">
		  			</section>
		  			<section class="campo-formulario">
		  				<label for"form-empresa">Empresa</label>
		  				<span></span>
		  				<input type="text" name="form-empresa" id="form-empresa" value="<?php echo $fEmpresa ?>">
		  			</section>
		  			<section class="campo-formulario campo-last">
		  				<label for"form-web">Web</label>
		  				<span></span>
		  				<input type="text" name="form-web" id="form-web" value="<?php echo $fWeb ?>">
		  			</section>
		  			<section class="campo-formulario campo-inline">
		  				<label for"form-comentario">Comentario*</label>
		  				<span<?php echo $spanFCom ?></span>
		  				<textarea rows="5" cols="50" name="form-comentario" id="form-comentario" class="<?php echo $classICom ?>"><?php
		  					if( $esPost == false )
		  					{
		  						$cadenaEnvio = 'Saludos, estoy interesado en que me contactéis para que hablemos sobre vuestros servicios';
		  						$paramEntrada = isset( $_GET["servicio"] )? $_GET["servicio"] : "";
		  						switch ( $paramEntrada ) {
		  							case "pi":
		  								$cadenaServicio = ' del paquete idea.';
		  								break;
		  							case "dw":
		  								$cadenaServicio = ' de desarrollo web.';
		  								break;
		  							case "mi":
		  								$cadenaServicio = ' de marketing online.';
		  								break;
		  							case "am":
		  								$cadenaServicio = ' de aplicaciones para móviles.';
		  								break;
		  							case "av":
		  								$cadenaServicio = ' de alojamiento virtual.';
		  								break;
		  							case "sm":
		  								$cadenaServicio = ' de soporte y mantenimiento.';
		  								break;
		  							default:
		  								$cadenaServicio = '.';
		  								break;	  							
		  						}
		  						echo $cadenaEnvio.$cadenaServicio;
		  					} else 
		  					{
		  						echo $fCom;
		  					}
		  				?></textarea>
		  			</section>
		  			<section class="campo-formulario campo-inline">
		  				<p>* Campos requeridos</p>
		  			</section>
		  			<section class="campo-formulario campo-inline campo-submit">
		  				<input type="submit" name="form-enviar" id="form-enviar" value="Enviar Consulta" >
		  			</section>
		  		</form>
		  		<section id="informacion-contacto">
		  			<h3>Información de contacto</h3>
					<address>
						<p><span id="telefono-contacto"></span>(+34) 679882938</p>
						<p><span id="mail-contacto"></span><a href="mailto:info@grupokalpana.com">info@grupokalpana.com</a></p>
					</address>
		  		</section>
		  	</div>
		</div>
	</div>
	<?php include( 'php/footer.php' ); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="./js/scripts-contact.js"></script>
</body>
</html>
