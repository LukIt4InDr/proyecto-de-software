<?php 

session_start();
error_reporting(0);

include_once 'conexion.php';

$fechaEntrega = $_SESSION['fechaEntrega'];

$result = false;

foreach ($_SESSION['carrito'] as $key => $value) {
	$sql = "insert into pedido(Cantidad, Precio, Fecha_Entrega, Estado_Actual, IDEstado_del_Pedido, ID_Empleado) values(" . $value['cantidad'] . ", " . $value['precio'] . ",'$fechaEntrega','activo',1,100)";	
	$result = mysqli_query($conexion, $sql);
}







