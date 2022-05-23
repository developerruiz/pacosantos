<?php 
  include ("../../conexion.php");

$id_evento                    = $_POST["id_evento"];
$nombre                       = $_POST["nombre"];
$descripcion                  = $_POST["desc-evento"];
$fecha_evento                 = $_POST["inputDate"];
$ubicacion                    = $_POST["ubicacion"];


//ACTUALIZAR LOS DATOS
$actualizar = "UPDATE tb_regevento SET nomEvento='$nombre', desEvento = '$descripcion', fecha= '$fecha_evento', ubicacion = '$ubicacion'
WHERE id_evento = '$id_evento'";

$resultado = mysqli_query($conexion, $actualizar);

  if ($resultado) {
    echo "<script>alert('evento actualizado'); window.location='/soypacosantos/dashboard/eventos.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  