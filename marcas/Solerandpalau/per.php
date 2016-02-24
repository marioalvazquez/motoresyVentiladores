<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
	<title>Per - Motores y Ventiladores</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/animate.css">
</head>
<body>
	<header class="navbar-fixed-top menuPrincipal">
	<div class="contender">
		<a href="../../index.php"><img src="../../img/logo1.png" class="logoPrincipal" /></a>
	</div>
	<div class="contender">
		<nav class="navegador">
			<ul class="margenArriba">
				<li><a href="../../index.php">Inicio</a></li>
				<li><a href="../../productos.php">Productos</a></li>
				<li><a href="../../marcas.php">Marcas</a></li>
				<li><a href="../../empresa.php">Empresa</a></li>
				<li><a href="#contacto">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>
<section class="slider2">
		<div class="slider-Contenido">
		<h1>Soler&Palau</h1>
		<h5>Calidad / Precio / Confianza</h5>
		<button class="boton1">
			ver productos
		</button>
		</div>
	</section>
	<div class="seccionLineas">
		<div class="contenedor">
			<div class="fila centrado">
				<div class="col-3 ">
					<a href="linea-comercial.php"><img src="img/lineaComercial.png" class="Nlineas "></a>
				</div>
				<div class="col-3 ">
					<a href="linea-habitat.php"><img src="../../img/lineaHabitat.jpg" class="Nlineas"></a>
				</div>
				<div class="col-3 ">
					<a href="linea-industrial.php"><img src="../../img/lineaIndustrial.jpg" class="Nlineas"></a>
				</div>
				<div class="col-3 ">
					<a href="linea-oem.php"><img src="../../img/lineaOem.jpg" class="Nlineas"></a>
				</div>
			</div>
		</div>
	</div>

<section>
	<h1>ACCESORIOS</h1>
	<div class="contenedor">
		<div class="fila centrado columnas">
			<div class="col-6 centroResponsive">
				<img src="img/PER.png" class="imgdeProducto">
			</div>
			<div class="col-4 alineacionDefault centroResponsive">
				<div class="contenedor">
				<div class="fila">
				<h3 class="tituloProductos col-12">PER</h3>
				<h4 class="col-12">Accesorios de Montaje para Equipos Axiales</h4>
				<p class="col-12">
					Persianas de Sobrepresión con Mecanismo. Fabricación del marco de la persiana en lámina galvanizada con acabado en pintura electrostática en polvo color aluminio; palas de aluminio, mecanismo de apertura simultánea.
Los modelos PER/X-800 y PER/X-1000 están fabricados en materiales reforzados y su diseño es especial para manejar presiones más altas que las persianas convencionales. Los modelos 1500 y 1800 están diseñados para el ventilador HG, construido en 2 partes para facilidad de transporte. Reforzada y con altos calibres para poder ser usada en los ventiladores de tamaño 1500 y 1800 mm de diámetro. Se fijan directo sobre la pared exterior en 4 puntos de sujeción, las medidas coinciden directamente con el tamaño de los ventiladores. No precisan mantenimiento salvo una limpieza periódica.



				</p>
				<button class="callToAction col-12" id="mostrar-form">PIDE TU COTIZACIÓN</button>
					<form action="" id="formulario" class="formulario contenedor">
						<div class="fila around">
						<input type="text" id="nombre" placeholder="Nombre..." required class="col-12 nombreCorreo">
						<input type="mail" id="correo" placeholder="Correo..." required class="col-12 nombreCorreo">
						<input type="text" id="telefono" placeholder="Tu teléfono..." class="col-12 nombreCorreo">
						<input type="textarea" id="mensaje" placeholder="Tu mensaje..." class="col-12 nombreCorreo">
						<button type="submit" class="boton1">Enviar</button>
						</div>
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
		require('../../footer.php');
	 ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="formulario.js"></script>
</body>
</html>
