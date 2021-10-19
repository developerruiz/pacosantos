<?php

    session_start();

    $usuario=$_POST['email'];
    $contraseña=$_POST['password'];
    $_SESSION['usuario'] = $usuario;

    $conexion = mysqli_connect("localhost","root","","db_pacosantos");
    $consultaUsuario = "SELECT * FROM tb_usuarios WHERE email ='$usuario' and password ='$contraseña'";
    $resultado = mysqli_query($conexion, $consultaUsuario);
    
    $filas=mysqli_num_rows($resultado);

    if ($filas>0) {
        header("Location:panel.php");
    }else{
        echo "<script>
        alert('Usuario o contraseña incorrectos favor de verificar');
        </script>";
        exit;
        echo "<script> setTimeout(\"location.href='login.php'\",1000)</script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>