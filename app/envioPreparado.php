<?php

session_start();


/*if(isset($_SESSION["user"])){
	if($_SESSION["user"]["IDPerfil_Cargo"] != 20 ){
		header("Location:index.php");
	}
}*/

include 'conexion.php';

$estado = "enviado";

$id = $_GET['id'];

$sql = "update pedido set Estado_Actual = '$estado' where IDPedido=$id";

$result = mysqli_query($conexion, $sql);

$num_rand = mt_rand(1000, 9999);

//echo $num_rand;

//exit();

if($result){
	$_SESSION['message'] = "<div class='alert alert-success alert-dismissible text-center fade show' role='alert'>Pedido Enviado<br>Tu pedido se encuentra en Estado Enviado bajo el código de estado número $num_rand <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>";	
}

header("Location:../envio_pedidos.php");