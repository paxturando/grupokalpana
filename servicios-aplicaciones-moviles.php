<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Programación de aplicaciones iOS y Android - Grupo Kalpana</title>
	<meta name="description" content="Programadores expertos de aplicaciones móviles para todas las necesidades y dispositivos: iOS, Android, Windows Phone">
	<meta name="keywords" content="aplicaciones móviles, apps, ios, android, windows phone">
	
	<link rel="canonical" href='http://www.grupokalpana.com/servicios-aplicaciones-moviles.php'>

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
		  		$menuSeleccion = 'am';
		  		include( 'php/wrapper-menu.php' ); 
		  		?>
		  		<div id="wrapper-menu-informacion">
		  			<?php include( 'php/wrapper-menu-aux.php' ); ?>
		  			<h2>Aplicaciones para móviles</h2>
		  			<p>Actualmente estamos viviendo la era de los dispositivos móviles. Estos dispositivos permiten utilizar todo tipo de aplicaciones que resuelven muchas de las necesidades diarias de los consumidores.</p>
		  			<p>Además de ofrecer una importante ventaja frente a los competidores, una aplicación permite integrar un negocio con el estilo de vida de sus clientes. Al instalar una aplicación los consumidores están permitiendo que las compañias los mantengan actualizados mediante el envío de notificaciones, ofertas y eventos.</p>
		  			<h3>Aplicaciones para iOS</h3>
		  			<p><img src="./images/layout-ios.png" class="imagen-izquierda" >iOS es el sistema operativo que originalmente fue desarrollado para el iPhone, aunque en la actualidad es usado por otros de los dispositivos de Apple, como el iPad y el iPod touch. Estos terminales producen verdadero entusiasmo entre los consumidores, por lo que no sorprende que su sistema operativo sea uno de los más utilizados en la actualidad. Debido a su alta cuota de mercado, el desarrollo de aplicaciones para el iOS produce una gran rentabilidad.</p>
		  			<h3>Aplicaciones para Android</h3>
		  			<p><img src="./images/layout-android.png" class="imagen-derecha" >Aunque un sistema operativo de Android tiene menos tiempo, ha progresado rápidamente y se ha convertido en uno de los sistemas operativos para teléfonos y tabletas más populares del mercado. Android utiliza muchas de las librerías desarrolladas por Google, por lo que es posible crear aplicaciones muy atractivas para los usuarios. Actualmente cuenta con casi la mitad del mercado, por lo que es necesario tenerlo en cuenta a la hora de desarrollar aplicaciones.</p>
		  			<form action="contact.php" method="get">
		  				<input type="hidden" name="servicio" value="am" >
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
