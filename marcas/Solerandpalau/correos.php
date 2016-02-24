<?php
if(isset($_POST['submit'])){
    $to = "marioal.vazquez@gmail.com"; // this is your Email address
    $from = $_POST['correo']; // this is the sender's Email address
    $first_name = $_POST['nombre'];
    $subject = "Solicitud de cotización";
    $subject2 = "Solicitud de cotización";
    $message = $first_name . " " . " escribió:" . "\n\n" . $_POST['mensaje'];
    $message2 = "Copia del mensaje " . $first_name . "\n\n" . $_POST['mensaje'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
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
					<form action="" id="formulario" class="formulario contenedor" method="post">
						<div class="fila around">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre..." required class="col-12 nombreCorreo">
						<input type="mail" name="correo" id="correo" placeholder="Correo..." required class="col-12 nombreCorreo">
						<input type="text" name="telefono" id="telefono" placeholder="Tu teléfono..." class="col-12 nombreCorreo">
						<input type="textarea" name="mensaje" id="mensaje" placeholder="Tu mensaje..." class="col-12 nombreCorreo">
						<button type="submit" name="enviar" class="boton1">Enviar</button>
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
