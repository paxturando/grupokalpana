<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Alojamiento virtual sencillo y seguro - Grupo Kalpana</title>
	<meta name="description" content="Nuestros servidores proporcionan alojamiento virtual y cuentas de correo electrónico con la máxima seguridad y las últimas tecnologías">
	<meta name="keywords" content="alojamiento virtual, cuentas correo electrónico, seguridad, tecnología">

	<link rel="canonical" href='http://www.grupokalpana.com/servicios-alojamiento-virtual.php'>

	<link href='http://fonts.googleapis.com/css?family=Quicksand:700|Open+Sans:400,700|Happy+Monkey' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

	<script src="./js/scripts-analytics.js"></script>
</head>
<body>
	<?php include( 'php/header.php' ); ?>
	<div id="wrapper-cuerpo">	
		<div id="cabecera-cuerpo">
			<section>
				<article>
					<h2>¿Qué hacemos por ti?</h2>
					<p>Estamos especializados en el desarrollo de proyectos online que ayudan a las empresas a reducir costes y aumentar beneficios. Hacemos uso de las últimas tecnologías para poder ofrecer las soluciones que mejor se adapten a las necesidades de nuestros clientes.</p>
				</article>
				<img src="./images/servicios-layer.png" >
			</section>
		</div>
	  	<div id="wrapper-cuerpo-contenido">	
	  		<div id="wrapper-noticia-destacada">
		  		<section id="noticia-destacada">
		  			<ul class="noticia-destacada-unica">
		  				<li>
		  					<p><span class="icono-servicios"></span>¡Contágiate de nuestro entusiasmo!</p>
		  				</li>
		  			</ul>
		  		</section>
		  	</div>
		  	<div id="wrapper-panel-cuerpo">
		  		<?php 
		  		$menuSeleccion = 'av';
		  		include( 'php/wrapper-menu.php' ); 
		  		?>
		  		<div id="wrapper-menu-informacion">
		  			<?php include( 'php/wrapper-menu-aux.php' ); ?>
		  			<h2>Alojamiento virtual</h2>
		  			<p>Toda página web necesita estar almacenada en un servidor. Los servidores permiten que el contenido de la web esté siempre disponible desde cualquier lugar.</p>
		  			<p>¡No te compliques la vida! Ofrecemos alojamiento virtual para todo tipo de páginas web que podrás administrar tu mismo de una forma sencilla desde nuestro intuitivo panel de control.</p>
		  			<h3>Cuentas de correo</h3>
		  			<p><img src="./images/layout-correo.png" class="imagen-izquierda" >Hoy en día se ha vuelto imprescindible para cualquier empresa disponer de correo electrónico, pero la gran mayoría descuidan su imagen haciendo uso de cuentas de correo gratuitas. Utilizar cuentas de correo corporativas otorga un toque de seriedad extra a la empresa, por lo que te damos la posibilidad de crear todas las que necesites para tu negocio. También te ofrecemos una herramienta de correo electrónico desde donde podrás gestionar todas tus cuentas de manera segura y eficaz.</p>
		  			<h3>Bases de datos</h3>
		  			<p><img src="./images/layout-bd.png" class="imagen-derecha" >Gran parte de la información presentada en una página web es estática. Por otra parte, también existe contenido dinámico, y como tal necesita estar almacenado en una base de datos. En Kalpana somos conscientes del valor que tienen esos datos, por lo que incorporamos las características más útiles y novedosas a nuestro sistema gestor de bases de datos, obteniendo el máximo rendimiento de un forma segura y sin complicaciones. ¡Evita sustos!</p>
		  			<form action="contact.php" method="get">
		  				<input type="hidden" name="servicio" value="av" >
		  				<input type="submit" value="Solicitar Presupuesto" >
		  			</form>
		  		</div>
		  	</div>
		</div>
	</div>
	<?php include( 'php/footer.php' ); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="./js/scripts-contact.js"></script>
</body>
</html>
