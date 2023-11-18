<?php

session_start();

if(isset($_GET['card-custom'])){
    $designCard = $_GET['tarjeta'];
    $precioCard = $_GET['precio'];
    $texto = $_GET['mensaje'];

    $tarjetaCard = ["nombreCard"=>$designCard, "precioCard"=>$precioCard, "mensaje"=>$texto];

    if(isset($_SESSION['carrito'])){
        $_SESSION['carrito'][0]['tarjeta'] = $tarjetaCard;
        unset($_SESSION['total']);
        $_SESSION['total'] = $_SESSION['carrito'][0]['subtotal'] + $_SESSION['carrito'][0]['tarjeta']["precioCard"];
    }
}


include_once 'sections/header.php';

?>

<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleTarjeta.css">
    <script defer src="script.js"></script>

    <title>Floreria Petals</title>
</head>

<body>

    <div class="container">-->



        <!--Menu-->
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="imagenes/petals-logo.png" alt="petals-logo"
                        id="logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="galeria.php">Arreglo floral</a>
                        </li>

                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>


                        <a href="login.php" class="btn btn-primary btn-lg" type="submit" id="iniciar-sesion">Login</a>
                    </form>

                </div>
            </div>
        </nav>-->

        <!--tarjeta-->
        <div class="tarjetaContenedor">
            <img src="imagenes/<?php echo $_GET["tarjeta"] ?>.jpg" with="100%">
            <div class="tarjetaDiseno">
                <?php echo $_GET["mensaje"] ?>
            </div>
        </div>

        <div class="text-center">
            <a href="datoscompra.php" class="btn btn-primary btn-lg justify-content-center" id="botonContinuar">Continuar</a>
        </div>


<?php require_once 'sections/footer.php'; ?>