<?php
session_start();
$id = $_SESSION['ID'];

include_once('conexion_db.php');


if(!isset($_SESSION['ID'])){
    header("Location: http://localhost/index.php");
}


if(isset($_GET['archivo'])){
    $nombre_archivo_eliminar = $_GET['archivo'];
    $id_usuario_actual = $_SESSION['ID'];

    $consulta_eliminar = "DELETE FROM archivos_locales WHERE Descripcion='".$nombre_archivo_eliminar."' AND ID_usr= '".$id_usuario_actual."'";

    if($resultado_eliminar = mysqli_query($db_con, $consulta_eliminar)){
        $direccion_archivo = "../archivos/usuarios/$id_usuario_actual/$nombre_archivo_eliminar";
        unlink($direccion_archivo);
        header("Location: http://localhost/principal.php?carga=2");
    }else{
        header("Location: http://localhost/principal.php");
    }

    
    
}
