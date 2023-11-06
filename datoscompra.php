<?php 

session_start();

include_once 'sections/header.php';
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

?>
 <div class="container">
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
	      <td><?php echo $cart['subtotal'] ?></td>
	    </tr>
	    <?php }?>
	    <tr>
	    	<td>Total:</td>
	    	<td><?php echo $_SESSION['total'] ?></td>
	    </tr>
	    <!--<tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td colspan="2">Larry the Bird</td>
	      <td>@twitter</td>
	    </tr>-->
	  </tbody>
	</table>
	<div class="mt-3 d-flex justify-content-end">
		<a href="app/confirmarCompra.php" class="btn btn-primary">Aceptar</a>
		<?php if(isset($_SESSION["confirmarCompra"])){?>
		<a href="<?php echo isset($_SESSION['user']) ? 'realizarpago.php' : 'login.php'  ?>" class="btn btn-success">Finalizar Compra</a>
		<?php }?>
	</div>
 </div>

 <?php require_once 'sections/footer.php'; ?>