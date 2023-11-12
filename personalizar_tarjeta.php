<?php
include 'sections/header.php';
?>
<section class="container">
	<h2 class="text-center">Personalizar Tarjeta</h2>
	<hr>
	<form action="tarjetaPersonalizada.php" method="POST">
		<div class="row height-custom">
			<input type="hidden" name="precio" value="3000">
			
			<div class="col-sm-4">
				<img src="imagenes/diseños/tarjeta1.jpg" alt="tarjeta1" width="100%" class="format">
				<div class="d-flex justify-content-center mt-2">
					<input type="radio" name="tarjeta" value="tarjeta1"> Tarjeta 1
				</div> 
				
			</div>
			<div class="col-sm-4">
				<img src="imagenes/diseños/tarjeta2.jpg" alt="tarjeta2" width="100%" class="format">
				<div class="d-flex justify-content-center mt-2">
					<input type="radio" name="tarjeta" value="tarjeta2"> Tarjeta 2
				</div>
				
			</div>
			<div class="col-sm-4">
				<img src="imagenes/diseños/tarjeta3.jpg" alt="tarjeta3" width="100%" class="format">
				<div class="d-flex justify-content-center mt-2">
					<input type="radio" name="tarjeta" value="tarjeta3"> Tarjeta 3
				</div>				
			</div>			
		</div>
		<h2 class="text-center">Ingrese su mensaje</h2>
		<hr>
		<div class="row">			
			<input type="text" class="form-control" name="mensaje">
		</div>
		<div class="row">
			<div class="col-sm-12 mt-2 text-center">
				<input type="submit" class="btn btn-primary" name="card-custom" value="continuar">	
			</div>			
		</div>
	</form>
</section>


<?php
include 'sections/footer.php';
?>