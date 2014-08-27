<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Diseño adaptativo y desarrollo web - Grupo Kalpana</title>
	<meta name="description" content="Desarrollo de soluciones web totalmente adaptadas a las necesidades del cliente, Gestores de Contenido propios, Wordpress, Drupal, Joomla">
	<meta name="keywords" content="desarrollo web, soluciones, cms, gestor de contenido, wordpress, drupal, joomla">

	<link rel="canonical" href='http://www.grupokalpana.com/servicios-desarrollo-web.php'>

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
		  		$menuSeleccion = 'dw';
		  		include( 'php/wrapper-menu.php' ); 
		  		?>
		  		<div id="wrapper-menu-informacion">
		  			<?php include( 'php/wrapper-menu-aux.php' ); ?>
		  			<h2>Desarrollo web</h2>
		  			<p>Internet es un entorno que continuamente está cambiando, por lo que es necesario mantenerse al día con las mejores y más novedosas plataformas de desarrollo. ¿Por qué es importante todo esto? Pues porque tu sitio web es la primera impresión que los usuarios se van a llevar de tu empresa. Es donde tomarán la decisión de seguir contigo o continuar buscando algo que se ajuste mejor a sus necesidades.</p>
		  			<p>¡Aprovéchate de nuestra experiencia! Desarrollamos sitios web a medida comprometiéndonos siempre a lograr el maximo grado de satisfacción y relajación por parte de nuestros clientes.</p>
		  			<h3>Diseño adaptativo</h3>
		  			<p><img src="./images/layout-responsive.png" class="imagen-izquierda" >Cada vez són más las personas que navegan desde un dispositivo móvil, por lo que los sitios web deben adaptarse a las nuevas modalidades de conexión. Todos hemos navegado alguna vez con nuestro terminal y hemos comprobado lo poco placentero que puede resultar. Mediante esta técnica, los elementos que componen el sitio web se redimensionan y reestructuran según la resolución de pantalla utilizada, mejorando enormemente la navegación y la visualización del sitio. El diseño web adaptativo es un aspecto a tener en cuenta si se desea obtener una buena presencia en internet.</p>
		  			<h3>Gestor de contenidos</h3>
		  			<p><img src="./images/layout-cms.png" class="imagen-derecha" >Para mantener actualizada una página web es necesario ir renovando con frecuencia sus contenidos. Mantener vivo el sitio es un factor determinante para subir posiciones en los buscadores. Para ello existen dos opciones: Encargar a un desarrollador que administre la página web o utilizar un gestor de contenidos, que permite manejar el sitio web sin necesitad de conocimientos informáticos. Los gestores de contenidos, sin embargo, cuentan con un montón de parámetros de configuración innecesarios que dificultan el aprendizaje, por lo que en Kalpana los personalizamos para cada proyecto, permitiendo así administrar la página web de forma rápida y sencilla.</p>
		  			<h3>Comercio electrónico</h3>
		  			<p><img src="./images/layout-ecommerce.png" class="imagen-izquierda" >El comercio electrónico es una página web donde los clientes pueden adquirir los productos o servicios ofrecidos por una empresa. La mayoría de los negocios están interesados ya que les permite ofrecer servicio las 24 horas durante los 365 días del año. Desarrollar una tienda virtual es la forma más efectiva de aumentar las ventas y de impulsar tu negocio. En Kalpana desarrollamos tiendas virtuales atractivas y fáciles de usar que siempre superan las espectativas de nuestros clientes.</p>
		  			<form action="contact.php" method="get">
		  				<input type="hidden" name="servicio" value="dw" >
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
