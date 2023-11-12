<?php 
session_start();
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
/*
echo "<pre>";
	print_r($_SESSION);
echo "</pre>";*/

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
			<form action="app/cart.php" method="POST">
				<div class="mb-3">
					<input type="number" class="form-control w-50" name="cantidad" placeholder="ingrese cantidad" required>
				</div>
				<input type="hidden" name="precio" value="<?php echo $reg["Precio_del_AF"] ?>">
				<input type="hidden" name="prodId" value="<?php echo $reg["IDProducto_Catalogo"] ?>">				
				<input type="hidden" name="nombreProducto" value="<?php echo $reg["Nombre_del_AF"] ?>">				
				<input type="submit" value="agregar Carrito" class="btn btn-primary">
			</form>
			<?php if(isset($_SESSION['carrito'])){ ?>
			<div class="mb-3 mt-3">
				<a href="realizarcompra.php" class="btn btn-success">Ver compra</a>
				<a href="galeria.php" class="btn btn-info">Comprar distintos arreglos florales</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php require_once 'sections/footer.php'; ?>