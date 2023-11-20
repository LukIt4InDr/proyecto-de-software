<?php
session_start();

include 'conexion.php';

	$fechaEntrega = $_SESSION['fechaEntrega'];
	$total = $_SESSION['total'];

	try{

		$sql_venta = "insert into venta(total) values($total)";
		mysqli_query($conexion, $sql_venta); 

		foreach($_SESSION['carrito'] as $cart){
			$cantidad = $cart['cantidad'];			
			$precio = $cart['precio'];
			$idprod = $cart['prod_id']; 

			$sql = "insert into pedido(Cantidad, Precio, Fecha_Entrega, Estado_Actual, IDProducto_Catalogo) values($cantidad,$precio,'$fechaEntrega','pendiente',$idprod)";

			mysqli_query($conexion, $sql);
		}

		$idPedido = mysqli_insert_id($conexion);

		//datos destinatario
		$nombre = $_SESSION['datosDestinatario'][0];
		$apellido = $_SESSION['datosDestinatario'][1];
		$calle = $_SESSION['datosDestinatario'][2];
		$num = $_SESSION['datosDestinatario'][3];
		$localidad = $_SESSION['datosDestinatario'][4];
		$cp = $_SESSION['datosDestinatario'][5];
		$phone = $_SESSION['datosDestinatario'][6];
		$mensaje = $_SESSION['datosDestinatario'][7];
		$codigo_pedido = mt_rand(100000, 999999);
		

		$sql_dest = "insert into destinatario
		(Codigo_de_Pedido, 
		Nombre, 
		Apellido_destinatario, 
		Telefono, 
		Email, 
		Calle, 
		Numero, 
		Localidad, 
		Partido, 
		CP, 
		Producto, 
		Observacion, 
		IDPedido, 
		tarjeta, 
		tarjeta_mensaje) 

		values(
		$codigo_pedido,
		'$nombre',
		'$apellido',
		$phone,
		'maria@gmail.com',
		'$calle',
		$num,
		'$localidad',
		'$localidad',
		'$cp',
		'',
		'Entrega Unica',
		$idPedido, 
		'$_SESSION[tarjetaNombre]',
		'$_SESSION[tarjetaMensaje]')";

		mysqli_query($conexion,$sql_dest);

		//datos cliente
		$nombre = $_SESSION['datosCliente'][0];
		$apellido = $_SESSION['datosCliente'][1];				
		$calle = $_SESSION['datosCliente'][2];
		$num = $_SESSION['datosCliente'][3];
		$localidad = $_SESSION['datosCliente'][4];
		$cp = $_SESSION['datosCliente'][5];
		$email = $_SESSION['datosCliente'][6];		
		$phone = $_SESSION['datosCliente'][7];		
		$usuario = $_SESSION['user']['Nombre_de_Usuario'];
		

		$sql_client = "insert into cliente_empresa(Nombre, ApellidoDeCliente, Email, Telefono, Calle, Numero, Localidad, Partido, CP, Usuario) values('$nombre','$apellido', '$email', $phone,'$calle',$num,'$localidad','$localidad','$cp','$usuario')";

		mysqli_query($conexion,$sql_client);

		//limpia
	
		require "limpiarDatos.php";

		$_SESSION['codigo'] = $codigo_pedido;

		$_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Gracias por tu compra. Tu pedido se encuentra en Estado Pendiente bajo el código número ' . $_SESSION['codigo'] . ' Cuando esté en camino te enviaremos un e-mail para que puedas hacer el seguimiento.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div><div class="d-flex justify-content-end">';

		//redireccion
		header("Location:../index.php");

	}catch(Exception $e){
		echo $e->getMessage();
		echo "error";
	}

?>