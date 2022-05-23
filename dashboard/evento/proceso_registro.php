  <?php 
  include ("../conexion.php");
  
  $nombre                       = $_POST["nombre"];
  $descripcion                  = $_POST["desc-evento"];
  $fecha_actual                 = $_POST["fecha_actual"];
  $fecha_evento                 = $_POST["inputDate"];
  $oficina                      = $_POST["oficina"];
  $ubicacion                    = $_POST["ubicacion"];

  $imagen                       = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
  $insertar = "INSERT INTO tb_regevento(nomEvento, desEvento, fecha, ubicacion,fecha_publicado,usuario, id_usuario, oficina, imagen, estatus) VALUES
  ('$nombre','$descripcion','$fecha_evento','$ubicacion','$fecha_actual','','','$oficina', '$imagen', '1')";

  $resultado = $conexion->query($insertar);

  if ($resultado) {
    echo "<script>alert('Evento registrado con éxito'); window.location='/soypacosantos/dashboard/regEvento.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }