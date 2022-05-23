<?php 

  include ("conexion.php");
  $usuarios="SELECT * FROM tb_regevento";
  
?>

<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- css personalizado -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
  <!-- css personalizado -->
  <title>Paco Santos || Diputado local distrito 26</title>

</head>

<body>

  <section>
    <div class="justify-content-center d-flex">
      <div class="col-lg-4">
        <div class="container my-3">
          <div class="row">
            <form action="proceso_registro.php" method="POST" onsubmit="return validar();" class="formulario-card">
              <div class="form-row my-3 p-4 formulario-card shadow-sm bg-white rounded">

                  <?php 
                        date_default_timezone_set("America/Mexico_City");
                        $fecha_actual =date("Y-m-d H:i:s");
                  ?>
                
                <div class="titulo text-start col-lg-12 m-2">
                  <h1 class="fs-5">Eventos por oficina</h1>
                </div>

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

                <div class="form-group col-md-12">
                  <label for="inputDate">Fecha del evento</label>
                  <input type="date" class="form-control" name="inputDate" id="inputDate" required>
                </div>

                <div class="form-group col-md-12">
                  <label for="inputState">Oficina</label>
                  <select id="inputEstado" name="oficina" class="form-control" required>

                    <option selected>Tlalnepantla</option>
                    <option selected>Tultitlán</option>
                    <option selected>Cuautitlán Izcalli</option>

                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputAddress2">Ubicación</label>
                  <textarea name="ubicacion" id="" cols="30" rows="4" class="form-control"
                    placeholder="Ubicación del evento"></textarea>
                </div>

                <div class="form-group col-lg-12 btn-reg-usr my-3">
                  <input type="submit" value="Registrar evento" class="btn-success btn-lg " id="btn-registrar">

                </div>
              </div>
            </form>

          </div>

        </div>
      </div>

  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="js/checkMenu.js"></script>
  <script src="js/animacion.js"></script>
  <script src="js/check_registro.js"></script>
</body>

</html>