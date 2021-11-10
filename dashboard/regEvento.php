  <?php 
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
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="#">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">

        <?php require 'complementos/header.php' ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


          <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

          <h2 class="fs-4 fw-bold my-1 p-3">Eventos por oficina</h2>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
           
           
            <form action="proceso_registro.php" method="POST" onsubmit="return validar();" class="formulario-card" enctype="multipart/form-data">
                <div class="form-row formulario-card shadow-sm p-3 bg-white rounded">

                  <?php 
                        date_default_timezone_set("America/Mexico_City");
                        $fecha_actual =date("Y-m-d H:i:s");
                  ?>
                  <!-- 
                  <div class="titulo text-start col-lg-12 m-2">
                    <h1 class="fs-5">Eventos por oficina</h1>
                  </div> -->

                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Nombre del evento</label>
                    <input type="text" class="form-control" name="nombre" id="inputName" placeholder="Nombre" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Descripcion del evento</label>
                    <br>
                    <textarea name="desc-evento" id="" rows=5" placeholder="Descripción del evento"
                      class="form-control"></textarea>
                  </div>

                  <div class="gorm-group col-lg-12 d-none">
                    <label for="datetime">Fecha de solicitud</label>
                    <input type="datetime" name="fecha_actual" id="" class="col-12 form-control"
                      value="<?= $fecha_actual?>" readonly>

                    </label></div>

                  <div class="form-group col-md-4 col-lg-4">
                    <label for="inputDate">Fecha del evento</label>
                    <input type="date" class="form-control" name="inputDate" id="inputDate" required>
                  </div>

                  <div class="form-group col-md-4 col-lg-4">
                    <label for="inputState">Oficina</label>
                    <select id="inputEstado" name="oficina" class="form-control" required>
                      <option selected>Tlalnepantla</option>
                      <option selected>Tultitlán</option>
                      <option selected>Cuautitlán Izcalli</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12 col-lg-12">
                    <label for="inputAddress2">Ubicación</label>
                    <textarea name="ubicacion" id="" cols="30" rows="4" class="form-control"
                      placeholder="Ubicación del evento"></textarea>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="">Imagen</label>
                    <br>
                    <input type="file" name="imagen" id="imagen">
                  </div>

                  <div class="form-group col-lg-12 btn-reg-usr my-3">
                    <input type="submit" value="Registrar evento" class="btn-success btn-lg " id="btn-registrar">

                  </div>
                </div>
              </form>

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