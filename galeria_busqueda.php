<?php
session_start();
include 'app/conexion.php';
$busqueda = $_GET["busqueda"];
$sql = "SELECT * FROM producto_catalogo WHERE Nombre_del_AF LIKE '%$busqueda%'";

$result = mysqli_query($conexion, $sql);

include 'sections/header.php';
?>

<div class="flores">
    <div class="row row-cols-1 row-cols-md-3 g-4 " >
        <?php while ($reg = mysqli_fetch_assoc($result)) { ?>
            <div class="col">
                <div class="card galeria-card" style="width: 18rem">
                    <a href="producto.php?id=<?php echo $reg['IDProducto_Catalogo'] ?>"><img
                            src="imagenes/<?php echo $reg["Imagen_del_AF"] ?>" class="card-img-top " alt="..."></a>
                    <div class="card-body ">
                        <h5 class="card-title">
                            <?php echo $reg["Nombre_del_AF"] ?>
                        </h5>
                        <p class="card-text">Precio: $
                            <?php echo $reg["Precio_del_AF"] ?>
                        </p>
                        <a href="producto.php?id=<?php echo $reg['IDProducto_Catalogo'] ?>" class="btn btn-primary">Ver
                            mas</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
include 'sections/footer.php';
?>