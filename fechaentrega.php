<?php 
session_start();

include 'sections/header.php';/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

?>
<div class="container">
	<h2>Datos del envío</h2>
	<form action="app/datosEnvio.php" method="POST">	
		<label for="">Fecha de entrega
			<input type="date" class="form-control" name="fechaEntrega">
		</label>		
		<input type="submit" name="btnFechaEntrega" class="btn btn-primary" value="continuar">
	</form>
	<?php if(isset($_SESSION['fechaEntrega'])){?>
	<div class="row mt-5">			
		<form action="app/datosEnvio.php" method="POST" class="border mx-auto">	
			<div class="mb-3">
				<label for="">Nombre del cliente/empresa</label>		
				<input type="text" class="form-control" name="nombreCliente">
			</div>
			<div class="mb-3">
				<label for="">Apellido</label>	
				<input type="text" class="form-control" name="apellido">
			</div>
			<label for="">Domicilio</label>	
			<div class="mb-3 d-flex">				
				<input type="text" class="form-control w-50" name="calle" placeholder="calle">
				<input type="text" class="form-control w-25" name="num" placeholder="#">
				<input type="text" class="form-control" name="loc" placeholder="Localidad">				
			</div>
			<div class="mb-3">
				<label for="">Codigo Postal</label>	
				<input type="text" class="form-control" name="cp">
			</div>
			<div class="mb-3">
				<label for="">Email</label>	
				<input type="text" class="form-control" name="email">
			</div>
			<div class="mb-3">
				<label for="">Telefono</label>	
				<input type="text" class="form-control" name="phone">
			</div>
			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="continuar" name="btnCliente">
			</div>
		</form>	
	</div>
	<?php } ?>		
</div>

<?php require_once 'sections/footer.php'; ?>