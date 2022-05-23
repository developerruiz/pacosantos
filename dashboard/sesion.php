<?php 

    session_start();
    $_session['usuario'] = $usuario;
        header('location:dashboard_home.php')


?>