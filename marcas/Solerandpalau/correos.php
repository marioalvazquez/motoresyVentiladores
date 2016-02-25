<?php
  session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
	<title>BS - Motores y Ventiladores</title>
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
				<img src="img/BS.png" class="imgdeProducto">
			</div>
			<div class="col-4 alineacionDefault centroResponsive">
				<div class="contenedor">
				<div class="fila">
				<h3 class="tituloProductos col-12">BS</h3>
				<h4 class="col-12">Centrífugos</h4>
				<p class="col-12">
					Ventiladores Centrífugos

				</p>
				<button class="callToAction col-12" id="mostrar-form">PIDE TU COTIZACIÓN</button>
					<form action="contact.php" id="formulario" class="formulario contenedor" method="post">
						<div class="fila around">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre..." required class="col-12 nombreCorreo">
						<input type="mail" name="correo" id="correo" placeholder="Correo..." required class="col-12 nombreCorreo">
						<input type="text" name="telefono" id="telefono" placeholder="Tu teléfono..." class="col-12 nombreCorreo">
						<input type="textarea" name="mensaje" id="mensaje" placeholder="Tu mensaje..." class="col-12 nombreCorreo">
						<input type="submit" name="enviar" class="boton1" value="Enviar">
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
<?php
  unset($_SESSION['errors']);
 ?>
