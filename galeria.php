<?php 
//include 'app/conexion.php';
//cadena de conexion
$conexion = mysqli_connect("localhost", "root","","floreria");
if (!$conexion)
    die("No existe la base de datos" .mysqli_connect_error()); //si no existe la base de datos

$sql = "SELECT * FROM producto_catalogo";

$result = mysqli_query($conexion,$sql);

// array = [1,2,3,4] o array2 = ["primero"=>1,"segundo"=>2,""] (array asociativo)
/*echo "<pre>";
while($reg = mysqli_fetch_assoc($result)){	
	print_r($reg);	
}  
echo "</pre>";	*/




include 'sections/header.php';
?>

        <div class="flores">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            	<?php while($reg = mysqli_fetch_assoc($result)){ ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="producto.php?id=<?php echo $reg['IDProducto_Catalogo'] ?>"><img src="imagenes/<?php echo $reg["Imagen_del_AF"] ?>" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $reg["Nombre_del_AF"]?></h5>
                            <p class="card-text">Precio: <?php  echo $reg["Precio_del_AF"]?></p>
                            <a href="#" class="btn btn-primary">Añadir al carrito</a>
                        </div>
                    </div>
                </div>
            	<?php }	?>

                <!--<div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">B - Arreglo Multicolor de Rosas y Flores de estacion</h5>
                            <p class="card-text">Precio: 6000</p>
                            <a href="#" class="btn btn-primary">Añadir al carrito</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    
<?php 
include 'sections/footer.php';
?>
