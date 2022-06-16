<?php

$destinatario = 'iruiz@frasangroup.com';
// esto es al correo al que se enviara el mensaje

$nombre = $_POST['nombre'];
$subject = "simple emails with php";
$email = $_POST['email'];
$telefono =  $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Formulario de Contacto Soy Paco Santos";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nEmail:" . $email;

mail($destinatario,$subject, $mensajeCompleto, $header);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>window,history.go(-1);</script>";

?>