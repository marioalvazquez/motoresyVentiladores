<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
	<title>CCK - Motores y Ventiladores</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/animate.css">
</head>
<body>
	<?php 
		require('header.php');
		require('section-top.php');
	 ?>


<section>
	<h1>ACCESORIOS</h1>
	<div class="contenedor">
		<div class="fila centrado">
			<div class="col-6">
				<img src="img/CCK.png" class="imgdeProducto">
			</div>
			<div class="col-4 alineacionDefault">
				<div class="contenedor">
				<div class="fila">
				<h3 class="tituloProductos col-12">CCK</h3>
				<h4 class="col-12">Cajas de Ventilación Compactas</h4>
				<p class="col-12">
					Descripción
					<br><br>
Unidades de ventilación en descarga horizontal diseñadas para la inyección de aire limpio; su estructura está fabricada en lámina de acero galvanizada que la hacen un conjunto ideal para instalaciones en intemperie e interiores con dimensiones compactas para falso plafón.
<br><br>
Su diseño incorpora dos paneles de inspección con escuadras de fijación para el fácil mantenimiento del motor y la transmisión. Así como cuellos rígidos de descarga y succión para facilitar la conexión de los ductos.
<br><br>
Estos equipos integrados a una caja de ventilación o manejadora de aire filtrado, ofrecen diversas ventajas, como:
- Velocidades de aire adecuadas.
- Facilidad de instalación y mantenimiento.
- Bajas velocidades de giro en turbina.
- Acabado anticorrosivo.
-Reducidos niveles de vibración y nivel sonoro
<br><br>
Las principales aplicaciones son: inyección de aire limpio, presurización, ventilación en locales comerciales, salas de juntas, centros comerciales.



				</p>
				<button class="callToAction col-12" id="mostrar-form">COMPRAR</button>
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

<?php require('../../footer.php') ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="formulario.js"></script>
</body>
</html>