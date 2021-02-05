<?php

include_once('conexion_db.php');



$id = $_SESSION['ID'];

session_start();
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

        $peso = ($peso / 1000) . "KB";

        $ident = str_replace(' ', '_', $nombre);

        $consulta_mysql_1 = "SELECT `ID` FROM `archivos` WHERE Usuario='" . $id . "' AND Nombre='" . $nombre . "'";

        $respuesta = mysqli_query($db_con, $consulta_mysql_1);

        if (mysqli_num_rows($respuesta) == 0) {
            $solicitud_sql_2 = "INSERT INTO `archivos_locales` (`ID_usr`, `Descripcion`, `Tipo`, `Tamaño`, `Fecha`)
             VALUES ('" . $id . "', '" . $nombre . "', '" . $file_ext_actual. "', '" . $peso . "', '" . $fecha . "')";
            if (mysqli_query($db_con, $solicitud_sql_2)) {
                $ruta = "../archivos/usuarios/" . $id;
                if (!is_dir($ruta)) {
                    mkdir($ruta, 0777, true);
                }

                $direccion_carpeta = "../archivos/usuarios" . "/" . $id . "/" . $ident;

                move_uploaded_file($tmp_name, $direccion_carpeta);

                header("Location: http://localhost/principal.php?error=100");
            } else {
                header("Location: http://localhost/principal.php?error=200");
            }
        } else {
            header("Location: http://localhost/principal.php?error=300");
        }
    } else {
        header("Location: http://localhost/principal.php?error=400");
    }
}





?>