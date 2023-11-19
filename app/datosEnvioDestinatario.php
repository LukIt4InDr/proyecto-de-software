<?php

session_start();

    $nombreDest = $_POST['nombreDest'];
    $apellidoDest = $_POST['apellidoDest'];
    $calle = $_POST['calle'];
    $num = $_POST['num'];
    $loc = $_POST['loc'];
    $cpDest = $_POST['cpDest'];
    $phoneDest = $_POST['phoneDest'];
    $mensajeDest = $_POST['mensajeDest'];

    $datosDest = [$nombreDest, $apellidoDest, $calle, $num, $loc, $cpDest, $phoneDest, $mensajeDest];

    if (isset($_SESSION['datosDestinatario'])) {
        header('Location:../datoscompra.php');
    } else {
        $_SESSION['datosDestinatario'] = $datosDest;
        header('Location:../destinatario.php');
    }

?>