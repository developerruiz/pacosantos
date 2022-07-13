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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-beige {
            background: #f9f9f9 !important;
        }
    </style>

</head>

<body>
      

    <section>
        <div class="container">
            
            <div class="col-12 container">
            <div class="col-12">
                    <div class="col-2 my-4">
                        <img src="img/logo-horizontal.png" alt="" class="">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h5 class="fw-bold">Validar usuario</h5>
                    </div>
                    <div class="my-2">
                        <button id="btnAdd" class="btn btn-success"><i class="fa-solid fa-square-plus"></i> Registrar</button>
                    </div>
                </div>
                <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">
                    <div class="col-lg-6 p-2">
                        <label for="">Nombre</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-lg-3 col-12 p-2">
                        <label for="">Apellido paterno</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-lg-3 col-12 p-2">
                        <label for="">Apellido materno</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col-12 my-2 justify-content-end d-flex">
                    <button id="btnValida" class="btn btn-primary">Validar registro</button>
                </div>
            </div>

 
        </div>
    </section>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="../js/dashboard.js"></script>

    <script>
        document.getElementById('btnAdd').addEventListener('click', function () {
            window.location = 'formulario_diputacion.php'
        })

        document.getElementById('btnValida').addEventListener('click', function () {
            alert("Aun no registrado")
        })
        
    </script>
</body>

</html>