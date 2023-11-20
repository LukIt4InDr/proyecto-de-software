<?php


session_start();
include 'sections/header.php';
?>

<div class="container" class="mb-5">

    <h2 class="mb-5">Elija una opcion</h2>

    <div class="container d-flex align-items-center justify-content-center mb-5">
        <a href="datoscompra.php" class="btn btn-primary me-3">Continuar sin tarjeta</a>
        <a href="personalizar_tarjeta.php" class="btn btn-primary me-3">Personalizar tarjeta</a>
        <a href="elegir_tarjeta.php" class="btn btn-primary">Elegir tarjeta prediseñada</a>
    </div>

    <div id="espaciadoBody"></div>

</div>

<?php require_once 'sections/footer.php'; ?>