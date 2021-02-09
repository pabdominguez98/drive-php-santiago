<?php
session_start();


include_once('funciones/conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header("Location: index.php");
}

$usuario_logueado = $_SESSION['Usuario'];

?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Ingreso</title>

    <style type="text/css">
        .tarjeta-archivos {
            position: relative;
            justify-content: center;
            margin-top: 40px;
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
            <div class="col-3"></div>
            <div class="col-6">
                <?php


                $consulta_archivos_compartidos = "SELECT * FROM archivos_locales 
                    LEFT JOIN archivos_compartidos 
                       ON archivos_locales.ID = archivos_compartidos.ID_archivo  
                         WHERE archivos_compartidos.usuario_compartido='" . $usuario_logueado . "'";

                $respuesta_archivos_compartidos = mysqli_query($db_con, $consulta_archivos_compartidos);

                while ($respuesta_arreglo_comp = mysqli_fetch_array($respuesta_archivos_compartidos)) {

                ?>

                    <div class="card text-center tarjeta-archivos">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $respuesta_arreglo_comp['Descripcion']; ?></h5>
                            <span class="card-text">Tamaño: <?php echo $respuesta_arreglo_comp['Tamaño'] ?></span>
                            <br>
                            <span class="card-text">Fecha de carga: <?php echo $respuesta_arreglo_comp['Fecha'] ?></span>
                            <br>
                            <span class="card-text">Usuario: <?php echo $respuesta_arreglo_comp['usuario'] ?></span>
                            <br>
                            <br>
                            <?php
                            $link = "archivos/usuarios/" . $respuesta_arreglo_comp['ID_usr'] . "/" . str_replace(' ', '%20', $respuesta_arreglo_comp['Descripcion']);
                            ?>
                            <a href="<?php echo $link; ?>" target="_blank" class="btn btn-primary">Descargar</a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>