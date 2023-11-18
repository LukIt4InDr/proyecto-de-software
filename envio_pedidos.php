<?php
session_start();

include 'app/conexion.php';
include 'sections/header.php';

$sql = "select pedido.IDPedido, pedido.Estado_Actual, destinatario.Codigo_de_Pedido from pedido INNER JOIN destinatario on pedido.IDPedido = destinatario.IDPedido where Estado_Actual!='pendiente'";

$result = mysqli_query($conexion, $sql);
/*$env = mysqli_fetch_assoc($result);
echo "<pre>";
print_r($env);
echo "</pre>";*/

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
		<hr>			
		<table class="table">
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
		      	<a href="envio.php?id=<?php echo $env["IDPedido"] ?>"><?php echo $env["Codigo_de_Pedido"] ?></a>
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
			<a href="index.php" class="btn btn-primary btn-sm">Pagina Principal</a>
		</div>		
	</div>
</div>

 <?php

include 'sections/footer.php';
?>