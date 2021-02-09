<?php
session_start();

include_once('funciones/conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header("Location: index.php");
}

$id = $_SESSION['ID'];



?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Archivos locales</title>

    <style type="text/css">
        .tarjeta-archivos {
            position: relative;
            justify-content: center;
            margin-top: 40px;
        }

        .boton-editar-datos {
            position: relative;
            margin-left: 20px;
        }
    </style>


</head>

<body>
    <section>
        <?php
        include('assets/componentes/navbar.php');
        ?>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">

                <?php

                $consulta_archivos = "SELECT * FROM archivos_locales WHERE ID_usr='" . $id . "'";

                $resultado_archivos = mysqli_query($db_con, $consulta_archivos);

                if (mysqli_num_rows($resultado_archivos) > 0) {
                    while ($result_archivos = mysqli_fetch_array($resultado_archivos)) {

                ?>



                        <div class="card text-center tarjeta-archivos">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">

                                        <button type="button" class="btn btn-primary boton-editar-datos" data-bs-toggle="modal" data-bs-target="#modal-compartir-<?php echo $result_archivos['ID']; ?>">
                                            Compartir
                                        </button>


                                        <div class="modal fade" id="modal-compartir-<?php echo $result_archivos['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="funciones/compartir_archivo.php" method="get" enctype="text/plain">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Compartir archivo</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Ingresa el nuevo nombre del archivo</label>
                                                                <input type="text" name="usuario-compartir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id-archivo-compartido" value="<?php echo urldecode($result_archivos['ID']); ?>">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Compartir</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn btn-primary boton-editar-datos" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $result_archivos['ID'] ?>">
                                            Editar
                                        </button>

                                        <div class="modal fade" id="modal-<?php echo $result_archivos['ID']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="funciones/editar_archivo.php" method="get" enctype="text/plain">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Editar archivo (<?php echo $result_archivos['Descripcion']; ?>)</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Ingresa el nuevo nombre del archivo</label>
                                                                <input type="text" name="nombre-nuevo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="nombre-actual-archivo" value="<?php echo urldecode($result_archivos['Descripcion']); ?>">
                                                            <input type="hidden" name="tipo-archivo" value="<?php echo $result_archivos['Tipo']; ?>">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Modificar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="funciones/eliminar_archivo.php?id-archivo=<?php echo $result_archivos['ID']; ?>&archivo=<?php echo $result_archivos['Descripcion']; ?>">Eliminar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $result_archivos['Descripcion']; ?></h5>
                                <span class="card-text">Tamaño: <?php echo $result_archivos['Tamaño'] ?></span>
                                <br>
                                <span class="card-text">Fecha de carga: <?php echo $result_archivos['Fecha'] ?></span>
                                <br>
                                <br>
                                <?php
                                $link = "archivos/usuarios/$id/" . str_replace(' ', '%20', $result_archivos['Descripcion']);
                                ?>
                                <a href="<?php echo $link; ?>" target="_blank" class="btn btn-primary">Descargar</a>
                            </div>
                        </div>



                <?php
                    }
                }
                ?>

            </div>
            <div class="col-6"></div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>