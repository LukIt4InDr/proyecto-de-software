<?php
session_start();

include 'app/conexion.php';
include 'sections/header.php';

if (!empty($_GET["busqueda"]))
{
	$sql = "select pedido.IDPedido, 
	pedido.Estado_Actual, 
	destinatario.Codigo_de_Pedido 
	from pedido INNER JOIN destinatario on 
	pedido.IDPedido = destinatario.IDPedido 
	where Estado_Actual!='pendiente'
	AND 
	pedido.Estado_Actual LIKE '%$_GET[busqueda]%'
	OR destinatario.Codigo_de_Pedido LIKE '%$_GET[busqueda]%'
	";

	$result = mysqli_query($conexion, $sql);
}
else
{
	$sql = "select pedido.IDPedido, pedido.Estado_Actual, destinatario.Codigo_de_Pedido from pedido INNER JOIN destinatario on pedido.IDPedido = destinatario.IDPedido where Estado_Actual!='pendiente'";

	$result = mysqli_query($conexion, $sql);
}
 ?>
<div class="container">
	<div class="row">
		<?php
		if(isset($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}

		 ?>
	</div>
	<div class="row d-flex justify-content-end">
		<h1 class="text-center my-3">ENVIO DE PEDIDOS</h1>

		<form action="envio_pedidos.php" method="get" class="d-flex mb-4">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busqueda" id="busqueda">
                    <button class="btn btn-primary">Buscar</button>
                </form>

		<hr>			
		<table class="table table-striped table-hover text-center">
		  <thead>
		    <tr>
		      <th scope="col">Codigo del Pedido</th>		      
		      <th scope="col">Estado</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($env = mysqli_fetch_assoc($result)){ ?>
		    <tr>		      
		      <td>
		      	<a class='btn btn-primary' href="envio.php?id=<?php echo $env["IDPedido"] ?>"><?php echo $env["Codigo_de_Pedido"] ?></a>
		      </td>		      
		      <td>		      	
		      	<label><?php echo $env["Estado_Actual"] ?></label>		      	
		      </td>
		    </tr>	
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