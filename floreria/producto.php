<?php 
$conexion = mysqli_connect("localhost", "root","","floreria");
if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error()); //si no existe la base de datos

$id = $_GET['id'];

$sql = "select * from producto_catalogo where IDProducto_Catalogo=$id";

$result = mysqli_query($conexion, $sql);

$reg = mysqli_fetch_assoc($result);

/*echo "<pre>";

print_r($reg);	

echo "</pre>";	*/





include 'sections/header.php';
?>
<section class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="imagenes/<?php echo  $reg["Imagen_del_AF"] ?>" alt="<?php echo  $reg["Imagen_del_AF"] ?>">
		</div>
		<div class="col-md-6">
			<h2><?php echo  $reg["Nombre_del_AF"] ?></h2>
			<p>Cantidad: <?php echo  $reg["Descripcion_del_AF"] ?> cada ramo</p>
			<form action="app/carrito.php" method="POST">
				<div class="mb-3">
					<input type="text" class="form-control w-50" name="cantidad" placeholder="ingrese cantidad">
				</div>
				<input type="hidden" name="precio" value="">
				<input type="hidden" name="userid" value="">				
				<input type="submit" value="agregar Carrito" class="btn btn-primary">
			</form>
		</div>
	</div>
</section>
