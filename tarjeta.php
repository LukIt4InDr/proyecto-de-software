<?php 

include 'app/conexion.php';
$id = $_GET['id']; 

$sql = "select * from tarjeta where ID_Tarjeta=$id";

$result = mysqli_query($conexion, $sql);

$reg = mysqli_fetch_assoc($result);


/*echo "<pre>";
print_r($reg);
echo "</pre>";*/


include 'sections/header.php';

?>
<section class="container mt-2">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<img src="imagenes/<?php echo  $reg["imagen"] ?>" alt="<?php echo  $reg["imagen"] ?>" width="100%">
		</div>
		<div class="col-md-4">
			<h2><?php echo  $reg["Nombre"] ?></h2>	
			<p>Precio: <?php echo $reg["Precio"] ?></p>		
			<form action="datoscompra.php" method="POST">				
				<input type="hidden" name="id_card" value="<?php echo  $reg["ID_Tarjeta"] ?>">
				<input type="hidden" name="nombre_card" value="<?php echo  $reg["Nombre"] ?>">
				<input type="hidden" name="precio_card" value="<?php echo  $reg["Precio"] ?>">
				<input type="submit" value="Añadir" name="card" class="btn btn-primary">
			</form>		
		</div>
	</div>
</section>


<?php

include 'sections/footer.php';

 ?>
