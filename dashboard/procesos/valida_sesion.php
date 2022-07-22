<?php
    
    include '../../conexion.php';
    session_start();

    $usuario        =$_POST['usuario'];
    $contraseña     =$_POST['contraseña'];
    $_SESSION['usuario'] = $usuario;

    $consulta_usuario= "SELECT * FROM usuario_reg WHERE email = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta_usuario);

    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        
        $query_session = "UPDATE usuario_reg SET sesion_estatus = 1, WHERE email = '$usuario' AND contraseña = '$contraseña';";
        $estatus_session = mysqli_query($conexion, $query_session);

        header("location:../../formulario_diputacion.php");
    }else{
        echo "<script>alert('Favor de iniciar sesión');</script><script>window.location='../signin.php'</script>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
?>

