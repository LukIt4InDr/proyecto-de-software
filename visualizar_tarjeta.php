<?php

session_start();

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
    <a href="envio.php?id=<?php echo $_GET["id"] ?>" class="btn btn-primary btn-lg justify-content-center" id="botonContinuar">Volver a datos del envio</a>
</div>


<?php require_once 'sections/footer.php'; ?>