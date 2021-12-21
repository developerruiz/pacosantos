<?php 
  include ("../conexion.php");
  
  $id                            = $_REQUEST["id_evento"];
  $imagen                       = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
  $insertar = "UPDATE tb_reevento 
  SET imagen = '$imagen' 
  WHERE id_evento = '$id'";

  $resultado = $conexion->query($insertar);

  if ($resultado) {
    echo "<script>alert('Evento registrado con éxito'); window.location='/soypacosantos/dashboard/regEvento.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }