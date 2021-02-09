<?php

include_once('funciones/conexion_db.php');

if (!empty($_POST['usuario'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $imagen = 'Random';
    $id = 0;

    if (strlen($nombre) < 3 || strlen($apellido) < 3 || strlen($usuario) < 5 || strlen($clave) < 5) {

?>
        <div class="alert alert-danger" role="alert">
            Datos incorrectos!
        </div>
        <?php
    } else {

        $consulta_verificadora = "SELECT * FROM usuarios WHERE Usuario='" . $usuario . "'";

        if (mysqli_num_rows(mysqli_query($db_con, $consulta_verificadora)) > 0) {
        ?>
            <div class="alert alert-danger" role="alert">
                El usuario ya existe!
            </div>
            <?php
        } else {



            $consulta_registro = "INSERT INTO `usuarios` (`ID`, `Usuario`, `Clave`, `Nombre`, `Apellido`, `Imagen`)
             VALUES ('" . $id . "', '" . $usuario . "', '" . $clave . "', '" . $nombre . "', '" . $apellido . "', '" . $imagen . "')";



            if (mysqli_query($db_con, $consulta_registro)) {
            ?>
                <div class="alert alert-success" role="alert">
                    Registro exitoso!
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    Error al registrar usuario!
                </div>
<?php
            }
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
    body{
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
                        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                        <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Clave</label>
                        <input type="password" name="clave" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" name="confirmar" value="confirmar" class="btn btn-primary">Registrarse</button>
                    <a href="index.php">Regresar al inicio</a>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>