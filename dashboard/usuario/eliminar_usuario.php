<?php 

include ("../../conexion.php");

$id_usuario = $_GET["id"];
$eliminarUsuario="UPDATE tb_usuarios SET estatus = 3";

$resultado = mysqli_query($conexion, $eliminarUsuario);

if ($eliminarUsuario) {
	header("Location:../usuarios.php");
}else{
	echo"<script>alert('error no se puede usuario');</scrip>";
}
