<?php
session_start();
include 'sections/header.php';
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/


 ?>
<div class="container">
	<div class="row mt-5">
		<form action="app/datosEnvio.php" method="POST" class="border mx-auto w-75">	
			<div class="mb-3">
				<label for="">Nombre del Destinatario</label>		
				<input type="text" class="form-control" name="nombreDest">
			</div>
			<div class="mb-3">
				<label for="">Apellido del Destinatario</label>	
				<input type="text" class="form-control" name="apellidoDest">
			</div>
			<div class="mb-3">
				<label for="">Producto</label>	
				<!--<input type="text" class="form-control" name="producto">-->
				<table>
					<?php foreach ($_SESSION['carrito'] as $cart) { ?>
				    <tr>	      
				      <td><?php echo $cart['nombre_producto'] ?></td>				      
				    </tr>
	    			<?php }?>
				</table>
			</div>
			<label for="">Domicilio</label>	
			<div class="mb-3 d-flex">				
				<input type="text" class="form-control w-50" name="calle" placeholder="calle">
				<input type="text" class="form-control w-25" name="num" placeholder="#">
				<input type="text" class="form-control" name="loc" placeholder="Localidad">				
			</div>
			<div class="mb-3">
				<label for="">Codigo Postal</label>	
				<input type="text" class="form-control" name="cpDest">
			</div>
			<div class="mb-3">
				<label for="">Telefono</label>	
				<input type="text" class="form-control" name="phoneDest">
			</div>
			<div class="mb-3">
				<label for="">Mensaje al Destinatario</label>	
				<textarea name="mensajeDest" id="" cols="30" rows="5" class="form-control"></textarea>
			</div>
			<div class="mb-3">
				<input type="submit" name="btnDest" class="btn btn-primary" value="continuar">
				<?php if(isset($_SESSION['datosDestinatario'])){ ?>
				<a href="personalizar_tarjeta.php" class="btn btn-info">Personalizar tarjeta</a>
				<a href="elegir_tarjeta.php" class="btn btn-info">Elegir tarjeta prediseñada</a>
				<?php }?>
			</div>
		</form>	
	</div>
</div>

<?php require_once 'sections/footer.php'; ?>