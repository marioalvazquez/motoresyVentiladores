<?php
  session_start();

  require_once 'libs/phpmailer/PHPMailerAutoload.php';
  $errors = [];
  if(isset($_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['mensaje'])){
    $fields = [
      'nombre' => $_POST['nombre'],
      'correo' => $_POST['correo'],
      'telefono' => $_POST['telefono'],
      'mensaje' => $_POST['mensaje']
    ];
    foreach($fields as $field => $data) {
      if(empty($data)){
        $errors[] = 'The ' . $field . ' field is required.';
      }
    }
  } else{
    $errors[] = 'Something went wrong.';
  }

  $_SESSION['errors'] = $errors;
  header('Location: correos.php');
 ?>
