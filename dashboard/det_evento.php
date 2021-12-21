<?php 
  include ("../conexion.php");

  $id_evento = $_GET["id"];
  $eventos="SELECT tb_regevento.id_evento,tb_regevento.nomEvento, tb_regevento.nomEvento, tb_regevento.desEvento,tb_regevento.fecha,tb_regevento.ubicacion,tb_regevento.fecha_publicado,tb_regevento.usuario, tb_regevento.id_usuario,tb_regevento.oficina,tb_regevento.imagen, tb_status.status
  FROM tb_regevento
  INNER JOIN tb_status
  ON tb_regevento.status = tb_status.id_status
  WHERE id_evento = '$id_evento'";
  
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
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/slide.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,600&display=swap"
    rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'> -->
  <link rel="stylesheet" href="../css/sidebars.css">


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
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Bienvenido</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">

      <?php require 'complementos/header.php' ?>


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <?php  $resultado = mysqli_query($conexion, $eventos);

while ($row=mysqli_fetch_assoc($resultado)) { ?>
        <div>
            <h1 class="h2">Detalles</h1>
        </div>

          <div class="d-flex  my-2 align-items-center">
            <!-- Button trigger modal -->
            <a href="eventos.php" class="ms-2 fs-3">
              <i class="fas fa-arrow-circle-left me-2"></i>Regresar
            </a>

            <div>
              <a href="editar_evento.php?id=<?php echo $row['id_evento'];?>" class="btn btn-warning ms-2">
                Modificar
              </a>

            </div>

          </div>
       
        </div>

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <!-- <h2>Usuarios registrados</h2> -->
        <div class="table-responsive">
          <table class="table table-striped table-sm">

            
            <tr>
              <td>ID de solicitud</td>
              <td><?php echo $row['id_evento']; ?></td>
            </tr>

            <tr>
              <td>Nombre:</td>
              <td><?php echo $row['nomEvento']; ?></td>
            </tr>
            <tr>
              <td>Fecha en que se creo:</td>
              <td><?php echo $row['fecha_publicado']; ?></td>
            </tr>

            <tr>
              <td>Descripcion:</td>
              <td class="pb-5"><?php echo $row['desEvento']; ?></td>
            </tr>
            <tr>
              <td>Fecha del evento</td>
              <td><?php echo $row['fecha']; ?></td>
            </tr>
            <tr>
              <td>Ubicacion</td>
              <td><?php echo $row['ubicacion']; ?></td>
            </tr>
            <tr>
              <td>Usuario</td>
              <td><?php echo $row['usuario']; ?></td>
            </tr>
            <tr>
              <td>Oficina</td>
              <td><?php echo $row['oficina']; ?></td>
            </tr>
            <tr>
              
            <td>Estatus</td>
              <td><?php echo $row['status']; ?></td>
              </td>
            </tr>
            <tr>
              <td>Imagen</td>
              <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" style="width: 350px;" />
              </td>
            </tr>
          </table>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Evento: <?php echo $row['nomEvento']; ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Realmente quiere eleiminar el evento: <?php echo $row['nomEvento']; ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <a href="evento/eliminar_evento.php?id=<?php echo $row['id_evento'];?>"
                    class="btn btn-danger">Aceptar</a>
                </div>
              </div>
            </div>
          </div>


          <?php } ?>

        </div>
      </main>
    </div>
  </div>


  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
  </script>


  <script src="../js/dashboard.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/sidebars.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>