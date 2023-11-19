<?php
session_start();
include 'sections/header.php';
?>

<div class="container">

    <a href="personalizar_tarjeta.php" class="btn btn-primary">Personalizar tarjeta</a>
    <a href="elegir_tarjeta.php" class="btn btn-primary">Elegir tarjeta prediseñada</a> <br>
    <a href="datoscompra.php" class="btn btn-primary mt-5">Ir a datos compra</a>

</div>

<?php require_once 'sections/footer.php'; ?>