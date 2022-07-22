<?php 
   session_start();
    //  error_reporting(0);
    header("Content-Type: text/html;charset=utf-8");
    
    include '../conexion.php';
    include '../conexion2.php';
    $varsesion = $_SESSION['usuario'];

    $sql = "SELECT * FROM usuario_reg WHERE email  = '$varsesion'";
    if ($result = $conexion->query($sql)) {
          while ($row = $result->fetch_assoc()) {
              $field1name = $row["id_usuario_reg"];
          }
      $result->free();
    }  

    if  ( $field1name == 7 ){
      $sql = "SELECT tb_reg_dipu.id_reg, usuario_reg.id_usuario_reg, usuario_reg.nombre_usuario, tb_reg_dipu.fecha_actual, tb_reg_dipu.id_usuario_reg, tb_reg_dipu.fecha_nacimiento, tb_reg_dipu.cap_movilizacion, tb_reg_dipu.nombre, tb_reg_dipu.apellido_p, tb_reg_dipu.apellido_m, tb_reg_dipu.edad, tb_reg_dipu.edo_civil, tb_reg_dipu.municipio, tb_reg_dipu.distrito, tb_reg_dipu.colonia, tb_reg_dipu.calle_numero, tb_reg_dipu.zona, tb_reg_dipu.seccion, tb_reg_dipu.seccion_grado_urbanizacion, tb_reg_dipu.email, tb_reg_dipu.telefono, tb_reg_dipu.movil, tb_reg_dipu.nivel_educativo, tb_reg_dipu.ocupacion, tb_reg_dipu.cargos_publicos, tb_reg_dipu.periodo, tb_reg_dipu.lugar, tb_reg_dipu.influencia, tb_reg_dipu.asoc_religiosa, tb_reg_dipu.otra, tb_reg_dipu.tipo_nivel_educativo, tb_reg_dipu.nombre_cto_edu, tb_reg_dipu.direccion_cto_educativo, tb_reg_dipu.privada_publica, tb_reg_dipu.tipo_actividad, tb_reg_dipu.nombre_asociacion, tb_reg_dipu.direccion_asociacion, tb_reg_dipu.consejos, tb_reg_dipu.delegados, tb_reg_dipu.nombre_lider, tb_reg_dipu.filiacion_politica, tb_reg_dipu.tipo_filiacion, tb_reg_dipu.filiacion_otra, tb_reg_dipu.evento_pacosantos, tb_reg_dipu.detalle_event_paco, tb_reg_dipu.envento_veces 
      FROM tb_reg_dipu 
      INNER JOIN usuario_reg ON usuario_reg.id_usuario_reg = tb_reg_dipu.id_usuario_reg
      ORDER BY tb_reg_dipu.id_reg DESC;";
    }else{
      $sql = "SELECT tb_reg_dipu.id_reg, usuario_reg.id_usuario_reg, usuario_reg.nombre_usuario, tb_reg_dipu.fecha_actual, tb_reg_dipu.id_usuario_reg, tb_reg_dipu.fecha_nacimiento, tb_reg_dipu.cap_movilizacion, tb_reg_dipu.nombre, tb_reg_dipu.apellido_p, tb_reg_dipu.apellido_m, tb_reg_dipu.edad, tb_reg_dipu.edo_civil, tb_reg_dipu.municipio, tb_reg_dipu.distrito, tb_reg_dipu.colonia, tb_reg_dipu.calle_numero, tb_reg_dipu.zona, tb_reg_dipu.seccion, tb_reg_dipu.seccion_grado_urbanizacion, tb_reg_dipu.email, tb_reg_dipu.telefono, tb_reg_dipu.movil, tb_reg_dipu.nivel_educativo, tb_reg_dipu.ocupacion, tb_reg_dipu.cargos_publicos, tb_reg_dipu.periodo, tb_reg_dipu.lugar, tb_reg_dipu.influencia, tb_reg_dipu.asoc_religiosa, tb_reg_dipu.otra, tb_reg_dipu.tipo_nivel_educativo, tb_reg_dipu.nombre_cto_edu, tb_reg_dipu.direccion_cto_educativo, tb_reg_dipu.privada_publica, tb_reg_dipu.tipo_actividad, tb_reg_dipu.nombre_asociacion, tb_reg_dipu.direccion_asociacion, tb_reg_dipu.consejos, tb_reg_dipu.delegados, tb_reg_dipu.nombre_lider, tb_reg_dipu.filiacion_politica, tb_reg_dipu.tipo_filiacion, tb_reg_dipu.filiacion_otra, tb_reg_dipu.evento_pacosantos, tb_reg_dipu.detalle_event_paco, tb_reg_dipu.envento_veces 
    FROM tb_reg_dipu 
    INNER JOIN usuario_reg ON usuario_reg.id_usuario_reg = tb_reg_dipu.id_usuario_reg 
    WHERE tb_reg_dipu.id_usuario_reg = '$field1name'
    ORDER BY tb_reg_dipu.id_reg DESC;
    ";
    }
    

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    if($varsesion == null || $varsesion = ''){
      echo "<script>alert('Favor de iniciar sesión');</script><script>window.location='signin.php'</script>";
    die();
    }

  ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Fontawensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_dashboard.css">

</head>

<body>

    <?php include 'complementos/header.php'?>


    <div class="container-fluid">
        <div class="row">
            <?php include 'complementos/sidebar.php'?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">

                    <div class="btn-group d-flex justify-content-end">

                        <!-- <a href="../formulario_diputacion.php">
                        <button type="button" class="btn btn-success text-white"><i class="fa-solid fa-user-plus"></i>
                            Agregar nuevo registro</button>
                        </a> -->

                        <?php

                          if ( $field1name == 7 ){
                            echo "<a href='procesos/excel.php'><button class='btn btn-lg btn-success'>Exportar a archivo xls </button></a>";
                          }

                        ?>

                        
                    </div>

                </div>

                <h2>Registros</h2>

                <div class="table-responsive">
                    <table class="table table-striped table table-hover">

                        <tr>
                            <th>Nombre</th>
                            <th>apellido_p</th>
                            <th>apellido_m</th>
                            <th>edad</th>
                            <th>email</th>
                            <th>telefono</th>
                            <th>fecha_actual</th>
                            <th>id_usuario_reg</th>
                            <th>fecha_nacimiento</th>
                            <th>cap_movilizacion</th>
                            <th>nombre</th>
                            <th>apellido_p</th>
                            <th>apellido_m</th>
                            <th>edad</th>
                            <th>edo_civil</th>
                            <th>municipio</th>
                            <th>distrito</th>
                            <th>colonia</th>
                            <th>calle_numero</th>
                            <th>zona</th>
                            <th>seccion</th>
                            <th>seccion_grado_urbanizacion</th>
                            <th>email</th>
                            <th>telefono</th>
                            <th>movil</th>
                            <th>nivel_educativo</th>
                            <th>ocupacion</th>
                            <th>cargos_publicos</th>
                            <th>periodo</th>
                            <th>lugar</th>
                            <th>influencia</th>
                            <th>asoc_religiosa</th>
                            <th>otra</th>
                            <th>tipo_nivel_educativo</th>
                            <th>nombre_cto_edu</th>
                            <th>direccion_cto_educativo</th>
                            <th>privada_publica</th>
                            <th>tipo_actividad</th>
                            <th>nombre_asociacion</th>
                            <th>direccion_asociacion</th>
                            <th>consejos</th>
                            <th>delegados</th>
                            <th>nombre_lider</th>
                            <th>filiacion_politica</th>
                            <th>tipo_filiacion</th>
                            <th>filiacion_otra</th>
                            <th>evento_pacosantos</th>
                            <th>detalle_event_paco</th>
                            <th>envento_veces</th>
                        </tr>

                        <tr>
                            <?php foreach($resultado as $producto):?>

                            <td><?php echo $producto['nombre']; ?></td>
                            <td><?php echo $producto['apellido_p']; ?></td>
                            <td><?php echo $producto['apellido_m']; ?></td>
                            <td><?php echo $producto['edad']; ?></td>
                            <td><?php echo $producto['email']; ?></td>
                            <td><?php echo $producto['telefono']; ?></td>
                            <td><?php echo $producto['fecha_actual'];?></td>
                            <td><?php echo $producto['nombre_usuario'];?></td>
                            <td><?php echo $producto['fecha_nacimiento'];?></td>
                            <td><?php echo $producto['cap_movilizacion'];?></td>
                            <td><?php echo $producto['nombre'];?></td>
                            <td><?php echo $producto['apellido_p'];?></td>
                            <td><?php echo $producto['apellido_m'];?></td>
                            <td><?php echo $producto['edad'];?></td>
                            <td><?php echo $producto['edo_civil'];?></td>
                            <td><?php echo $producto['municipio'];?></td>
                            <td><?php echo $producto['distrito'];?></td>
                            <td><?php echo $producto['colonia'];?></td>
                            <td><?php echo $producto['calle_numero'];?></td>
                            <td><?php echo $producto['zona'];?></td>
                            <td><?php echo $producto['seccion'];?></td>
                            <td><?php echo $producto['seccion_grado_urbanizacion'];?></td>
                            <td><?php echo $producto['email'];?></td>
                            <td><?php echo $producto['telefono'];?></td>
                            <td><?php echo $producto['movil'];?></td>
                            <td><?php echo $producto['nivel_educativo'];?></td>
                            <td><?php echo $producto['ocupacion'];?></td>
                            <td><?php echo $producto['cargos_publicos'];?></td>
                            <td><?php echo $producto['periodo'];?></td>
                            <td><?php echo $producto['lugar'];?></td>
                            <td><?php echo $producto['influencia'];?></td>
                            <td><?php echo $producto['asoc_religiosa'];?></td>
                            <td><?php echo $producto['otra'];?></td>
                            <td><?php echo $producto['tipo_nivel_educativo'];?></td>
                            <td><?php echo $producto['nombre_cto_edu'];?></td>
                            <td><?php echo $producto['direccion_cto_educativo'];?></td>
                            <td><?php echo $producto['privada_publica'];?></td>
                            <td><?php echo $producto['tipo_actividad'];?></td>
                            <td><?php echo $producto['nombre_asociacion'];?></td>
                            <td><?php echo $producto['direccion_asociacion'];?></td>
                            <td><?php echo $producto['consejos'];?></td>
                            <td><?php echo $producto['delegados'];?></td>
                            <td><?php echo $producto['nombre_lider'];?></td>
                            <td><?php echo $producto['filiacion_politica'];?></td>
                            <td><?php echo $producto['tipo_filiacion'];?></td>
                            <td><?php echo $producto['filiacion_otra'];?></td>
                            <td><?php echo $producto['evento_pacosantos'];?></td>
                            <td><?php echo $producto['detalle_event_paco'];?></td>
                            <td><?php echo $producto['envento_veces'];?></td>

                        </tr>

                        <?php endforeach ?>
                    </table>

                </div>
            </main>
        </div>
    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="../js/dashboard.js"></script>
</body>

</html>