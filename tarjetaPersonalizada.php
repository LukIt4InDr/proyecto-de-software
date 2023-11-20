<?php

session_start();

if(isset($_GET['card-custom'])){
    $designCard = $_GET['tarjeta'];
    $precioCard = $_GET['precio'];
    $texto = $_GET['mensaje'];

    $tarjetaCard = ["nombreCard"=>$designCard, "precioCard"=>$precioCard, "mensaje"=>$texto];

    $_SESSION["tarjetaNombre"] = $designCard;
    $_SESSION["tarjetaMensaje"] = $texto;

    if(isset($_SESSION['carrito'])){
        $_SESSION['carrito'][0]['tarjeta'] = $tarjetaCard;
        unset($_SESSION['total']);
        $_SESSION['total'] = $_SESSION['carrito'][0]['subtotal'] + $_SESSION['carrito'][0]['tarjeta']["precioCard"];
    }
}


include_once 'sections/header.php';

?>


        <!--tarjeta-->
        <div class="tarjetaContenedor mt-5">
            <img src="imagenes/<?php echo $_GET["tarjeta"] ?>.jpg" with="100%">
            <div class="tarjetaDiseno">
                <?php echo $_GET["mensaje"] ?>
            </div>
        </div>

        <div class="text-center">
            <a href="datoscompra.php" class="btn btn-primary btn-lg justify-content-center" id="botonContinuar">Continuar</a>
        </div>


<?php require_once 'sections/footer.php'; ?>