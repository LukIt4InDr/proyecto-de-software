<?php

session_start();

include 'app/conexion.php';

if (!empty($_GET["resultadoSinCalificar"])) {
    $sql = "select * from pedido
	WHERE 
	IDPedido LIKE '%$_GET[resultadoSinCalificar]%'
	OR Estado_Actual LIKE '%$_GET[resultadoSinCalificar]%'"; //consulta que deberia ir a la tabla cliente, relacionada con el pedido
    $result = mysqli_query($conexion, $sql);
} else {
    $sql = "select * from pedido"; //consulta que deberia ir a la tabla cliente, relacionada con el pedido
    $result = mysqli_query($conexion, $sql);
}


include 'sections/header.php';

?>
<div class="container">
    <div class="row">
        <?php

        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }

        ?>
    </div>
    <div class="row mt-4">

        <h1>Historial de compras</h1>
        <hr>

        <h2>Sin calificar</h2>

        <form action="historial_compras_sin_calificar.php" method="get" class="d-flex mb-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"
                name="resultadoSinCalificar" id="resultadoSinCalificar">
            <button class="btn btn-primary">Buscar</button>
        </form>

        <table class="table table-danger table-striped table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID del pedido</th>
                    <th scope="col" class="text-center">Estado</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($comp = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                        <td>
                            <?php echo $comp['IDPedido'] ?>
                        </td>
                        <td>
                            <?php echo $comp['Estado_Actual'] ?>
                        </td>
                        <td>
                            <?php
                            if ($comp['Estado_Actual'] != "enviado") {
                                echo "No disponible";
                            } else {
                                echo "<a href='calificarCompra.php?id=<php echo $comp[IDPedido] ?>' class='btn btn-primary'>Calificar Compra</a>";

                            }
                            ?>
                        <?php } ?>

            </tbody>
        </table>

  

    </div>
    <div class="row">
        <div class="col-sm text-center">
            <a href="index.php" class="btn btn-primary">Pagina Principal</a>
        </div>
    </div>
</div>
<?php

include 'sections/footer.php';

?>