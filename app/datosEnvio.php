<?php
session_start();
error_reporting(0);

if(isset($_POST['btnFechaEntrega'])){

	$fechaEntrega = $_POST['fechaEntrega'];

	$_SESSION['fechaEntrega'] = $fechaEntrega;

	header("Location:../fechaentrega.php");

}

if(isset($_POST['btnCliente'])){

	$nombreCliente = $_POST['nombreCliente'];
	$apellido = $_POST['apellido'];
	$calle = $_POST['calle'];
	$num = $_POST['num'];
	$loc = $_POST['loc'];
	$cp = $_POST['cp'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$datosCliente = [$nombreCliente, $apellido, $calle, $num, $loc, $cp, $email, $phone];

	$_SESSION['datosCliente'] = $datosCliente;

	header('Location:../destinatario.php');
}

if(isset($_POST['btnDest'])){

	$nombreDest = $_POST['nombreDest'];
	$apellidoDest = $_POST['apellidoDest'];
	$calle = $_POST['calle'];
	$num = $_POST['num'];
	$loc = $_POST['loc'];
	$cpDest = $_POST['cpDest'];		
	$phoneDest = $_POST['phoneDest'];
	$mensajeDest = $_POST['mensajeDest'];

	$datosDest = [$nombreDest, $apellidoDest, $calle, $num, $loc, $cpDest, $phoneDest, $mensajeDest];

	if(isset($_SESSION['datosDestinatario'])){				
		header('Location:../datoscompra.php');
	}else{
		$_SESSION['datosDestinatario'] = $datosDest;	
		header('Location:../destinatario.php');
	}
}
