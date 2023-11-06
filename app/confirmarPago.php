<?php
session_start();

include 'conexion.php';

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if(isset($_POST['confirmar'])){
	if($_POST['pago'] == 'mp'){
		$_SESSION['pago'] = $_POST['pago'];
		header("Location:../realizarpago.php");
		exit();
	}
}

if(isset($_POST['pay'])){
	$fechaEntrega = $_SESSION['fechaEntrega'];
	$total = $_SESSION['total'];

	try{

		$sql_venta = "insert into venta(total) values($total)";
		mysqli_query($conexion, $sql_venta); 

		foreach($_SESSION['carrito'] as $cart){
			$cantidad = $cart['cantidad'];
			$precio = $cart['precio'];

			$sql = "insert into pedido(Cantidad, Precio, Fecha_Entrega, Estado_Actual, ID_Empleado) values($cantidad,$precio,'$fechaEntrega','pendiente',100)";

			mysqli_query($conexion, $sql);
		}

		$idPedido = mysqli_insert_id($conexion);

		$nombre = $_SESSION['datosDestinatario'][0];
		$apellido = $_SESSION['datosDestinatario'][1];
		$localidad = $_SESSION['datosDestinatario'][2];
		$cp = $_SESSION['datosDestinatario'][3];
		$phone = $_SESSION['datosDestinatario'][4];
		$mensaje = $_SESSION['datosDestinatario'][5];

		$sql_dest = "insert into destinatario(Codigo_de_Pedido, Nombre, Apellido_destinatario, Telefono, Email, Calle, Numero, Localidad, Partido, CP, Observacion, IDDestinatario, IDPedido) values(51,'$nombre','$apellido',$phone,'maria@gmail.com','Laprida',58,'$localidad','Zona Sur','$cp','Entrega Unica',81,$idPedido)";	

		mysqli_query($conexion,$sql_dest);

	unset($_SESSION['carrito']);
	unset($_SESSION['fechaEntrega']);
	unset($_SESSION['datosCliente']);
	unset($_SESSION['datosDestinatario']);
	unset($_SESSION['total']);
	unset($_SESSION['confirmarCompra']);
	unset($_SESSION['pago']);

	$_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Gracias por tu compra. Tu pedido se encuentra en Estado Pendiente bajo el código número 123456.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

		header("Location:../realizarpago.php");



	}catch(Exception $e){
		echo $e->getMessage();
	}

}



?>