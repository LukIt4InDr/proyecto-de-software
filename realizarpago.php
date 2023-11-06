<?php 
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
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
	 			<input type="text" placeholder="ingrese tipo documento">
	 			<input type="text" placeholder="ingrese número dni">
	 		</div>
 			<div class="mt-3">
 				<input type="submit" name="confirmar" class="btn btn-success" value="confirmar">
 			</div> 			
 		</form> 		
 	</div>
	<?php

		if(isset($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}

	 ?>

 	<?php if(isset($_SESSION['pago'])){ ?>
 	<div class="row">
 		<h2 class="text-center">Checkout Pro</h2>
		<div class="card w-50 mx-auto">			
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
 	<?php } ?>
</div>

<?php

include 'sections/footer.php';

?>