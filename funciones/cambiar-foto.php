<?php

session_start();

include_once('conexion_db.php');

$id = $_SESSION['ID'];

if (isset($_POST['boton-cambiar-foto'])) {
    $archivo = $_FILES['imagen-carga'];
    $nombre = $archivo['name'];
    $tmp_name = $archivo['tmp_name'];
    $imagen_actual = $_POST['imagen-actual'];

    if (!empty($nombre)) {
        $consulta_editar_foto = "UPDATE `usuarios` SET Imagen='" . $nombre . "' WHERE ID='" . $id . "'";

        if (mysqli_query($db_con, $consulta_editar_foto)) {
            $ruta_imagen = "../archivos/imagenes-perfiles/$id";
            if (!is_dir($ruta_imagen)) {
                mkdir($ruta_imagen, 0777, true);
            }
            $ruta_imagen_actual = "../archivos/imagenes-perfiles/$id/$imagen_actual";

            if ($imagen_actual != "Random") {
                unlink($ruta_imagen_actual);
            }

            $ruta_imagen_nueva = "../archivos/imagenes-perfiles/$id/$nombre";

            move_uploaded_file($tmp_name, $ruta_imagen_nueva);
            header("Location: http://localhost/principal.php?carga=7");
        } else {
           // header("Location: http://localhost/index.php");
           echo "error 2";
        }
    } else {
        echo "Error 1";
     //   header("Location: http://localhost/index.php");
    }
}
