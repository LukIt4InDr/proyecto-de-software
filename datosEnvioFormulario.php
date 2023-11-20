<?php
session_start();

if (empty($_SESSION['carrito'])) {
	header("location: index.php");
}

include 'sections/header.php';

?>

<div class="container">
	<h2>Datos del envío</h2>

	<div class="row mt-5">
		<form action="app/datosEnvioPedido.php" method="POST" class="border mx-auto">

			<div class="mb-3">
				<label for="fechaEntrega" class="form-label">Fecha de entrega
					<input type="date" class="form-control" name="fechaEntrega" id="fechaEntrega">
				</label>
			</div>

			<div class="mb-3">
				<label for="nombreCliente">Nombre del cliente/empresa</label>
				<input type="text" class="form-control" name="nombreCliente" id="nombreCliente"
					placeholder="Nombre del cliente/empresa">
			</div>

			<div class="mb-3">
				<label for="apellido">Apellido</label>
				<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
			</div>

			<label for="calle">Domicilio</label>
			<div class="mb-3 d-flex">
				<input type="text" class="form-control w-50" name="calle" placeholder="Calle" id="calle">
				<input type="number" class="form-control w-25" name="num" placeholder="Numero" id="num" min="1">
				<input type="text" class="form-control" name="loc" placeholder="Localidad" id="loc">
			</div>
			<div class="mb-3">
				<label for="cp">Codigo Postal</label>
				<input type="number" class="form-control" name="cp" id="cp" min="1" placeholder="1234">
			</div>

			<div class="mb-3">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="yo@gmail.com">
			</div>

			<div class="mb-3">
				<label for="phone">Telefono</label>
				<input type="number" class="form-control" name="phone" id="phone" min="1" placeholder="555555">
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Continuar" name="btnCliente" id="btnCliente"
					disabled>
			</div>
		</form>
	</div>
</div>

<script>
	<?php require_once 'script_datos_envio.js'; ?>
</script>

<?php require_once 'sections/footer.php'; ?>