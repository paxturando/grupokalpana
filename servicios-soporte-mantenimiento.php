<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Equipo especializado y respuesta rápida - Grupo Kalpana</title>
	<meta name="description" content="Disponemos de múltiples planes de mantenimiento periódico y un equipo encargado de que tu web siempre esté actualizada y funcionando">
	<meta name="keywords" content="planes de mantenimiento, soporte, equipo especializado, web actualizada">

	<link rel="canonical" href='http://www.grupokalpana.com/servicios-soporte-mantenimiento.php'>

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
				$menuSeleccion = 'sm';
		  		include( 'php/wrapper-menu.php' ); 
		  		?>
		  		<div id="wrapper-menu-informacion">
		  			<?php include( 'php/wrapper-menu-aux.php' ); ?>
		  			<h2>Soporte y mantenimiento</h2>
		  			<p>Desarrollar un sitio web de calidad es parte del trabajo, pero ahí no termina todo. Para asegurar el éxito es necesario mantener continuamente la página web actualizada y funcionando de forma correcta.</p>
					<p>Los problemas pueden llegar en el momento menos esperado. La tecnología que usa un sitio web no está libre de errores y los sistemas en ocasiones pueden fallar. También podría necesitarse un cambio en la web que debe de realizarse lo antes posible. En ambos casos en necesaria una respuesta rápida.</p>
		  			<p>En Kalpana ponemos a tu disposición a un equipo especializado que reaccionará de manera instantánea ante cualquier problema que pueda surgir. Nos mantenemos alerta los 7 días de la semana para asegurarnos de que tu empresa recibe el soporte técnico que se merece.</p>
					<form action="contact.php" method="get">
		  				<input type="hidden" name="servicio" value="sm" >
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
