<?php
session_start();

if (!isset($_SESSION['ID'])) {
    header("Location: index.php");
}




?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Archivos locales</title>

    <style type="text/css">
        .tarjeta-archivos {
            position: relative;
            justify-content: center;
            margin-top: 40px;
        }
    </style>


</head>

<body>
    <section>
        <?php
        include('assets/componentes/navbar.php');
        ?>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                <div class="card text-center tarjeta-archivos">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Compartir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Editar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eliminar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Descargar</a>
                    </div>
                </div>
            </div>
            <div class="col-6"></div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>