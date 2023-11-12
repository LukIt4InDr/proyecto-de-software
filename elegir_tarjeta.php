<?php

include 'app/conexion.php';

$sql = "select * from tarjeta";

$result = mysqli_query($conexion, $sql);

include 'sections/header.php';

?>

<h1>ELEGIR TARJETA PREDISEÑADA</h1>
<hr>
<div class="container">
	<div class="row">
		<?php while($reg = mysqli_fetch_assoc($result)){ ?>
		<div class="col-sm-4">			
			<div class="card">
			  	<a href="tarjeta.php?id=<?php echo $reg["ID_Tarjeta"] ?>">
				<img src="imagenes/<?php echo $reg["imagen"] ?>" class="card-img-top" alt="..." width="100%">
			</a>
				<div class="card-body">
				    <h5 class="card-title"><?php echo $reg["Nombre"] ?></h5>
				    <p class="card-text"><?php echo $reg["Precio"] ?></p>
				    <a href="#" class="btn btn-primary btn-sm">+</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php

include 'sections/footer.php';

?>