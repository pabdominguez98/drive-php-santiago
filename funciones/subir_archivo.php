<?php

include_once('conexion_db.php');




session_start();

$id = $_SESSION['ID'];
$usuario_logueado = $_SESSION['Usuario'];

if (empty($_SESSION['ID'])) {
    header("Location: http://localhost/index.php");
} else {
    $id = $_SESSION['ID'];
    if (isset($_POST['boton-subir'])) {
        $archivo = $_FILES['archivo-carga'];
        $nombre = $archivo['name'];
        $peso = $archivo['size'];
        $tmp_name = $archivo['tmp_name'];
        $tipo = $archivo['type'];

        $arreglo_fecha = getdate();

        $fecha = $arreglo_fecha['mday']."/".$arreglo_fecha['mon']."/".$arreglo_fecha['year'];

        $fileExt = explode('.', $nombre);

        $file_ext_actual = strtolower(end($fileExt));

        $peso = round(($peso / 1000000), 2) . "MB";

       
        $consulta_carga = "SELECT `ID` FROM `archivos_locales` WHERE ID_usr='" . $id . "' AND Nombre='" . $nombre . "'";

        $respuesta = mysqli_query($db_con, $consulta_carga);

        if (mysqli_num_rows($respuesta) == 0) {

            $solicitud_carga_archivo = "INSERT INTO `archivos_locales` (`ID_usr`, `Descripcion`, `Tipo`, `Tamaño`, `Fecha`, `usuario`) VALUES ('" . $id . "', '" . $nombre . "', '" . $file_ext_actual. "', '" . $peso . "', '" . $fecha . "', '".$usuario_logueado."')";

            if (mysqli_query($db_con, $solicitud_carga_archivo)) {
                $ruta = "../archivos/usuarios/" . $id;

                if (!is_dir($ruta)) {
                    mkdir($ruta, 0777, true);
                }

                $direccion_carpeta = "../archivos/usuarios" . "/" . $id . "/" . $nombre;

                move_uploaded_file($tmp_name, $direccion_carpeta);

                header("Location: http://localhost/principal.php?carga=1");
            } 
        } 
    } 
}
