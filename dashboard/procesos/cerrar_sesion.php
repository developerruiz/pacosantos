<?php
    include '../../conexion.php';
    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];
    $session_estatus= "UPDATE usuario_reg SET session_estatus = '0' WHERE email = '$varsesion'";
    $resultado_session = mysqli_query($conexion, $session_estatus);

    if($varsesion == null || $varsesion = ''){
      
        echo "<scrip>alert('Favor de iniciar sesión')</scrip>;<script>window.location='../signin.php'</script>";  

      die();
      
    }

      session_destroy();
  
      header("Location: ../signin.php");

?>