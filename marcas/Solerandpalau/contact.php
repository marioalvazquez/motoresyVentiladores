<?php
  session_start();

  require_once 'libs/phpmailer/PHPMailerAutoload.php';
  $errors = [];
  if(isset($_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['mensaje'])){
    echo 'All set';
  }
 ?>
