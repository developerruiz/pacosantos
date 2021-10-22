<div class="position-sticky" style="top: 2rem;">
          <div class=" mb-3 bg-light rounded">

            <!-- <div class="card">
              <img src="" alt="">
            </div> -->

            <h4 class="fst-italic">Oficinas</h4>

            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                  data-bs-target="#home-collapse" aria-expanded="true">
                  Cuautitlán Izcalli
                </button>
                <div class="collapse show" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">Empoderamiento de la mujer</a></li>
                    <li><a href="#" class="link-dark rounded">Conferencia y Talleres</a></li>
                    <li><a href="#" class="link-dark rounded">Asesoría Jurídica</a></li>
                    <li><a href="#" class="link-dark rounded">Escuelas</a></li>
                    <li><a href="#" class="link-dark rounded">Personas con discapacidad</a></li>
                    <li><a href="#" class="link-dark rounded">Cultura</a></li>
                    <li><a href="#" class="link-dark rounded">Rescate de espacios públicos</a></li>
                    <li><a href="#" class="link-dark rounded">Deporte</a></li>

                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                  data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Tlalnepantla
                </button>
                <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">Empoderamiento de la mujer</a></li>
                    <li><a href="#" class="link-dark rounded">Conferencia y Talleres</a></li>
                    <li><a href="#" class="link-dark rounded">Asesoría Jurídica</a></li>
                    <li><a href="#" class="link-dark rounded">Escuelas</a></li>
                    <li><a href="#" class="link-dark rounded">Personas con discapacidad</a></li>
                    <li><a href="#" class="link-dark rounded">Cultura</a></li>
                    <li><a href="#" class="link-dark rounded">Rescate de espacios públicos</a></li>
                    <li><a href="#" class="link-dark rounded">Deporte</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                  data-bs-target="#orders-collapse" aria-expanded="false">
                  Tultitlán
                </button>
                <div class="collapse" id="orders-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">Empoderamiento de la mujer</a></li>
                    <li><a href="#" class="link-dark rounded">Conferencia y Talleres</a></li>
                    <li><a href="#" class="link-dark rounded">Asesoría Jurídica</a></li>
                    <li><a href="#" class="link-dark rounded">Escuelas</a></li>
                    <li><a href="#" class="link-dark rounded">Personas con discapacidad</a></li>
                    <li><a href="#" class="link-dark rounded">Cultura</a></li>
                    <li><a href="#" class="link-dark rounded">Rescate de espacios públicos</a></li>
                    <li><a href="#" class="link-dark rounded">Deporte</a></li>
                  </ul>
                </div>
              </li>
              <!-- <li class="border-top my-3"></li> -->
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                  data-bs-target="#account-collapse" aria-expanded="false">
                  Toluca
                </button>
                <div class="collapse" id="account-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="toluca.php" class="link-dark rounded">Oficina toluca</a></li>
                    <!-- <li><a href="#" class="link-dark rounded">Profile</a></li>
                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                    <li><a href="#" class="link-dark rounded">Sign out</a></li> -->
                  </ul>
                </div>
              </li>
            </ul>
          </div>


          <form class="row g-3" action="correoCuautitlan.php" method="POST">
            <div class="col-md-12 ">
              <label for="inputNombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="inputNombre" name="nombre">
            </div>
            <div class="col-md-12">
              <label for="inputEmail" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
            <div class="col-md-12">
              <label for="inputTelefono" class="form-label">Teléfono</label>
              <input type="number" class="form-control" id="inputTelefono" name="telefono">
            </div>
            <div class="col-md-12">
              <label for="inputMensaje" class="form-label">Mensaje</label>
              <textarea cols=10 rows="10" type="number" class="form-control" id="inputMensaje" name="mensaje"></textarea>
            </div>
            
            <div class="col-12 mb-4">
              <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 
            </div>
       
          </form>



        </div>