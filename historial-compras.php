<?php 

session_start();

include 'app/conexion.php';

$sql = "select * from pedido"; //consulta que deberia ir a la tabla cliente, relacionada con el pedido
$result =mysqli_query($conexion, $sql);

$sqlCalificados = "select * from 
pedido inner join calificacion 
on pedido.IDPedido = calificacion.id_pedido";
$resultCalificados =mysqli_query($conexion, $sqlCalificados);
include 'sections/header.php';

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
	<div class="row mt-4">				

		<h1>Historial de compras</h1>
		<hr>

		<h2>Sin calificar</h2>

		<table class="table table-danger table-striped-columns text-center">
		  <thead>
		    <tr>		      
		      <th scope="col">ID del pedido</th>	
			  <th scope="col" class="text-center">Estado</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($comp = mysqli_fetch_assoc($result)){ ?>
		    <tr>		      
				
		      	<td><?php echo $comp['IDPedido'] ?></td>
		      <?php if($comp['Estado_Actual'] != "enviado"){ ?>		      
		      	<td class="d-flex justify-content-center"><?php echo $comp['Estado_Actual'] ?></td>		      
		      <?php }else{ ?>		      
				<td class="d-flex justify-content-center">		  
		      		<a href="calificarCompra.php?id=<?php echo $comp['IDPedido'] ?>" class="btn btn-primary">Calificar Compra</a>    			      
		      	</td>		 
				  
		  		<?php } ?>
		    <?php }?>	   

		  </tbody>
		</table>

		<h2>Pedidos calificados</h2>

		<table class="table table-danger table-striped-columns text-center">
		  <thead>
		    <tr>		      
		      <th scope="col">ID del pedido</th>	
			  <th>Puntaje</th>	      
			  <th>Comentario</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($comp = mysqli_fetch_assoc($resultCalificados)){ ?>
		    <tr>		      
				
		      	<td><?php echo $comp['IDPedido'] ?></td>
				<td><?php echo $comp['puntaje'] ?></td>     		      
				<td><?php echo $comp['comentario'] ?></td>
				  
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