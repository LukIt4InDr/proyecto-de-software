<?php

session_start();

if(isset($_POST['card-custom'])){
    $designCard = $_POST['tarjeta'];
    $precioCard = $_POST['precio'];
    $texto = $_POST['mensaje'];

    $tarjetaCard = ["nombreCard"=>$designCard, "precioCard"=>$precioCard, "mensaje"=>$texto];

    $_SESSION["tarjetaNombre"] = $designCard;
    $_SESSION["tarjetaMensaje"] = $texto;

    if(isset($_SESSION['carrito'])){
        $_SESSION['carrito'][0]['tarjeta'] = $tarjetaCard;
        unset($_SESSION['total']);

        $acum = 0;

        foreach ($_SESSION['carrito'] as $key => $value) {

            $acum = $acum + $value["subtotal"];

            if(isset($value["tarjeta"])){
                $acum = $acum + $value["tarjeta"]["precioCard"];
            }
            
        }                
        $_SESSION['total'] = $acum;
    }
}


include_once 'sections/header.php';

?>


        <!--tarjeta-->
        <div class="tarjetaContenedor mt-5">
            <img src="imagenes/<?php echo $_POST["tarjeta"] ?>.jpg" with="100%">
            <div class="tarjetaDiseno">
                <?php echo $_POST["mensaje"] ?>
            </div>
        </div>

        <div class="text-center">
            <a href="datoscompra.php" class="btn btn-primary btn-lg justify-content-center" id="botonContinuar">Continuar</a>
        </div>


<?php require_once 'sections/footer.php'; ?>