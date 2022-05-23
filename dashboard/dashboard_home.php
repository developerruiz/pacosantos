  <?php 
  session_start();
  error_reporting(0);

  $varsesion = $_SESSION['usuario'];
  
  if ($varsesion == null || $varsesion = '') {
    echo 'Favor de iniciar sesión';
    die();   
  }

  include ("../conexion.php");
  $usuarios="SELECT * FROM tb_usuarios";

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
     
   <?php require 'complementos/navbar.php'?>
   
    </header>

    <div class="container-fluid">
      <div class="row">


      <?php require 'complementos/header.php' ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


          <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

          <h2 class="fs-4 my-3">Eventos por oficina</h2>

          <div class="table-responsive">
            <table class="table table-striped table-sm">

              <div class="col-lg-12 d-flex flex-wrap">
                <div class="card col-3 m-2">
                
                  <div class="card-body">
                    <div class="card-title">
                      Eventos
                    </div>

                  </div>
                  <div class="card-footer">
                    <a href="">Ver más</a>
                  </div>

                </div>
                <div class="card col-3 m-2">
                  <div class="card-body">
                    <div class="card-title">
                      Usuarios
                    </div>

                  </div>
                  <div class="card-footer">
                    <a href="">Ver más</a>
                  </div>
                </div>
                <div class="card col-3 m-2">
                  <div class="card-body">
                    <div class="card-title">
                      Solicitudes
                    </div>

                  </div>
                  <div class="card-footer">
                    <a href="">Ver más</a>
                  </div>
                </div>

              </div>

            </table>
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