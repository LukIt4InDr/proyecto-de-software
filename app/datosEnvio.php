<?php

session_start();

if(isset($_POST['btnFechaEntrega'])){

	$fechaEntrega = $_POST['fechaEntrega'];

	$_SESSION['fechaEntrega'] = $fechaEntrega;

	header("Location:../fechaentrega.php");

}

if(isset($_POST['btnCliente'])){

	$nombreCliente = $_POST['nombreCliente'];
	$apellido = $_POST['apellido'];
	$domicilio = $_POST['domicilio'];
	$cp = $_POST['cp'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$datosCliente = [$nombreCliente, $apellido, $domicilio, $cp, $email, $phone];

	$_SESSION['datosCliente'] = $datosCliente;

	header('Location:../destinatario.php');

}

if(isset($_POST['btnDest'])){

	$nombreDest = $_POST['nombreDest'];
	$apellidoDest = $_POST['apellidoDest'];
	$domDest = $_POST['domDest'];
	$cpDest = $_POST['cpDest'];		
	$phoneDest = $_POST['phoneDest'];
	$mensajeDest = $_POST['mensajeDest'];

	$datosDest = [$nombreDest, $apellidoDest, $domDest, $cpDest, $phoneDest, $mensajeDest];

	$_SESSION['datosDestinatario'] = $datosDest;

	header('Location:../datoscompra.php');

}
