<?php

session_start();

include_once('funciones/conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header("Location: index.php");
}

$id = $_SESSION['ID'];

$consulta_sql_datos_usuario = "SELECT * FROM `usuarios` WHERE ID='" . $id . "'";

if (mysqli_num_rows($respuesta_datos_usuario = mysqli_query($db_con, $consulta_sql_datos_usuario))) {
    $res_arreglo = mysqli_fetch_array($respuesta_datos_usuario);
    $nombre_usuario_principal = $res_arreglo['Nombre'];
    $apellido_usuaro_principal = $res_arreglo['Apellido'];
    $usuario_usuario_principal = $_SESSION['Usuario'];
}


if (!empty($_POST['nombre'])) {
    $nombre_nuevo = $_POST['nombre'];
    $apellido_nuevo = $_POST['apellido'];
    $clave_nueva = $_POST['clave'];

    if (strlen($clave_nueva) < 5 || strlen($apellido_nuevo) < 3 || strlen($nombre_nuevo) < 3) {
?>
        <div class="alert alert-danger" role="alert">
            Datos incorrectos !
        </div>

        <?php
    } else {
        $consulta_editar_data = "UPDATE `usuarios` SET Nombre='" . $nombre_nuevo . "', Apellido='" . $apellido_nuevo . "', Clave='" . $clave_nueva . "' WHERE ID='" . $id . "'";
        if (mysqli_query($db_con, $consulta_editar_data)) {
        ?>
            <div class="alert alert-success" role="alert">
               Modificacion de datos exitosa!
            </div>

<?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
               Problema al modificar los datos
            </div>

<?php
        }
    }
}


?>



<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Registrarse</title>

    <style type="text/css">
        body {
            padding-top: 60px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $nombre_usuario_principal; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" name="apellido" value="<?php echo $apellido_usuaro_principal; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                        <input type="text" name="usuario" value="<?php echo $usuario_usuario_principal; ?>" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Clave</label>
                        <input type="password" name="clave" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" name="confirmar" value="confirmar" class="btn btn-primary">Modificar</button>
                    <a href="index.php">Regresar al inicio</a>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>