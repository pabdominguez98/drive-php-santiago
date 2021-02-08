<?php

session_start();
include_once('funciones/conexion_db.php');

if (isset($_SESSION['ID'])) {
    header('Location: principal.php');
}

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $consulta = "SELECT ID FROM usuarios WHERE Usuario='" . $usuario . "' AND Clave='" . $clave . "'";

    $resultado = mysqli_query($db_con, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $result = mysqli_fetch_array($resultado);
        $id = $result['ID'];
        $_SESSION['ID'] = $id;
        $_SESSION['Usuario'] = trim($usuario);
        header('Location: principal.php');
    } else {
?>
        <div class="alert alert-danger" role="alert">
            Datos incorrectos
        </div>
<?php
    }
}




?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Ingreso</title>

    <link rel="stylesheet" type="text/css" href="assets/css/styles_login.css">

</head>

<body>
    <section class="contenedor">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4 div-formulario-ingreso">
                <div class="formulario-ingreso">
                    <h3>Inicio de sesion</h3>
                    <br>
                    <br>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Clave</label>
                            <input type="password" class="form-control" name="clave" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">

                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>