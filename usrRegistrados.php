<!doctype html>
<html lang="en">

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
  <!-- css personalizado -->
  <title>Ixmucane Compra o Vende tus productos</title>
</head>

<body>

  <section>
    <div class="row justify-content-center">
        <div class="col-lg-4 d-block">
            <div class="container my-5">

               

                <form  action="registrar.php" method="POST" onsubmit="return validar();" class="formulario-card">
                    <div class="form-row my-5 formulario-card shadow bg-white p-3 rounded">
                        <div class="titulo my-3 col-lg-12">
                            <h2 class="text-center">Crear usuario</h2>
                        </div>
    
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="inputName"  >
                        </div>
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Apellido paterno</label>
                          <input type="text" class="form-control" name="nombre" id="inputName" >
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputEmail4">Apellido Materno</label>
                        <input type="text" class="form-control" name="nombre" id="inputName" >
                    </div>

                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="example@mail.com" >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Password</label>
                            <input type="text" class="form-control" name="password"  id="inputPassword" placeholder="Contraseña" >
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <label for="inputAddress2">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="inputCiudad" placeholder="Ciudad" >
                        </div> -->
                        <div class="form-group col-md-12">
                            <label for="inputState">Oficina</label>
                            <select id="inputEstado" name="estado"  class="form-control" >

                              <option selected>Tlalnepantla</option>
                              <option selected>Tultitlan</option>
                              <option selected>Toluca</option>
                              <option selected>Cuautitlán Izcalli</option>

                            </select>
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <label for="inputAddress2">Municipio</label>
                            <input type="text" class="form-control" name="municipio" id="inputMunicipio" placeholder="Apartment, studio, or floor" >
                        </div> -->
                        <!-- <div class="form-group col-md-4">
                            <label for="inputAddress2">Calle</label>
                            <input type="text" class="form-control" name="calle" id="inputCalle" placeholder="Calle, numero, referencia" >
                        </div> -->
               
                        <!-- <div class="form-group col-md-4">
                            <label for="inputZip">C.P.</label>
                            <input type="text" class="form-control" name="cp" id="inputZip" maxlength = "5" >
                        </div> -->
                       <div class="form-group col-lg-12 btn-reg-usr my-3">
                        <input type="submit" value="Registrar" class="btn-success btn-lg " id="btn-registrar">
                    
                    <!-- </div>
                        <a href="reg_proveedor.php" >¿Quieres vender tus productos?</a>
                        <a href="index.php" style="margin-left:auto;">Regresar</a>
                       </div> -->
                </form>
                     <!--TODO: ESTE ES EL SEGUNDO FORMULAIRO DE REGISTRO DE PROVEEDOR -->
                     <!-- <div>
                         <label for="activador" class="txt-reg">¿Quieres vender tus productos?</label>
                         <input type="checkbox" name="" id="activador" class="activador">
                         <form id="info-proveedor" action="regproveedor.php" method="POST" onsubmit="return validar();">
   
                            <div class="form-row my-5">
                                <div class="form-group col-lg-6">
                                    <label for="inputEmail4">RFC</label>
                                    <input type="text" class="form-control" id="Proveedorname" name="rfc" placeholder="RFC" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="inputEmail4">Razón social</label>
                                    <input type="text" class="form-control" id="Razonsocial" name="razonsocial" placeholder="Razón social" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Correo empresarial</label>
                                    <input type="email" class="form-control" id="Emailemp" name="email" placeholder="Correo empresarial" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Contraseña</label>
                                    <input type="text" class="form-control" id="password"
                                        placeholder="password" name="password" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Teléfono</label>
                                    <input type="tel" class="form-control" id="inputTel" name="telefono" placeholder="Teléfono" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Estado</label>
                                    <select id="inputState" class="form-control"  name="estado">
                    
                                        <option selected>Aguascalientes</option>
                                        <option selected>Baja California</option>
                                        <option selected>Baja California Sur</option>
                                        <option selected>Campeche</option>
                                        <option selected>Chiapas</option>
                                        <option selected>Chihuahua</option>
                                        <option selected>Coahuila</option>
                                        <option selected>Colima</option>
                                        <option selected>Distrito Federal</option>
                                        <option selected>Durango</option>
                                        <option selected>Estado de México</option>
                                        <option selected>Guanajuato</option>
                                        <option selected>Guerrero</option>
                                        <option selected>Hidalgo</option>
                                        <option selected>Jalisco</option>
                                        <option selected>Michoacán</option>
                                        <option selected>Morelos</option>
                                        <option selected>Nayarit</option>
                                        <option selected>Nuevo León</option>
                                        <option selected>Oaxaca</option>
                                        <option selected>Puebla</option>
                                        <option selected>Querétaro</option>
                                        <option selected>Quintana Roo</option>
                                        <option selected>San Luis Potosí</option>
                                        <option selected>Sinaloa</option>
                                        <option selected>Sonora</option>
                                        <option selected>Tabasco</option>
                                        <option selected>Tamaulipas</option>
                                        <option selected>Tlaxcala</option>
                                        <option selected>Veracruz</option>
                                        <option selected>Yucatán</option>
                                        <option selected>Zacatecas</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress2">Municipio</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor" name="municipio" >
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="inputAddress2">Calle</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Calle, numero, referencia" name="calle">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputZip">C.P.</label>
                                    <input type="text" class="form-control" id="inputZip" maxlength = "5" name="cp">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" value="Registrar" class="btn-success btn-lg">
                        </div>
                            </div>
                        </form>
                     </div> -->
            </div>
          
        </div>
    </div>
</section>


</body>

</html>