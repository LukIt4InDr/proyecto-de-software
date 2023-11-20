<?php

session_start();

/*if(isset($_SESSION["user"])){
    if($_SESSION["user"]["IDPerfil_Cargo"] != 1 ){
        header("Location:index.php");
    }
}*/

include 'app/conexion.php';

if (!empty($_GET['resultadoCalificados'])) {
    $sqlCalificados = "select * from 
    pedido inner join calificacion 
    on pedido.IDPedido = calificacion.id_pedido
    WHERE
    IDPedido LIKE '%$_GET[resultadoCalificados]%'
    OR puntaje LIKE '%$_GET[resultadoCalificados]%'
    OR comentario LIKE '%$_GET[resultadoCalificados]%'
    ";
    $resultCalificados = mysqli_query($conexion, $sqlCalificados);
} 
else 
{
    $sqlCalificados = "select * from 
    pedido inner join calificacion 
    on pedido.IDPedido = calificacion.id_pedido";
    $resultCalificados = mysqli_query($conexion, $sqlCalificados);
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

        <h2>Pedidos calificados</h2>

        <form action="historial_compras_calificados.php" method="get" class="d-flex mb-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"
                name="resultadoCalificados" id="resultadoCalificados">
            <button class="btn btn-primary">Buscar</button>
        </form>

        <table class="table table-danger table-striped table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID del pedido</th>
                    <th>Puntaje</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($comp = mysqli_fetch_assoc($resultCalificados)) { ?>
                    <tr>

                        <td>
                            <?php echo $comp['IDPedido'] ?>
                        </td>
                        <td>
                            <?php echo $comp['puntaje'] ?>
                        </td>
                        <td>
                            <?php echo $comp['comentario'] ?>
                        </td>

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