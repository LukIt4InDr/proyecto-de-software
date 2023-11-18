<?php 

session_start();

/*if(isset($_SESSION["user"])){
	if($_SESSION["user"]["IDPerfil_Cargo"] != 20 ){
		header("Location:index.php");
	}
}*/

include 'conexion.php';

$id = $_POST['idpedido'];
$estado = $_POST['estado'];

$sql = "update pedido set Estado_Actual = '$estado' where IDPedido=$id";

$result = mysqli_query($conexion, $sql);

if($result){
	$_SESSION['message'] = '<div class="alert alert-success alert-dismissible text-center fade show" role="alert">Pedido actualizado. Tu pedido ha sido preparado.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';
}

header("Location:../preparar_envios.php");

