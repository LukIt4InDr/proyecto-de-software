<?php

session_start();

	$fechaEntrega = $_POST['fechaEntrega'];

	$_SESSION['fechaEntrega'] = $fechaEntrega;

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

?>