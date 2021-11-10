  <?php 
  include ("../conexion.php");
  
  $nombre                       = $_POST["nombre"];
  $correo                       = $_POST["email"];
  $contraseña                   = $_POST["contraseña"];
  $oficina                      = $_POST["oficina"];
  $fecha_registro               = $_POST['fecha_actual'];
  
  $insertar = "INSERT INTO tb_usuarios(nombre, email, oficina, contraseña, fecha_actual) VALUES
  ('$nombre','$correo','$oficina','$contraseña','$fecha_registro')";

  $resultado = mysqli_query($conexion, $insertar);

  if ($resultado) {
    echo "<script>alert('Usuario registrado con éxito'); window.location='/soypacosantos/dashboard/regUsuario.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  