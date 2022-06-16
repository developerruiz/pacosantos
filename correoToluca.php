<?php

$destinatario = 'iruiz@frasangroup.com';

// esto es al correo al que se enviara el mensaje

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$subject = "simple emails with php";
$telefono =  $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$header = "Paco Santos oficina Toluca";

$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nEmail:" . $email;

mail($destinatario,$subject, $mensajeCompleto, $header);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='toluca.php'\",1000)</script>";
?>