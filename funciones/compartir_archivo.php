<?php

session_start();
include_once('conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header('Location: http://localhost/index.php');
} else {
    $id  = $_SESSION['ID'];
}

if (isset($_GET['usuario-compartir'])) {
    $usuario_compartir = $_GET['usuario-compartir'];
    $id_archivo_compartido = $_GET['id-archivo-compartido'];

    $consulta_verificacion = "SELECT ID FROM usuarios WHERE Usuario='" . $usuario_compartir . "'";

    if (mysqli_num_rows(mysqli_query($db_con, $consulta_verificacion)) > 0) {

        $consulta_compartir = "INSERT INTO archivos_compartidos (ID_origen, usuario_compartido, ID_archivo)
         VALUES ('" . $id . "', '" . $usuario_compartir . "',  '" . $id_archivo_compartido . "')";

        if (mysqli_query($db_con, $consulta_compartir)) {
            header("Location: http://localhost/principal.php?carga=4");
        } else {
           header("Location: http://localhost/principal.php");
        }
    } else {
        header("Location: http://localhost/principal.php?carga=5");
    }
} else {
   header("Location: http://localhost/principal.php");
}
