<?php
    
    include '../../conexion.php';
    session_start();

    $usuario        =$_POST['usuario'];
    $contraseña     =$_POST['contraseña'];
    $_SESSION['usuario'] = $usuario;

    $consulta_usuario= "SELECT * FROM tb_usuarios WHERE email = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta_usuario);

    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        header("location:../home.php");
    }else{
        echo "<script>alert('Favor de iniciar sesión');</script><script>window.location='../signin.php'</script>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>
