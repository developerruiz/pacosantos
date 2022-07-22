<?php 
  
  
    //  error_reporting(0);
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

      $sql = "SELECT * FROM tb_reg_dipu;";

    }else{
      echo "<script>alert('No tienes permisos para ver los registros')</script>";
      echo "<script>window.location = '../formulario_diputacion.php'</script>";

    }

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    
    
    $session_us = "SELECT session_estatus FROM usuario_reg WHERE email  = '$varsesion';";
    
    $sentencia = $pdo->prepare($session_us);
    $sentencia->execute();
    $querysess = $sentencia->fetchAll();

    if ($result = $conexion->query($querysess)) {
            while ($row = $result->fetch_assoc()) {
                $sess = $row["session_estatus"];
            }
        $result->free();
    } 

    if($varsesion == null || $varsesion = '' || $sess == '1'){
      echo "<script>alert('Favor de iniciar sesión o la sesión ya esta iniciada en otro dispositivo');</script><script>window.location='signin.php'</script>";
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


  <!-- fontawensome -->
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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
          <h1 class="h3">👋 Hola, " <?php echo $usuario['nombre_usuario']?> "</h1>
        </div>
        <div class="col-12 border-bottom">
          <!-- <ul class="list-unstyled d-flex">
            <li class="mx-3">Ver todo</li>
            <li class="mx-3">Lorem, ipsum.</li>
            <li class="mx-3">Lorem, ipsum.</li>
          </ul> -->
        </div>
        <div class="col-12 d-flex">

          <!-- <div class="col-8 p-2">
                        <canvas class="my-4 w-100" id="myChart" width="900" height="400"></canvas>
                    </div> -->

          <div class="col-12 py-4 pe-2" style="">
            <div class="col-12 d-flex justify-content-between mb-4">

              <div>
                <h4>Usuarios</h4>
              </div>
            </div>

            <div class="col-12 mb-2 d-flex flex-wrap">
              <?php 
                                $lista_usuarios = "SELECT * FROM usuario_reg";
                                $sentencia = $pdo->prepare($lista_usuarios);
                                $sentencia->execute();
                                $resultado_list_us = $sentencia->fetchAll();  
                ?>

              <?php foreach($resultado_list_us as $all_users): ?>

              <div class=" d-flex flex-wrap col-lg-3 col-sm-6 col-12 col-md-6 align-items-center p-2">

                <div class="col-12 bg-light card p-3">

                  <div class="card-title">

                    <?php 
                                                            
                      $id_usuario =  $all_users['id_usuario_reg'];
                      $numRows = "SELECT COUNT(id_usuario_reg) FROM tb_reg_dipu WHERE id_usuario_reg = '$id_usuario'";
                      $sentencia = $pdo->prepare($numRows);
                      $sentencia->execute();
                      $countRows = $sentencia->fetchAll();
                                        
                      ?>

                    <?php foreach ($countRows as $rows):?>
                    <h3><?php echo  $rows['COUNT(id_usuario_reg)'] ?></h3>
                    <h6><?php echo  $all_users['nombre_usuario']?></h6>
                    <?php endforeach ?>


                    <!-- <a href="mailto:<?php echo $all_users['email']?>">Enviar correo electrónico</a> -->
                  </div>
                </div>

              </div>
              <?php endforeach ?>







            </div>

          </div>

          <!-- <h2>Section title</h2> -->

          <!-- <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>placeholder</td>
                <td>irrelevant</td>
                <td>visual</td>
                <td>layout</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>data</td>
                <td>rich</td>
                <td>dashboard</td>
                <td>tabular</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>information</td>
                <td>placeholder</td>
                <td>illustrative</td>
                <td>data</td>
              </tr>
              <tr>
                <td>1,004</td>
                <td>text</td>
                <td>random</td>
                <td>layout</td>
                <td>dashboard</td>
              </tr>
              <tr>
                <td>1,005</td>
                <td>dashboard</td>
                <td>irrelevant</td>
                <td>text</td>
                <td>placeholder</td>
              </tr>
              <tr>
                <td>1,006</td>
                <td>dashboard</td>
                <td>illustrative</td>
                <td>rich</td>
                <td>data</td>
              </tr>
              <tr>
                <td>1,007</td>
                <td>placeholder</td>
                <td>tabular</td>
                <td>information</td>
                <td>irrelevant</td>
              </tr>
              <tr>
                <td>1,008</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
              </tr>
              <tr>
                <td>1,009</td>
                <td>placeholder</td>
                <td>irrelevant</td>
                <td>visual</td>
                <td>layout</td>
              </tr>
              <tr>
                <td>1,010</td>
                <td>data</td>
                <td>rich</td>
                <td>dashboard</td>
                <td>tabular</td>
              </tr>
              <tr>
                <td>1,011</td>
                <td>information</td>
                <td>placeholder</td>
                <td>illustrative</td>
                <td>data</td>
              </tr>
              <tr>
                <td>1,012</td>
                <td>text</td>
                <td>placeholder</td>
                <td>layout</td>
                <td>dashboard</td>
              </tr>
              <tr>
                <td>1,013</td>
                <td>dashboard</td>
                <td>irrelevant</td>
                <td>text</td>
                <td>visual</td>
              </tr>
              <tr>
                <td>1,014</td>
                <td>dashboard</td>
                <td>illustrative</td>
                <td>rich</td>
                <td>data</td>
              </tr>
              <tr>
                <td>1,015</td>
                <td>random</td>
                <td>tabular</td>
                <td>information</td>
                <td>text</td>
              </tr>
            </tbody>
          </table>
        </div> -->


          <!-- <table class="table table-striped table-sm">
          <h2 class="fs-2 fw-bold fuente-antro">Informacion del Registro</h2>

          <thead style="border-bottom: 2px solid #499eb2 ;">
            <tr>

              <th colspan="2" class="color-purple">Nombre</th>
              <th class="color-purple">Apellito paterno</th>
              <th class="color-purple">Apellido materno</th>
              <th class="color-purple">edad</th>
              <th class="color-purple">Email</th>
              <th class="color-purple">Teléfono</th>



            </tr>
          </thead>

   
        </table> -->



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