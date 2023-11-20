<?php 

session_start();

include_once 'sections/header.php';

if(isset($_POST['card'])){

	$idCard = $_POST['id_card'];
	$nombreCard = $_POST['nombre_card'];
	$precioCard = $_POST['precio_card'];
	$nombreFoto = $_POST['nombreFoto'];
	//$precioMensaje = $_POST['precio_Mensaje'];

	$tarjetaCard = ["idCard"=>$idCard, "nombreCard"=>$nombreCard, "precioCard"=>$precioCard];

	$_SESSION["tarjetaNombre"] = $nombreFoto;
	$_SESSION["tarjetaMensaje"] = "";

	if(isset($_SESSION['carrito'])){
		$_SESSION['carrito'][0]['tarjeta'] = $tarjetaCard;
		unset($_SESSION['total']);
		$_SESSION['total'] = $_SESSION['carrito'][0]['subtotal'] + $_SESSION['carrito'][0]['tarjeta']["precioCard"];
	}
}

if(isset($_POST['card-custom'])){
	$designCard = $_POST['tarjeta'];
	$precioCard = $_POST['precio'];
	$texto = $_POST['mensaje'];

	$tarjetaCard = ["nombreCard"=>$designCard, "precioCard"=>$precioCard, "mensaje"=>$texto];

	/*$_SESSION["tarjetaNombre"] = $designCard;
	$_SESSION["tarjetaMensaje"] = $texto;*/

	if(isset($_SESSION['carrito'])){
		$_SESSION['carrito'][0]['tarjeta'] = $tarjetaCard;
		unset($_SESSION['total']);
		$_SESSION['total'] = $_SESSION['carrito'][0]['subtotal'] + $_SESSION['carrito'][0]['tarjeta']["precioCard"];
	}
}
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

?>
 <div class="container">

 	<h1>Datos de la compra</h1>

 	<table class="table mt-5 table-striped table-hover">
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
	      <td> $<?php echo $cart['subtotal'] ?></td>
	    </tr>
	    	<?php if(isset($cart['tarjeta'])){?>
	    <tr>
	    	<td>Tarjeta: <?php echo $cart['tarjeta']['nombreCard'] ?></td>
	    	<td> $<?php echo $cart['tarjeta']['precioCard'] ?></td>
	    </tr>
	    	<?php }?>
	    <?php }?>
	    <tr>
	    	<td>Total:</td>
	    	<td> $<?php echo $_SESSION['total'] ?></td>
	    </tr>	
	  </tbody>
	</table>

	<div class="mt-3 container d-flex align-items-center justify-content-center">
		<a href="metodoPago.php" class="btn btn-primary">Continuar</a>
	</div>


 </div>

 <?php require_once 'sections/footer.php'; ?>