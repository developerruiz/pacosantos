<?php 

include ("../../conexion.php");

$id_evento = $_GET["id"];
$eliminar_evento="UPDATE tb_regevento SET status = 2 WHERE id_evento = '$id_evento'";

$resultado = mysqli_query($conexion, $eliminar_evento);

if ($eliminar_evento) {
	header("Location:../eventos.php");
}else{
	echo"<script>alert('error no se puede usuario');</scrip>";
}
