<?php 
session_start();
include 'app/conexion.php';

$sql = "select pedido.IDPedido, producto_catalogo.Nombre_del_AF, producto_catalogo.IDProducto_Catalogo, pedido.Precio, pedido.Estado_Actual, producto_catalogo.Descripcion_del_AF, destinatario.Codigo_de_Pedido from pedido inner join producto_catalogo on pedido.IDProducto_Catalogo = producto_catalogo.IDProducto_Catalogo inner join destinatario on destinatario.IDPedido = pedido.IDPedido";

$result = mysqli_query($conexion, $sql);
include 'sections/header.php';

/*echo "<pre>";
print_r( mysqli_fetch_assoc($result) );
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
		<h1 class="text-center my-3">PEDIDOS</h1>
		<hr>
		<!--<div class="col-sm-2 my-3">
			<form action="">
				<div class="search"><input type="text" class="form-control" placeholder="buscar"></div>
			</form>			
		</div>-->		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nombre del arreglo</th>
		      <th scope="col">Código del arreglo</th>
		      <th scope="col">Precio del arreglo</th>
		      <th scope="col">Descripción del arreglo</th>
		      <th scope="col">Número del pedido</th>
		      <th scope="col">Estado</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($ped = mysqli_fetch_assoc($result)){ ?>
		    <tr>
		      <td><?php echo $ped["Nombre_del_AF"] ?></td>
		      <td><?php echo $ped["IDProducto_Catalogo"] ?></td>
		      <td><?php echo $ped["Precio"] ?></td>
		      <td><?php echo $ped["Descripcion_del_AF"] ?></td>
		      <td><?php echo $ped["Codigo_de_Pedido"] ?></td>
		      <td>
		      	<?php if($ped["Estado_Actual"] == "preparado"){?>
		      		<label><?php echo $ped["Estado_Actual"] ?></label>
		      	<?php }else{ ?>
		      	<form action="app/estadoEnvio.php" method="POST">
		      		<input type="hidden" value="<?php echo $ped["IDPedido"]?>" name
		      		="idpedido">
		      		<select name="estado" id="" class="form-select w-50 d-inline">
					  	<option selected>Estado del pedido</option>
					  	<option value="preparado">Preparado</option>					    
					    <option value="entregado">Entregado</option>					    
			  		</select>		
			  		<button type="submit" class="btn btn-secondary btn-sm" name="guardar">Guardar</button>
		      	</form>
		      	<?php }?>
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