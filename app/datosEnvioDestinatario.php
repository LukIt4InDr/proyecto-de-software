<?php

session_start();
error_reporting(0);

    $nombreDest = $_POST['nombreDest'];
    $apellidoDest = $_POST['apellidoDest'];
    $calle = $_POST['calle'];
    $num = $_POST['num'];
    $loc = $_POST['loc'];
    $cpDest = $_POST['cpDest'];
    $phoneDest = $_POST['phoneDest'];
    $mensajeDest = $_POST['mensajeDest'];

    $datosDest = [$nombreDest, $apellidoDest, $calle, $num, $loc, $cpDest, $phoneDest, $mensajeDest];

    $_SESSION['datosDestinatario'] = $datosDest;

    if (isset($_SESSION['datosDestinatario'])) {
        header('Location:../seleccionTarjeta.php');
    }

?>