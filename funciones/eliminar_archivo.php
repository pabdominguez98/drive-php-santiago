<?php
session_start();
$id = $_SESSION['ID'];


if(!isset($_SESSION['ID'])){
    header("Location: http://localhost/index.php");
}







?>