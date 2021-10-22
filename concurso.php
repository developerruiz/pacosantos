<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Paco Santos || Diputado local distrito 26</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/slide.css">

    <!-- FONT AWENSOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,600&display=swap"
        rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'> -->
    <link rel="stylesheet" href="css/sidebars.css">

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
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
</head>

<body class="halloween">

    <main class="container">

        <?php require 'complementos/header.php'; ?>
        <?php require 'complementos/submenu.php'; ?>

        <div class="mb-4  text-white rounded bg-dark align-items-center d-flex banner-concurso">

        </div>


        <div class="row g-5">
            <div class="col-md-12">

                <!-- <h3 class="pb-4 mb-4 fst-italic border-bottom">
          Gumen Manos Unidas
        </h3> -->

                <article class="blog-post">
                    <h2 class="blog-post-title mb-4 font-paco">
                        CONCURSO CALAVERITAS LITERARIAS 2021
                    </h2>
                    <h6 class="font-paco">
                        Plaza cívica/Pueblo de Santiago Tepelcapa
                    </h6>
                    <hr>
                </article>

                <div class="col-md-12 d-flex flex-wrap">

                    <div class="col-lg-6 col-12 d-flex align-self-center justify-content-center">
                        <div class="img-calaverita">
                            <img src="img/carita-pacosantos-diamuertos.png" alt="carita paco calavera"
                                class="animacion-calavera">
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 p-5">


                        <form name="formulario" id="formulario" action="calaverita.php" method="post"
                            enctype="multipart/form-data" class="background-form p-3">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre Completo</label>
                                        <input type="text" name="nombre" placeholder="Nombre" class="form-control"
                                            required="true">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Edad</label>
                                        <input type="number" name="edad" placeholder="Edad" class="form-control" min="5"
                                            max="99">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Teléfono</label>
                                        <input type="tel" name="telefono" placeholder="telefono" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Titulo</label>
                                        <input type="text" name="titulo" placeholder="Titulo calaverita"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="input-group mt-3">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile01">Archivo PDF</label> <br>
                                    <input type="file" name="my_file" id="my_file" class="custom-file-input" multiple>
                                </div>
                            </div>

                            <div class="col-12 btn-halloween mt-5 mb-5">
                                <button type="submit" class="btn btn-primary">Enviar Archivo Adjunto</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center">
                    <div class="col-lg-8 p-4">
                        <a href="img/flyer.jpeg">
                            <img src="img/flyer.jpeg" alt="" >
                        </a>
                    </div>
                </div>


            </div>


        </div>


    </main>

    <div class="container">
        <footer class="row py-3 my-5 border-top d-flex rounded-3">

            <div class="col-lg-12 d-flex flex-wrap flex-end ">

                <div class="col-md-4 col-12">
                    <div style="width: 70%;">
                        <img src="img/logo-horizontal.png" alt="">
                        <!-- <p>Soy paco santos</p> -->
                    </div>

                    <div>
                        <!-- <h5>Diputado local distrito 26</h5> -->
                    </div>

                    <div class="my-3 ps-3 contacto-footer">
                        <h5 class="color-blue">Contacto</h5>
                        <p><i class="fas fa-phone-alt color-blue me-3"></i><a href="tel:+525539342131">(+52)55 3934
                                2131</a></p>
                        <p><i class="far fa-envelope color-blue me-3"></i><a
                                href="mailto:contacto@soypacosantos.com">contacto@soypacosantos.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-12 ps-3">
                    <h5>Información</h5>
                    <ul class="lista-footer">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="quienes.php">Quien soy</a></li>
                        <li><a href="fideicomiso.php">Fideicomiso</a></li>
                        <li><a href="contacto.php">Contacto</a></li>

                    </ul>
                </div>
                <div class="col-md-4 col-12 ps-3">
                    <h5>Oficinas</h5>
                    <ul class="lista-footer">
                        <li><a href="cuautitlan.php">Cuautitlán Izcalli</a></li>
                        <li><a href="tlalnepantla.php">Tlalnepantla</a></li>
                        <li><a href="tultitlan.php">Tultitlan</a></li>
                        <li><a href="toluca.php">Toluca</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-12 text-center justify-content-center d-flex lista-redes-sociales my-5">

                <li class=""><a href="https://www.facebook.com/SoyPacoSantos"><i
                            class="fab fa-facebook-f color-amarillo"></i></a></li>
                <li class=""><a href="https://www.instagram.com/soypacosantos/"><i
                            class="fab fa-instagram color-rojo"></i></a></li>
                <li class=""><a href="https://twitter.com/soypacosantos"><i class="fab fa-twitter color-azul"></i></a>
                </li>
                <li class=""><a href="https://www.tiktok.com/@soypacosantos?"><i
                            class="fab fa-tiktok color-azul-obscuro"></i></a></li>

            </div>
            <div class="col-12 text-center">
                <h6>&copy;soypacosantos 2021 </h6>
            </div>
        </footer>
    </div>



    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/sidebars.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
</body>

</html>