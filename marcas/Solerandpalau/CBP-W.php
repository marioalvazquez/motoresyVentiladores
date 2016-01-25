<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
	<title>CBP-W - Motores y Ventiladores</title>
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
				<img src="img/CBP-W.png" class="imgdeProducto">
			</div>
			<div class="col-4 alineacionDefault">
				<div class="contenedor">
				<div class="fila">
				<h3 class="tituloProductos col-12">CBP-W</h3>
				<h4 class="col-12">Tubulares</h4>
				<p class="col-12">
Ventiladores silenciosos que se caracterizan por su fácil y cómodo funcionamiento.
<br><br>
La serie CB se compone de tres modelos con 600, 650 y 750 mm de diámetro nominal. Además de contar con la opción de ser colocados en pedestal o pared.
<br><br>
Características Generales:<br>
-Disponen de distintas velocidades y están provistos de un mecanismo que permite ajustar el equipo para una oscilación de 110º con un funcionamiento silencioso.
<br>-Llevan incorporados un protector térmico.<br>
-Guardas con separaciones tipo OSHA.<br>
-Pedestales en fundición con pintura epóxica.
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

<?php require('../../footer.php'); ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="formulario.js"></script>
</body>
</html>