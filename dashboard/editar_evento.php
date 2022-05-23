<?php 
    session_start();

    include ("../conexion.php");

    $id_evento = $_GET["id"];
    $evento="SELECT * FROM tb_regevento WHERE id_evento = '$id_evento'";
    
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
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

        <?php require 'complementos/navbar.php' ?>

    </header>

    <div class="container-fluid">
        <div class="row">


            <?php require 'complementos/header.php'?>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="registrar.php" class="btn btn-sm btn-success">Agregar usuario</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div> -->

                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

                <h2>Editar Evento</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">

                        <div>

                            <?php  $resultado = mysqli_query($conexion, $evento); 
                            while ($row=mysqli_fetch_assoc($resultado)) { ?>

                            <form method="POST" action="evento/proceso_editar.php" enctype="multipart/form-data">
                                <div class="my-3">
                                    <input type="hidden" name="id_evento" class="col-12 form-control"
                                        value="<?php echo $row['id_evento']; ?>">
                                </div>
                                <div class="my-3">
                                    <label class="fw-bold">Nombre del evento</label>
                                    <input type="text" class="col-12 form-control"
                                        value="<?php echo $row['nomEvento']; ?>" name="nombre">
                                </div>

                                <div class="my-3">
                                    <label for="descripcion" class="fw-bold">Descripcion del evento</label>
                                    <br>
                                    <textarea name="desc-evento" id="descripcion" rows=5"
                                        class="form-control"><?php echo $row['desEvento'];?></textarea>
                                </div>

                                <div class="my-3">
                                    <label for="inputDate" class="fw-bold">Fecha del evento</label>
                                    <input type="date" class="form-control" name="inputDate" id="inputDate"
                                        value="<?php echo $row['fecha']?>">
                                </div>

                                <div class="my-3">
                                    <label for="ubicacion" class="fw-bold">Ubicación</label>
                                    <textarea name="ubicacion" id="ubicacion" cols="30" rows="3"
                                        class="form-control"><?php echo $row['ubicacion'];?></textarea>
                                </div>


                                <div class="my-3">

                                    <label for="imagen" class="fw-bold">Imagen</label>
                                    <br>
                                    <a href="#">
                                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"
                                            style="width: 350px;" />
                                    </a>
                                    <a href="editar_imagen.php?id=<?php echo $row['id_evento'];?>" class="btn btn-primary">
                                        Launch static backdrop modal
                                    </a>

                                </div>

                                <div>
                                    <button class="btn btn-success btn-lg" type="submit">Actualizar</button>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </table>

                    <div>
                        <a href="eventos.php">Regresar</a>
                    </div>
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