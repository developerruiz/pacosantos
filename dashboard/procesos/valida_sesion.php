<?php
    
    include '../../conexion.php';
    session_start();

    $usuario        =$_POST['usuario'];
    $contraseña     =$_POST['contraseña'];
    
    $_SESSION['usuario'] = $usuario;

    $consulta_usuario= "SELECT * FROM usuario_reg WHERE email = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta_usuario);

    $session = "SELECT session_estatus FROM usuario_reg WHERE email  = '$usuario';";
    
    if ($result = $conexion->query($session)) {
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["session_estatus"];
            }
        $result->free();
    }  


   

    $filas = mysqli_num_rows($resultado);
    
    echo $filas;
    echo $field1name;

    if($filas>0){
 
        if($field1name == '0'){

            $session_estatus= "UPDATE usuario_reg SET session_estatus = '1' WHERE email = '$usuario' AND contraseña = '$contraseña';";
            $resultado_session = mysqli_query($conexion, $session_estatus);
            header("location:../../formulario_diputacion.php");
            
        }elseif($usuario == 'dguzman@soypacosantos.com' && $field1name == '1' || $usuario == 'dguzman@soypacosantos.com' && $field1name == '0'){
            
            $session_estatus= "UPDATE usuario_reg SET session_estatus = '1' WHERE email = '$usuario' AND contraseña = '$contraseña';";
            $resultado_session = mysqli_query($conexion, $session_estatus);
            header("location:../../formulario_diputacion.php");

        }else{
            echo "<script>alert('Sesion abierta en otro dispositivo'), window.location = '../signin.php'</script>";
        }

     }else{
 
         echo "<script>alert('Favor de cerrar session')</script><script>window.location='../signin.php'</script>";
         // echo "<script>alert('Verifica tu correo o contraseña que este bien escrita');</script><script>window.location='../signin.php'</script>";
     }
 
     mysqli_free_result($resultado);
     mysqli_close($conexion);

   
?>
