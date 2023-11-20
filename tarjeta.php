<?php
session_start();

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

<div class="container">

	<h1>Tarjeta</h1>

	<div class="card text-center mt-4" style="width: 18rem;  margin: auto;">
		<h5><?php echo $reg["Nombre"] ?></h5>
		<img src="imagenes/<?php echo $reg["imagen"] ?>.jpg" alt="<?php echo $reg["imagen"] ?>" width="100%">

		</a>
		<div class="card-body">
			<h5 class="card-title">
				<p>Precio: $<?php echo $reg["Precio"] ?></p>

			</h5>

			<form action="datoscompra.php" method="POST">
				<input type="hidden" name="id_card" value="<?php echo  $reg["ID_Tarjeta"] ?>">
				<input type="hidden" name="nombre_card" value="<?php echo  $reg["Nombre"] ?>">
				<input type="hidden" name="precio_card" value="<?php echo  $reg["Precio"] ?>">
				<input type="hidden" name="nombreFoto" value="<?php echo $reg["imagen"] ?>">
				<input type="submit" value="Continuar" name="card" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
<?php

include 'sections/footer.php';

 ?>