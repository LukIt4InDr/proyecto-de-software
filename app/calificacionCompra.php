<?php
session_start();
error_reporting(0);

include 'conexion.php';

$id = $_POST['id_pedido'];
$puntaje = $_POST['cali'];
$coment = $_POST['coment'];

$sql_consulta = "select * from pedido inner join calificacion on pedido.IDPedido = calificacion.id_pedido WHERE pedido.IDPedido=$id";

$result = mysqli_query($conexion, $sql_consulta);

if(mysqli_num_rows($result)==1){
	//update pedido set Estado_Actual = '$estado' where IDPedido=$id"
	$sql_update = " update calificacion set puntaje= $puntaje, comentario='$coment' where id_pedido=$id";

	$result = mysqli_query($conexion, $sql_update);

	if($result){
		$_SESSION['message'] = '<div class="alert alert-success alert-dismissible text-center fade show" role="alert">Calificación actualizada<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';	

		header("Location:../historial-compras.php");
		exit();
	}
}


$sql = "insert into calificacion(puntaje, comentario, id_pedido) values($puntaje, '$coment',$id)";

$result = mysqli_query($conexion, $sql);


if($result){
	$_SESSION['message'] = '<div class="alert alert-success alert-dismissible text-center fade show" role="alert">Calificación guardada<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';	
}
header("Location:../historial-compras.php");