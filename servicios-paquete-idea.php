<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Proyectos expertos para negocios online - Grupo Kalpana</title>
	<meta name="description" content="Analizamos tu idea de negocio online y diseñamos una estrategia de desarrollo que te acompañará durante todo el proyecto cubriendo todas tus necesidades">
	<meta name="keywords" content="negocio online, estrategia desarrollo, necesidades, ciclo de vida">

	<link rel="canonical" href='http://www.grupokalpana.com/servicios-paquete-idea.php'>

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
				$menuSeleccion = 'pi';
		  		include( 'php/wrapper-menu.php' ); 
		  		?>
		  		<div id="wrapper-menu-informacion">
		  			<?php include( 'php/wrapper-menu-aux.php' );?>
		  			<h2>Paquete idea</h2>
		  			<p>Todo el mundo tiene una gran idea en algún momento de su vida, pero no siempre cuenta con los medio necesarios para poder llevarla a cabo.</p>
		  			<p>Imagina lo placentero que sería tener a alguien que estuviera contigo desde el principio del camino, aconsejándote en cada intersección, mostrándote todos los atajos y dándote la mano cada vez que tropezaras.</p>
		  			<p>¡No estás solo! En Kalpana nos ilusionamos cuando nos confían los proyectos tan jóvenes. Nos encanta ver como el sueño de una persona madura hasta convertirse en una realidad palpable. Además, estando desde el principio es inevitable que nos impliquemos en el proyecto como si fuera nuestro, y eso se nota en los resultados.</p>
		  			<p>¡Enhorabuena, ya has dado el primer paso! Ahora solo tienes que contarnos tu idea y juntos la convertiremos en un fructífero negocio.</p>
		  			<form action="contact.php" method="get">
		  				<input type="hidden" name="servicio" value="pi" >
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
