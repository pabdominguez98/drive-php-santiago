<?php

include_once('funciones/conexion_db.php');

if (isset($_POST['confirmar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $imagen = 'Random';
    $id = 0;

    if (strlen($nombre) < 3 || strlen($apellido) < 3 || strlen($usuario) < 5 || strlen($clave) < 5) {

?>
        <div class="alert alert-danger" role="alert">
            Datos incorrectos
        </div>
        <?php
    } else {

        $consulta_registro = "INSERT INTO `usuarios` (`ID`, `Usuario`, `Clave`, `Nombre`, `Apellido`, `Imagen`)
             VALUES ('" . $id . "', '" . $usuario . "', '" . $clave . "', '" . $nombre . "', '" . $apellido . "', '" . $imagen . "') 
               WHERE (NOT EXISTS(SELECT 1 FROM `usuarios` WHERE Usuario='" . $usuario . "'))";


        if (mysqli_query($db_con, $consulta_registro)) {
        ?>

            <div class="alert alert-sucess" role="alert">
                Usuario registrado con exito
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
  </head>
  <body>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>