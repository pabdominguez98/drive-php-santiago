<?php

session_start();
include_once('conexion_db.php');

if (!isset($_SESSION['ID'])) {
    header('Location: http://localhost/index.php');
} else {
    $id = $_SESSION['ID'];
}

if (isset($_GET['id-archivo'])) {
    $id_archivo = $_GET['id-archivo'];
    $usuario_compartido = $_GET['usuario-compartido'];

    $consulta_eliminar_compartido = "DELETE FROM `archivos_compartidos` WHERE ID_origen='" . $id . "' AND usuario_compartido='" . $usuario_compartido . "' AND ID_archivo='" . $id_archivo . "'";


    if(mysqli_query($db_con, $consulta_eliminar_compartido)){
        header('Location: http://localhost/principal.php?carga=12');
    }else{
        header('Location: http://localhost/principal.php');
    }
}else{
    header('Location: http://localhost/principal.php');
}

?>
