﻿<?
// Configuration
$adminemail="cotizacion@motoresyventiladores.mx";  // your e-mail

$date=date("d.m.y"); // date format: day.month.year
$time=date("H:i"); // time format: hour.minute

$backurl="http://motoresyventiladores.mx/index.php";  // Redirecting page after sending mail

// Input data from form

$name=$_POST['Nombre'];
$email=$_POST['Correo'];
$topic=$_POST['Asunto'];
$msg=$_POST['Mensaje'];

// Checking if e-mail entered is valid
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is",
strtolower($email))) {
	echo
	"<center>Please, return <a href='javascript:history.back(1)'><B>back</B></a> and check your e-mail!";
}
else {
	$msg="
	Nombre: $name
	Correo: $email
	Asunto: $topic
	Mensaje: $msg
";

// Sending mail

mail("$adminemail", "$date $time Message from
$name", "$msg");

// Redirecting back

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 0);
//--></script>";
exit;

}

?>
