<?php
session_start();

if (empty($_SESSION["total"])) {
    header("location: index.php");
}

include 'sections/header.php';


?>

<div>

    <h2 class="text-center">Checkout Pro</h2>

    <div class="container d-flex align-items-center justify-content-center">

        <div class="card">
            <div class="card-body">

                <p>Dinero en Mercadopago <img src="imagenes/mercadopago.png" alt="" width="8%"></p>
                <div class="d-flex justify-content-around">
                    <p class="card-title fw-bold">Venta:</p>
                    <p class="card-title fw-bold">
                        <?php echo $_SESSION['total'] ?>
                    </p>
                </div>

                <div class="d-flex justify-content-around">
                    <p class="card-text fw-bold">Pagar:</p>
                    <p class="card-text fw-bold">
                        <?php echo $_SESSION['total'] ?>
                    </p>
                </div>
                <p>Cuotas</p>

                <form action="app/confirmarPago.php" method="POST">

                    <select name="metodoOpcion" id="metodoOpcion" class="form-select my-2">
                        <option value="Elegir">Elegir</option>
                        <option value="1">3 cuotas</option>
                        <option value="2">6 cuotas</option>
                        <option value="3">12 cuotas</option>
                    </select>

                    <input type="submit" name="pay" id="pay" class="btn btn-success w-100" value="Confirmar compra" disabled>
                </form>

            </div>
        </div>

    </div>

</div>

<script>
    
<?php

        require_once 'script_mercado_pago.js';

        ?>
</script>

<?php

require_once 'sections/footer.php';

?>