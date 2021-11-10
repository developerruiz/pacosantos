<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="dashboard_home.php">
          <span data-feather="home"></span>
          Inicio
        </a>
      </li>
      <li class="mb-1 d-grid">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
          data-bs-target="#dashboard-collapse" aria-expanded="false">
          Usuarios
        </button>
        <div class="collapse mt-1" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled list-group pb-1">

            <li><a href="usuarios.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Usuarios</a></li>
            <li><a href="regUsuario.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Registrar Usuario</a></li>
            <li><a href="#" class="col-12 m-0 p-0 ps-4 link-dark py-2">Eliminar usuarios</a></li>

          </ul>
        </div>
      </li>
      <li class="mb-1 d-grid">
        <button class="btn btn-toggle align-items-center rounded collapsedmb-2" data-bs-toggle="collapse"
          data-bs-target="#dashboard-collapse-evento" aria-expanded="false">
          Eventos
        </button>
        <div class="collapse mt-1" id="dashboard-collapse-evento">
          <ul class="btn-toggle-nav list-unstyled list-group pb-1">

            <li><a href="eventos.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Eventos</a></li>
            <li><a href="regEvento.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Registrar eventos</a></li>
            <!-- <li><a href="usuarios.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Eliminar Eventos</a></li> -->

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users"></span>
          Customers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2"></span>
          Reports
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="layers"></span>
          Integrations
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Current month
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Last quarter
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Social engagement
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sign-out.php">
          <i class="fas fa-sign-out-alt"></i>
          Cerrar sesión
        </a>
      </li>
    </ul>
  </div>
</nav>