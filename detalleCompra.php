<?php
session_start();
include 'sections/header.php';
?>

<div class="row">
    <div>
        <h2>Detalle de la Compra</h2>
        <hr>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['carrito'] as $cart) { ?>
                <tr>
                    <td> <?php echo $cart['nombre_producto'] ?> </td>
                    <td>$ <?php echo $cart['subtotal'] ?> </td>
                </tr>
                <?php if (isset($cart['tarjeta'])) { ?>
                    
                <tr>
                    <td>Tarjeta: <?php echo $cart['tarjeta']['nombreCard'] ?>
                    </td>
                    <td>$ <?php echo $cart['tarjeta']['precioCard'] ?> </td>
                </tr>
                <?php } ?>
                <?php } ?>
                <tr>
                    <td>Total:</td>
                    <td>$
                        <?php echo $_SESSION['total'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
        
    <div class="container d-flex align-items-center justify-content-center">
        <a class="btn btn-primary mt-5" href="metodoMercadoPago.php">Continuar</a>
    </div>

</div>
</div>

<?php

require_once 'sections/footer.php';

?>