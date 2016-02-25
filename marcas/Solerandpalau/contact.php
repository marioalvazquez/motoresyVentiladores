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
    if(empty($errors)){
      $m = new PHPMailer;
      $m->isSMTP();
      $m->SMTPAuth = true;

      $m->Host = 'smtp.gmail.com';
      $m->Username = 'commerlinemx@gmail.com';
      $m->Password = 'panchoyira';
      $m->STMPSecure = 'ssl';
      $m->Port = 465;

      $m->isHTML();

      $m->Subject = 'Contact form submitted';
      $m->Body = 'From: ' . $fields['nombre'] . ' (' .$fields['correo'] . ') <p>' . $fields['mensaje'] . '</p>';

      $m->FromName = 'Contact';

      $m->AddAddress('commerlinemx@gmail.com', 'Mario Vázquez');

      if($m->send()){
        header('Location: correos.php');
        die();
      }else{
        $errors[] = 'Sorry, please try again';
      }
    }
  } else{
    $errors[] = 'Something went wrong.';
  }

  $_SESSION['errors'] = $errors;
  $_SESSION['fields'] = $fields;
  header('Location: correos.php');
 ?>
