<?php
include 'conexion.php';

// recepcion de datos y creacion de variables
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$inputDate = $_POST["inputDate"];
$ciudad = $_POST["ciudad"];
$estado = $_POST["estado"];
$municipio = $_POST["municipio"];
$calle = $_POST["calle"];
$cp = $_POST["cp"];


$verificar_email = "SELECT * FROM email WHERE email = '$email'";
$resultadoUsuario = mysqli_query($conexion, $verificar_email);

$filas = mysqli_num_rows($resultadoUsuario);

if (!$filas>0){
    echo'<script type="text/javascript">
        alert("Este correo ya esta registrado");
        window.location.href="index.html";
        </script>';
    exit;
}


// consulta para insertar datos
$insertar = "INSERT INTO tb_usuarios(nombre, email, fecha, ciudad, estado, municipio, calle, cp) VALUES ('$nombre', '$email','$inputDate','$ciudad','$estado','$municipio','$calle','$cp')";
// ejectuar consulta
$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo "<script> setTimeout(\"location.href='regError.html'\",3000)</script>";
}else{
    echo "<script> setTimeout(\"location.href='regExitoso.html'\",3000)</script>";
}

// cerrar conexion
mysqli_close($conexion);

