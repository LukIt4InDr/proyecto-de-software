<?php
session_start();

if (empty($_SESSION['carrito'])) {
	header("location: index.php");
}

include 'sections/header.php';
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/


?>
<div class="container">

	<h1>Datos del destinatario</h1>

	<div class="row mt-5">
		<form action="app/datosEnvioDestinatario.php" method="POST" class="border mx-auto w-75">
			<div class="mb-3">
				<label for="">Nombre del Destinatario</label>
				<input type="text" class="form-control" name="nombreDest" id="nombreDest" placeholder="Nombre">
			</div>
			<div class="mb-3">
				<label for="">Apellido del Destinatario</label>
				<input type="text" class="form-control" name="apellidoDest" id="apellidoDest" placeholder="Apellido">
			</div>
			<div class="mb-3">
				<label for="">Producto</label>
				<!--<input type="text" class="form-control" name="producto">-->
				<table>
					<?php foreach ($_SESSION['carrito'] as $cart) { ?>
						<tr>
							<td>
								<?php echo $cart['nombre_producto'] ?>
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<label for="">Domicilio</label>
			<div class="mb-3 d-flex">
				<input type="text" class="form-control w-50" name="calle" placeholder="Calle" id="calle">
				<input type="number" class="form-control w-25" name="num" placeholder="Numero" id="num" min="1">
				<input type="text" class="form-control" name="loc" placeholder="Localidad" id="loc">
			</div>
			<div class="mb-3">
				<label for="">Codigo Postal</label>
				<input type="number" class="form-control" name="cpDest" id="cpDest" min="1" placeholder="1234">
			</div>
			<div class="mb-3">
				<label for="">Telefono</label>
				<input type="number" class="form-control" name="phoneDest" id="phoneDest" min="1" placeholder="55555">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Mensaje al Destinatario</label>
				<textarea name="mensajeDest" id="" cols="30" rows="5" class="form-control"></textarea>
			</div>
			<div class="mb-3">
				<input type="submit" name="btnDest" class="btn btn-primary" value="Continuar" id="btnDest" disabled>

			</div>
		</form>
	</div>
</div>

<script>
	<?php require_once 'script_destinatario.js'; ?>
</script>

<?php require_once 'sections/footer.php'; ?>