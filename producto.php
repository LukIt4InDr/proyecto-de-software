<?php 
session_start();
include 'app/conexion.php';

$id = $_GET['id'];

$sql = "select * from producto_catalogo where IDProducto_Catalogo=$id";

$result = mysqli_query($conexion, $sql);

$reg = mysqli_fetch_assoc($result);

include 'sections/header.php';
?>
<section class="container">
	<div class="row">
		<div class="col-md-6 mt-4">
			<img src="imagenes/<?php echo  $reg["Imagen_del_AF"] ?>" alt="<?php echo  $reg["Imagen_del_AF"] ?>" class="rounded">
		</div>
		<div class="col-md-6">
			<h2><?php echo  $reg["Nombre_del_AF"] ?></h2>
			<p>Cantidad: <?php echo  $reg["Descripcion_del_AF"] ?> cada ramo</p>
			<p>Precio: $<?php echo $reg["Precio_del_AF"] ?></p>
			<form action="app/cart.php" method="POST">
				<div class="mb-3">
					<input type="number" class="form-control w-50" name="cantidad" placeholder="ingrese cantidad" required min="1" value="1">
				</div>
				<input type="hidden" name="precio" value="<?php echo $reg["Precio_del_AF"] ?>">
				<input type="hidden" name="prodId" value="<?php echo $reg["IDProducto_Catalogo"] ?>">				
				<input type="hidden" name="nombreProducto" value="<?php echo $reg["Nombre_del_AF"] ?>">				

				<?php
				if (!empty($_SESSION['user']))
				{
					echo "<input type='submit' value='Agregar al Carrito' class='btn btn-primary'>";
				} 
				else
				{
					echo "<a href='login.php' class='btn btn-primary'>Inicie sesion para comprar</a>";
				}
				?>
			</form>
			<?php if(isset($_SESSION['carrito'])){ ?>
			<div class="mb-3 mt-3">
				<a href="realizarcompra.php" class="btn btn-success">Ver compra</a>
				<a href="galeria.php" class="btn btn-primary">Comprar distintos arreglos florales</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php require_once 'sections/footer.php'; ?>