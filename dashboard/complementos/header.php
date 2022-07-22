<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 p-0" href="#">
            <img class="w-100 " src="../img/logo-horizontal.png" alt="">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap me-3 d-flex align-items-center">
                <img src="../img/usr-icon.png" alt=""  style="width: 50px; height: 50px;">

                <div class="dropdown">
                    <button class="btn bg-none dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
          
                        $info_usuario = "SELECT * FROM usuario_reg WHERE id_usuario_reg = '$field1name'";
                        $sentencia = $pdo->prepare($info_usuario);
                        $sentencia->execute();
                        $resultado_usuario = $sentencia->fetchAll();

                        ?>

                        <?php foreach($resultado_usuario as $usuario): ?>

                        <span><?php echo $usuario['nombre_usuario']; ?></span>

                        <?php endforeach ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">

                        <li>
                            <h6 class="dropdown-header">Acciones</h6>
                        </li>
                        <li><a class="dropdown-item" href="procesos/cerrar_sesion.php">Cerrar sesión</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </header>