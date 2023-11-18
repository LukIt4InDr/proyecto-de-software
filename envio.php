<?php

include 'app/conexion.php';

$id = $_GET['id'];

$sql = "select pedido.IDPedido, destinatario.Nombre, destinatario.Apellido_destinatario, destinatario.Calle, destinatario.Numero, destinatario.Localidad, destinatario.Partido, destinatario.CP, destinatario.Telefono, destinatario.Email, producto_catalogo.Nombre_del_AF, pedido.Estado_Actual from pedido INNER JOIN destinatario on pedido.IDPedido = destinatario.IDPedido INNER JOIN producto_catalogo ON producto_catalogo.IDProducto_Catalogo = pedido.IDProducto_Catalogo where pedido.IDPedido = $id";

$result = mysqli_query($conexion, $sql);

$env = mysqli_fetch_assoc($result);

include 'sections/header.php';

/*echo "<pre>";
print_r($env);
echo "</pre>";*/

/*foreach($env as $i => $value){
	echo "$i => $value<br>";
}*/

?>

<div class="container">
	<div class="row">
		
	</div>
	<section class="row d-flex justify-content-end">
		<h1 class="text-center my-3">DATOS DEL PEDIDO <?php echo $env["Nombre_del_AF"] ?></h1>
		<hr>
		<table class="table w-75 mx-auto text-center">
			<thead>
				<tr>
					<th>Datos</th>
					<th>Información</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($env as $i => $value){ ?>
				<tr>
					<th><?php echo $i ?></th>
					<td><?php echo $value ?></td>
				</tr>
				<?php }?>				
			</tbody>
		</table>		
	</section>
	<div class="row">
		<div class="col-sm-12 text-center">
			<a href="app/envioPreparado.php?id=<?php echo $env['IDPedido'] ?>" class="btn btn-primary">Enviar Pedido</a>
		</div>
	</div>
</div>

<?php 


include 'sections/footer.php';

?>