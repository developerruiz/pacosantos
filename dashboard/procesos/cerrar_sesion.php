<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion = ''){
      
        echo "<scrip>alert('Favor de iniciar sesión')</scrip>;<script>window.location='../signin.php'</script>";  

      die();
      
    }

    session_destroy();
    header("Location: ../signin.php");


?>