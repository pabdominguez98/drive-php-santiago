<?php
session_start();

include_once('funciones/conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header("Location: index.php");
}


$carga_respuestas = 2120;
$id = $_SESSION['ID'];

$consulta_sql_datos_usuario = "SELECT * FROM `usuarios` WHERE ID='" . $id . "'";

if (mysqli_num_rows($respuesta_datos_usuario = mysqli_query($db_con, $consulta_sql_datos_usuario))) {
    $res_arreglo = mysqli_fetch_array($respuesta_datos_usuario);
    $nombre_usuario_principal = $res_arreglo['Nombre'];
    $apellido_usuaro_principal = $res_arreglo['Apellido'];
    $usuario_usuario_principal = $_SESSION['Usuario'];
    $imagen_usuario_principal = $res_arreglo['Imagen'];
    if ($imagen_usuario_principal == "Random") {
        $ruta_imagen_usuario = "archivos/imagenes-perfiles/default.png";
    } else {
        $ruta_imagen_usuario = "archivos/imagenes-perfiles/$id/$imagen_usuario_principal";
    }
}

if (!empty($_GET['carga'])) {
    $carga_respuestas = $_GET['carga'];
}




?>



<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css">

    <title>Archivos locales</title>



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
                if ($carga_respuestas == 1) {

                ?>

                    <div class="alert alert-success" role="alert">
                        Archivo cargado correctamente!
                    </div>

                <?php
                }
                ?>
                <?php
                if ($carga_respuestas == 2) {

                ?>

                    <div class="alert alert-success" role="alert">
                        Archivo eliminado correctamente!
                    </div>

                <?php
                }
                ?>
                <?php
                if ($carga_respuestas == 3) {

                ?>

                    <div class="alert alert-success" role="alert">
                        Archivo modificado correctamente!
                    </div>

                <?php
                }
                ?>
                <?php
                if ($carga_respuestas == 4) {

                ?>

                    <div class="alert alert-success" role="alert">
                        Archivo compartido correctamente!
                    </div>

                <?php
                }
                ?>
                <?php
                if ($carga_respuestas == 5) {

                ?>

                    <div class="alert alert-danger" role="alert">
                        No existe el usuario para compartir el archivo!
                    </div>

                <?php
                }
                ?>
                <?php
                if ($carga_respuestas == 7) {

                ?>

                    <div class="alert alert-success" role="alert">
                        Foto modificada correctamente!
                    </div>

                <?php
                }
                ?>

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
                                <span class="card-text">Tamaño: <?php echo $result_archivos['Peso'] ?></span>
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
            <div class="col-2"></div>
            <div class="col-4 columna-informacion-usuario">
                <img src="<?php echo $ruta_imagen_usuario; ?>" alt="" class="imagen-de-usuario">
                <div class="row">
                    <button type="button" class="btn btn-primary boton-modal-foto" data-bs-toggle="modal" data-bs-target="#modal-editar-foto">
                        Editar foto
                    </button>


                    <div class="modal fade" id="modal-editar-foto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cambiar foto de perfil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="funciones/cambiar-foto.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Seleccionar archivo</label>
                                            <input type="file" class="form-control" name="imagen-carga" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="imagen-actual" value="<?php echo $imagen_usuario_principal; ?>">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="boton-cambiar-foto" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">Nombre: <?php echo $nombre_usuario_principal; ?></li>
                    <li class="list-group-item">Apellido: <?php echo $apellido_usuaro_principal; ?></li>
                    <li class="list-group-item">Usuario: <?php echo $usuario_usuario_principal; ?></li>
                </ul>
                <br>
                <a href="editar-info.php">Editar datos personales</a>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>