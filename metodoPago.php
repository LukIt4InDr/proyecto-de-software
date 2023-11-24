<?php
session_start();
include 'sections/header.php';

?>

<div class="container">
    <h1>¿Cómo quieres pagar?</h1>

    <div class="container d-flex align-items-center justify-content-center mt-5">
        <hr>
        <form action="detalleCompra.php" method="POST">
            <select name="pago" id="pago" class="form-select">
                <option value="">Seleccionar item</option>
                <option value="mp">Dinero en mi cuenta de Mercado Pago</option>
                <option value="tc">Tarjeta de credito</option>
                <option value="df">Datos para tu factura</option>
            </select>

            <div class="mt-3">
                <select name="documento" id="documento" class="form-select">
                    <option value="">ingrese tipo documento</option>
                    <option value="DNI">DNI</option>
                    <option value="LELC">LE/LC</option>
                </select>
            </div>

            <div class="mt-3">
                <input class="form-control" type="number" placeholder="ingrese número dni" min="1" name="dni" id="dni"
                    disabled>
            </div>

            <div class="mt-3 container d-flex align-items-center justify-content-center">
                <input type="submit" name="confirmar" id="confirmar" class="btn btn-primary" value="Continuar" disabled>
            </div>
        </form>
    </div>
</div>

<script>
    <?php require_once 'script_metodo_pago.js'; ?>
</script>

<?php

require_once 'sections/footer.php';

?>