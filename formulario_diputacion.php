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
            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-lg-2 my-4">
                        <img src="img/logo-horizontal.png" alt="" class="w-100">
                    </div>
                </div>
            </div>


            <form action="registrar_dip.php" method="POST" enctype="multipart/form-data" class="p-2">
                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Datos personales</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Nombre</label>
                            <input type="text" id="" class="form-control" name="nombre" required>
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Apellido paterno</label>
                            <input type="text" id="" class="form-control" name="apellido_p" required>
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Apellido materno</label>
                            <input type="text" id="" class="form-control" name="apellido_m" required>
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Edad</label>
                            <input type="number" id="quantity" min="18" max="99" class="form-control" name="edad"
                                placeholder="18 - 99" required>
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Estado civil</label>
                            <input type="text" id="" class="form-control" name="edo_civil">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Dirección</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">
                        <div class="col-lg-6 col-12  p-2">
                            <label for="">Municipio</label>
                            <input type="text" id="" class="form-control" name="municipio">
                        </div>
                        <div class="col-lg-6 col-12  p-2">
                            <label for="">Distrito</label>
                            <select name="distrito" class="form-select" size="1">

                                <option selected="">Distrito...</option>
                                <option value="Jilotepec">Jilotepec</option>
                                <option value="Teoloyucan">Teoloyucan</option>
                                <option value="Atlacomulco">Atlacomulco</option>
                                <option value="Nicolás Romero">Nicolás Romero</option>
                                <option value="Teotihuacán de Arista">Teotihuacán de Arista</option>
                                <option value="Coacalco">Coacalco</option>
                                <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
                                <option value="Tultitlán">Tultitlán</option>
                                <option value="San Felipe del Progreso">San Felipe del Progreso</option>
                                <option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
                                <option value="Ixtapaluca">Ixtapaluca</option>
                                <option value="Ciudad López Mateos">Ciudad López Mateos</option>
                                <option value="Huixquilucan de Degollado">Huixquilucan de Degollado</option>
                                <option value="Tlalnepantla de Baz">Tlalnepantla de Baz</option>
                                <option value="Nezahualcóyotl">Nezahualcóyotl</option>
                                <option value="Amecameca de Juárez">Amecameca de Juárez</option>
                                <option value="Naucalpan de Juárez">Naucalpan de Juárez</option>
                                <option value="Lerma">Lerma</option>
                                <option value="Chimalhuacán">Chimalhuacán</option>
                                <option value="Toluca de Lerdo">Toluca de Lerdo</option>
                                <option value="Metepec">Metepec</option>
                                <option value="Zumpango de Ocampo">Zumpango de Ocampo</option>
                                <option value="Valle de Chalco Solidaridad">Valle de Chalco Solidaridad</option>
                                <option value="Chalco de Díaz Covarrubias">Chalco de Díaz Covarrubias</option>
                                <option value="Tenancingo">Tenancingo</option>
                                <option value="Tejupilco">Tejupilco</option>
                                <option value="Cuautitlán">Cuautitlán</option>
                                <option value="Texcoco de Mora">Texcoco de Mora</option>
                                <option value="La Paz">La Paz</option>
                                <option value="Zinacantepec">Zinacantepec</option>
                                <option value="Tecámac de Felipe Villanuevad​">Tecámac de Felipe Villanuevad​</option>

                            </select>
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Colonia</label>
                            <input type="text" id="" class="form-control" name="colonia">
                        </div>
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Calle y numero</label>
                            <input type="text" id="quantity" min="18" max="99" class="form-control" name="calle_numero">
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Zona</label>
                            <input type="text" id="" class="form-control" name="zona">
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Sección</label>
                            <input type="text" id="" class="form-control" name="seccion">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Grado de urbanización </h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">

                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Sección</label>
                            <select name="seccion_grado_urbanizacion" id="" class="form-select">

                                <option value="">U. hab</option>
                                <option value="">Zona rural</option>
                                <option value="">Zona semi rural</option>

                            </select>
                        </div>

                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Medios de contacto</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Email</label>
                            <input type="mail" class="form-control" placeholder="@" name="email">
                        </div>

                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Teléfono</label>
                            <input type="number" class="form-control" placeholder="10 digitos" name="telefono">
                        </div>

                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Móvil</label>
                            <input type="number" class="form-control" placeholder="10 digitos" name="movil">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Descripción socioeconómica</h5>
                    </div>

                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">

                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Nivel educativo</label>
                            <select id="" class="form-select" name="nivel_educativo">
                                <option value="">Primaria</option>
                                <option value="">Secundaria</option>
                                <option value="">Medio superior</option>
                                <option value="">Superior</option>
                                <option value="">Posgrado</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Ocupación</label>
                            <input type="text" class="form-control" name="ocupacion">
                        </div>

                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-12">
                        <h5 class="fw-bold">CV político</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">

                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Cargos públicos desempeñados</label>
                            <input type="text" class="form-control" name="cargos_publicos">
                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <label for="">Periodo</label>
                            <input type="text" class="form-control" name="periodo">
                        </div>
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Lugar</label>
                            <input type="text" class="form-control" placeholder="colonia, municipio" name="lugar">
                        </div>
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Niv. De Influencia (Tot. de capital político)</label>
                            <input type="text" class="form-control" name="influencia">
                        </div>
                    </div>

                </div>




                <div class="row mb-3">

                    <div class="col-12">
                        <h5 class="fw-bold">Asociación religiosa </h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">


                        <div class="col-lg-6 col-12 p-2">

                            <select id="" class="form-select" name="asoc_religiosa">

                                <option value="">católica</option>
                                <option value="">Cristiana</option>
                                <option value="">Evangelista</option>
                                <option value="">Evangelista</option>

                            </select>


                        </div>
                        <div class="col-lg-3 col-12 p-2">
                            <input type="text" placeholder="Otra" class="form-control" name="otra">
                        </div>
                    </div>
                </div>


                <div class="row mb-3">

                    <div class="col-12">
                        <h5 class="fw-bold">Autoridad educativa</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">


                        <div class="col-lg-6 col-12 p-2">
                            <label for="">
                                Tipo de nivel educativo
                            </label>
                            <select id="" class="form-select" name="tipo_nivel_educativo">

                                <option value="">Primaria</option>
                                <option value="">Secundaria</option>
                                <option value="">Media superior</option>
                                <option value="">Superior</option>


                            </select>

                        </div>
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Nombre del centro educativo</label>
                            <input type="text" placeholder="" class="form-control" name="nombre_cto_edu">
                        </div>

                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Dirección</label>
                            <input type="text" placeholder="Calle, no. Colonia" class="form-control"
                                name="direccion_cto_educativo">
                        </div>

                        <div class="col-lg-3 col-12 p-2">
                            <label for=""></label>
                            <select id="" class="form-select" name="privada_publica">
                                <option value="">Privada</option>
                                <option value="">Pública</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-12">
                        <h5 class="fw-bold">Asociación civil</h5>
                    </div>

                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">

                        <div class="col-lg-6 col-12 p-2">
                            <label for="">
                                Tipo de actividad
                            </label>
                            <input type="text" placeholder="" class="form-control" name="tipo_actividad">

                        </div>
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Nombre</label>
                            <input type="text" placeholder="" class="form-control" name="nombre_asociacion">
                        </div>

                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Dirección</label>
                            <input type="text" placeholder="Calle, no. Colonia" class="form-control"
                                name="direccion_asociacion">
                        </div>

                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-12">
                        <h5 class="fw-bold">Autoridades Auxiliares Mpales. </h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">

                        <div class="col-lg-6 col-12 p-2">
                            <label for="">
                                Consejos de participación
                            </label>
                            <input type="text" placeholder="" class="form-control" name="consejos">

                        </div>
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Delegados </label>
                            <input type="text" placeholder="" class="form-control" name="delegados">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-12">
                        <h5 class="fw-bold">Lider comunitario natural</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">
                        <div class="col-lg-6 col-12 p-2">
                            <label for="">Nombre</label>
                            <input type="text" placeholder="" class="form-control" name="nombre_lider">
                        </div>
                    </div>



                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Filiacion politica</h5>
                    </div>
                    <div class="col-12 d-flex p-4 border rounded flex-wrap bg-beige">
                        <div class="col-lg-6 col-12 p-2">
                            <select name="filiacion_politica" id="" name="filiacion" class="form-select">
                                <option value="Amarrillo">Amarrillo</option>
                                <option value="Rojo">Rojo</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="text-left">
                        <button class="btn btn-primary btn-lg" type="submit">Registrar</button>
                    </div>
                </div>

            </form>


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

</body>

</html>