<?php 
  include ("../../conexion.php");
  
  $id_evento                    = $_POST["id_evento"];
  $nombre                       = $_POST["nombre"];
  $descripcion                  = $_POST["descripcion"];
  $fecha_evento                 = $_POST["inputDate"];
  $ubicacion                    = $_POST["ubicacion"];

  $imagen                       = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
  $insertar = "UPDATE tb_regevento
  SET nombre='$nombre', desEvento='$descripcion', fecha = '$fecha_evento', ubicacion = '$ubicacion'
  WHERE id_evento = '$id_evento'";


    $resultado = $conexion->query($insertar);


  if ($resultado) {
    echo "<script>window.location='/soypacosantos/dashboard/eventos.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  
  ?>