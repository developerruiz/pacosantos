<?php 
   session_start();
    //  error_reporting(0);
    include '../conexion.php';
    
    include '../conexion2.php';

    $sql = "SELECT * FROM tb_reg_dipu";
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $varsesion = $_SESSION['usuario'];
    
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
          <h1 class="h2">👋 Hola, Daniel Pulido</h1>
          <!-- <?php echo $_SESSION['usuario']?> -->

          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
          </div>
        </div>
        <div class="col-12 border-bottom">
          <ul class="list-unstyled d-flex">
            <li class="mx-3">Ver todo</li>
            <li class="mx-3">Lorem, ipsum.</li>
            <li class="mx-3">Lorem, ipsum.</li>
          </ul>
        </div>
        <div class="col-12 d-flex">

          <div class="col-8 p-2">
            <canvas class="my-4 w-100" id="myChart" width="900" height="400"></canvas>
          </div>

          <div class="col-4 py-4 pe-2" style="height: 400px; overflow-y: auto;">
            <div class="col-12 d-flex justify-content-between mb-4">

              <div>
                <h6>Usuarios</h6>
              </div>

              <div>
                <a href="">
                  <h6>Ver todos</h6>
                </a>
              </div>

            </div>

            <div class="col-12 mb-2 ">

              <div class="bg-light d-flex col-12 border rounded-3 p-3 align-items-center mb-3">
                <div class="col-4">
                  <img src="../img/usr-icon.png" alt="" class="w-100">
                </div>

                <div class="col-8">
                  <div class="card-title">
                    <h3>Ivan Ruiz</h3>
                    <a href="mailto:iruiz@frasangroup.com">Enviar correo electrónico</a>
                  </div>
                </div>
              </div>

              <div class="bg-light d-flex col-12 border rounded-3 p-3 align-items-center mb-3">
                <div class="col-4">
                  <img src="../img/usr-icon.png" alt="" class="w-100">
                </div>

                <div class="col-8">
                  <div class="card-title">
                    <h3>Ivan Ruiz</h3>
                    <a href="mailto:iruiz@frasangroup.com">Enviar correo electrónico</a>
                  </div>
                </div>
              </div>

              <div class="bg-light d-flex col-12 border rounded-3 p-3 align-items-center mb-3">
                <div class="col-4">
                  <img src="../img/usr-icon.png" alt="" class="w-100">
                </div>

                <div class="col-8">
                  <div class="card-title">
                    <h3>Ivan Ruiz</h3>
                    <a href="mailto:iruiz@frasangroup.com">Enviar correo electrónico</a>
                  </div>
                </div>
              </div>

            </div>




          </div>

        </div>

        <h2>Section title</h2>

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


        <table class="table table-striped table-sm">
          <h2 class="fs-2 fw-bold fuente-antro">Informacion del cliente</h2>

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

          <?php foreach($resultado as $producto):?>

          <tr>

            <td>

              <div class="">
                <i class="fa-solid fa-user p-2 fs-3 bg-skyblue color-blue rounded top-0"></i>
              </div>
            </td>

            <td><?php echo $producto['nombre']; ?></td>
            <td><?php echo $producto['apellido_p']; ?></td>
            <td><?php echo $producto['apellido_m']; ?></td>
            <td><?php echo $producto['edad']; ?></td>
            <td><?php echo $producto['email']; ?></td>
            <td><?php echo $producto['telefono']; ?></td>

           
          </tr>

          <?php endforeach ?>
        </table>



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