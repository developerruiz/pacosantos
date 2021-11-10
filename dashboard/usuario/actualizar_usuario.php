<?php 
  include ("../../conexion.php");

$id_usuario                 = $_POST["id_usuario"];
$nombre                     = $_POST["nombre"];
$email                      = $_POST["email"];
$oficina                    = $_POST["oficina"];
$contraseña                 = $_POST["contraseña"];

//ACTUALIZAR LOS DATOS
$actualizar = "UPDATE tb_usuarios 
SET nombre='$nombre', email='$email', oficina='$oficina', contraseña='$contraseña'  
WHERE id_usuario = '$id_usuario'";

$resultado = mysqli_query($conexion, $actualizar);

  if ($resultado) {
    echo "<script>alert('Usuario actualizado'); window.location='/soypacosantos/dashboard/usuarios.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  