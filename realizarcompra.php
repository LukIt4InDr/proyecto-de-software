<?php
session_start();


if (empty($_SESSION['carrito'])) {
    header("location: index.php");
}

include 'sections/header.php';

 ?>
 <div class="container">

	<h1>Informacion</h1>

 	<table class="table mt-5">
	  <thead>
	    <tr>	      
	      <th scope="col">Nombre del producto</th>
	      <th scope="col">Precio por unidad</th>
	      <th scope="col">Cantidad</th>
	      <th scope="col">Subtotal</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($_SESSION['carrito'] as $cart) { ?>
	    <tr>	      
	      <td><?php echo $cart['nombre_producto'] ?></td>
	      <td><?php echo $cart['precio'] ?></td>
	      <td><?php echo $cart['cantidad'] ?></td>
	      <td><?php echo $cart['subtotal'] ?></td>
	    </tr>
	    <?php }?>
	    <tr>
	    	<td colspan="3">Total:</td>
	    	<td><?php echo $_SESSION['total'] ?></td>
	    </tr>	   
	  </tbody>
	</table>
	<div class="mt-3 container d-flex align-items-center justify-content-center">
		<a href="datosEnvioFormulario.php" class="btn btn-primary">Continuar</a>
	</div>
 </div>

<?php require_once 'sections/footer.php'; ?>