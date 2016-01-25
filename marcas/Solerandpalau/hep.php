<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
	<title>HEP - Motores y Ventiladores</title>
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
				<img src="img/HEP.png" class="imgdeProductoGrande">
			</div>
			<div class="col-4 alineacionDefault">
				<div class="contenedor">
				<div class="fila">
				<h3 class="tituloProductos col-12">HEP</h3>
				<h4 class="col-12">Axiales Directos</h4>
				<p class="col-12">
					Extractores a Prueba de Explosión 400, 500 y 630 mm. de diámetro. Conjunto embocadura, soporte y hélice fabricados en aluminio, hélices en 6 palas, motor a prueba de explosión trifásico 4 polos 220/440 V. acoplado directamente a la hélice. Extracción de aire o ventilación de locales cuya atmósfera contenga uno o varios componentes explosivos: industria petroquímica, industria química, laboratorios, cuartos de pintura, bodegas de solventes.



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

<?php 
		require('../../footer.php');
	 ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="formulario.js"></script>
</body>
</html>