<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre: " . $nombre . " " . $apellido . " \r\n";
$mensaje .= "E-mail: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'josue1120@outlook.com';
$asunto = 'Nuevo Mensaje de Contacto - ProgAndArt';

mail($para, $asunto, utf8_decode($mensaje), $header);

header ("Location: index.html#contact");

?>