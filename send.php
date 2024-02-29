<?php
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$mensaje = $_POST['user_message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/"  . phpversion() . " \r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n"; 
$message .= "Su email es: " . $email . " \r\n"; 
$message = "Mensaje: " . $mensaje . " \r\n"; 
$message = "Enviado el: " . date('d/m/Y', time());

$para = 'estefangz@gmail.com';
$asunto = 'prueba';

mail($para, $asunto, $message, $header);
 
header("Location: index.html")
?>