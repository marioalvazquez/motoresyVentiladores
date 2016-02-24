<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
	<title>CCR - Motores y Ventiladores</title>
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
		<div class="fila centrado columnas">
			<div class="col-6 centroResponsive">
				<img src="img/CCR.png" class="imgdeProducto">
			</div>
			<div class="col-4 alineacionDefault centroResponsive">
				<div class="contenedor">
				<div class="fila">
				<h3 class="tituloProductos col-12">CCR</h3>
				<h4 class="col-12">Cajas de Ventilación Compactas</h4>
				<p class="col-12">
					Unidades de ventilación en descarga vertical diseñadas para la inyección de aire limpio; su estructura está fabricada en lámina de acero galvanizada. Su diseño incorpora dos paneles de inspección con escuadras de fijación para el fácil mantenimiento del motor
y la transmisión. Así como, un cuello rígido de descarga para facilitar la conexión al sistema de ventilación y cubierta portafiltro en la succión.
Estos equipos integrados a una caja de ventilación o manejadora de aire filtrado, ofrecen diversas ventajas,
como:<br><br>
- Velocidades de aire adecuadas.<br>
- Facilidad de instalación y mantenimiento.<br>
- Bajas velocidades de giro en turbina.<br>
- Acabado anticorrosivo.<br>
-Reducidos niveles de vibración y nivel sonoro.<br>




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

<?php require('../../footer.php'); ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="formulario.js"></script>
</body>
</html>
