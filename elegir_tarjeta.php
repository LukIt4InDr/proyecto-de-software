<?php

session_start();

include 'app/conexion.php';

$sql = "select * from tarjeta";

$result = mysqli_query($conexion, $sql);

include 'sections/header.php';

?>

<h1>ELEGIR TARJETA PREDISEÑADA</h1>
<hr>
<div class="container">
	<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php while($reg = mysqli_fetch_assoc($result)){ ?>
		<div class="col-sm-4">			
			<div class="card galeria-card">
			  	<a href="tarjeta.php?id=<?php echo $reg["ID_Tarjeta"] ?>">
				<img src="imagenes/<?php echo $reg["imagen"] ?>.jpg" class="card-img-top" alt="..." height="250px">
			</a>
				<div class="card-body">
				    <h5 class="card-title"><?php echo $reg["Nombre"] ?></h5>
				    <p class="card-text">Precio: $<?php echo $reg["Precio"] ?></p>
				    <a href="tarjeta.php?id=<?php echo $reg["ID_Tarjeta"] ?>" class="btn btn-primary">Seleccionar tarjeta</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php

include 'sections/footer.php';

?>