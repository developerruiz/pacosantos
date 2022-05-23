<?php 
session_start();

$usuario = $_POST['usuario'];
$clave =$_POST['clave'];
 
// conectar a la base de datos

include ("../conexion.php");

$consulta ="SELECT * FROM tb_usuarios WHERE email ='$usuario' and contraseña = '$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0 ) {
    $_SESSION['usuario'] = $usuario;
    header("location:dashboard_home.php");
}
else{
    echo "Error en la autenticación";
}
mysqli_free_result($resultado); 
mysqli_close($conexion);

?>