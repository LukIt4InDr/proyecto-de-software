<?php 

$id = $_GET['id'];

include_once 'sections/header.php';

?>
<section class="container">
	<div class="row my-2 w-50 mx-auto">
		<h1 class="text-center">Calificación de la compra</h1>
		<hr>
		<form action="app/calificacionCompra.php" method="POST">
			<div class="mb-3">
				<input type="hidden" name="id_pedido" value="<?php echo $id ?>">
			 <select name="cali" id="" class="form-select">
			  	<option selected>Califique el producto</option>
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>		      		
			  </select>		      	
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Escriba un comentario</label>
			  <textarea class="form-control" rows="2" name="coment"></textarea>
			</div>
			<div class="mb-3 text-center">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>	
</section>

<?php

include_once 'sections/footer.php';

?>