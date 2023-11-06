<?php

session_start();

$prod_id = $_POST['prodId'];
$nombreProducto = $_POST['nombreProducto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;

$cart = ["cantidad"=>$cantidad, "nombre_producto"=>$nombreProducto,"precio"=>$precio, "subtotal"=>$subtotal];

if(empty($_SESSION['carrito'])){
	
	$_SESSION['carrito'][0] = $cart;
	$_SESSION['total'] = valorTotal();
	header("Location:../producto.php?id=$prod_id");
}else{	
	array_push($_SESSION['carrito'], $cart);
	$_SESSION['total'] = valorTotal();
	header("Location:../producto.php?id=$prod_id");
}

function valorTotal(){
	$total = 0;
	foreach ($_SESSION['carrito'] as $i => $cart) {
		$total = $total + $cart['subtotal'];
	}

	return $total;

}