<?php 

session_start();

/*if(isset($_SESSION["user"])){
	if($_SESSION["user"]["IDPerfil_Cargo"] != 1 ){
		header("Location:index.php");
	}
}*/

include 'app/conexion.php';

$sql = "select * from pedido"; //consulta que deberia ir a la tabla cliente, relacionada con el pedido

$result =mysqli_query($conexion, $sql);

//$comp = mysqli_fetch_assoc($result);

include 'sections/header.php';

/*echo "<pre>";
print_r($comp);
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
	<div class="row mt-4">				

		<h1>Historial de compras</h1>
		<hr>
		<table class="table table-danger table-striped-columns">
		  <thead>
		    <tr>		      
		      <th scope="col">ID del pedido</th>		      
		      <th scope="col" class="text-center">Calificación</th>
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
		    </tr>	
		    <?php }?>	    		    
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