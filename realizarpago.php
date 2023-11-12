<?php 
session_start();
/*echo "<pre>";
var_dump(isset($_SESSION["datosDestinatario"]));
echo "</pre>";*/
include 'sections/header.php';

?>
<div class="container">
	<div class="row">
		<h2>¿Cómo quieres pagar?</h2>
		<hr>
		<form action="app/confirmarPago.php" method="POST">
			<select name="pago" id="" class="form-select">
				<option value="">Seleccionar item</option>
				<option value="mp">Dinero en mi cuenta de Mercado Pago</option>
				<option value="tc">Tarjeta de credito</option>
				<option value="df">Datos para tu factura</option>
			</select>

			<div class="mt-3">
				<select name="documento" id="documento" class="form-select">
					<option value="documento">ingrese tipo documento</option>
					<option value="DNI">DNI</option>
					<option value="LELC">LE/LC</option>
				</select>
			</div>

			<div class="mt-3">
				<input class="form-control" type="text" placeholder="ingrese número dni">
			</div>

			<div class="mt-3">
				<input type="submit" name="confirmar" class="btn btn-success" value="confirmar">
			</div>
	</div>
	</form>
</div>
<?php

		if(isset($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			unset($_SESSION['codigo']);
		}

	 ?>

<?php if(isset($_SESSION['pago'])){ ?>
<div class="row">
	<div class="col-sm-6">
		<h2>Detalle de la Compra</h2>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nombre del producto</th>
					<th scope="col">Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($_SESSION['carrito'] as $cart) { ?>
				<tr>
					<td><?php echo $cart['nombre_producto'] ?></td>
					<td>$ <?php echo $cart['subtotal'] ?></td>
				</tr>
				<?php if(isset($cart['tarjeta'])){ ?>
				<tr>
					<td>Tarjeta: <?php echo $cart['tarjeta']['nombreCard'] ?></td>
					<td>$ <?php echo $cart['tarjeta']['precioCard'] ?></td>
				</tr>
				<?php }?>
				<?php }?>
				<tr>
					<td>Total:</td>
					<td>$ <?php echo $_SESSION['total'] ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-6">
		<h2 class="text-center">Checkout Pro</h2>
		<div class="card">
			<div class="card-body">
				<p>Dinero en Mercadopago <img src="imagenes/mercadopago.png" alt=""width="8%"></p>
				<div class="d-flex justify-content-around">
					<p class="card-title fw-bold">Venta:</p>
					<p class="card-title fw-bold"><?php echo $_SESSION['total']?></p>
				</div>
				<div class="d-flex justify-content-around">
					<p class="card-text fw-bold">Pagar:</p>
					<p class="card-text fw-bold"><?php echo $_SESSION['total']?></p>
				</div>
				<p>Cuotas</p>
				<form action="app/confirmarPago.php" method="POST">
					<select name="" id="" class="form-select my-2">
						<option value="">Eligir</option>
						<option value="">3 cuotas</option>
						<option value="">6 cuotas</option>
						<option value="">12 cuotas</option>
					</select>
					<input type="submit" name="pay" class="btn btn-primary w-100" value="pagar">
				</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>
</div>

<?php

require_once 'sections/footer.php';

?>