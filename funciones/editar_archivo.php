<?php
session_start();

include_once('conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header("Location: http://index.php");
} else {
    $id = $_SESSION['ID'];
}

if (isset($_GET['nombre-nuevo'])) {
    $nombre_nuevo = $_GET['nombre-nuevo'];
    $tipo_archivo = $_GET['tipo-archivo'];
    $nombre_actual = $_GET['nombre-actual-archivo'];


    $nombre_nuevo = $nombre_nuevo . '.' . $tipo_archivo;

    $consulta_modificacion = "UPDATE archivos_locales SET Descripcion='" . $nombre_nuevo . "' WHERE ID_usr='" . $id . "' AND Descripcion='" . $nombre_actual . "'";

    if (mysqli_query($db_con, $consulta_modificacion)) {
        $ruta_archivo_anterior = "../archivos/usuarios/$id/$nombre_actual";
        $ruta_archivo_nueva = "../archivos/usuarios/$id/$nombre_nuevo";
        rename($ruta_archivo_anterior, $ruta_archivo_nueva);
        header('Location: http://localhost/principal.php?carga=3');
    } else {
        header('Location: http://localhost/principal.php');
    }
} else {
    header('Location: http://localhost/principal.php');
}
