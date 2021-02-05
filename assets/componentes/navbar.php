<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri == "/assets/componentes/navbar.php") {
  header("Location: http://localhost/index.php");
}

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        if ($uri == "/principal.php") {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="compartidos.php">Archivos compartidos</a>
          </li>
          <li class="nav-item">
            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-subir-archivo">
              Subir archivo
            </a>
          </li>
          <div class="modal fade" id="modal-subir-archivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Subir archivo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="funciones/subir_archivo.php" enctype="multipart/form-data" method="post">
                  <div class="modal-body">

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Seleccionar archivo</label>
                      <input type="file" class="form-control" name="archivo-carga" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="boton-subir" class="btn btn-primary">Cargar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        <?php
        }
        ?>
        <?php
        if ($uri == "/compartidos.php") {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal.php">Archivos locales</a>
          </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="funciones/cerrar-sesion.php">Cerrar sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>