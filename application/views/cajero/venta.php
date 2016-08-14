<?php $this->load->view('plantilla3HerCajero/head'); ?>
<?php $this->load->view('plantilla3HerCajero/nav2'); ?>



	<div class="container"><br><br><br>
		<center><h1>Venta</h1></center>
		<div class="row">
		
			<div class="panel panel-info">
				<div class="panel-heading">Tabla Venta</div>
			
					<table class="table table-responsive table-striped table-bordered table-hover">
						<tr>
							<td colspan="8"><a href="agreVenta">Agregar nueva venta</a></td>	
						</tr>
							
						<tr>
							<th>Total</th>
							<th>id_Vendedor</th>
							<th>id_Cajero</th>
							<th>id_Calzado</th>
							<th>Fecha</th>
							<th>id_Cliente</th>
						</tr>
						
							<?php
							if(isset($venta)){
								foreach($venta as $u){
									echo "<tr>";
									echo "<td>" . $u->Total . "</td>";
									echo "<td>" . $u->id_Vendedor . "</td>";
									echo "<td>" . $u->id_Cajero . "</td>";
									echo "<td>" . $u->id_Calzado . "</td>";
									echo "<td>" . $u->Fecha . "</td>";
									echo "<td>" . $u->id_Cliente . "</td>";
									
									echo "</tr>";
								}
							}else{
								echo "Sin registros a mostrar";
							}
							?>
					</table>
						<button class="visible-xs" type="button">Más</button>
					</div><br>
			</div>
			
			<center> 
				<a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> 
			</center>
	</div>
<?php $this->load->view('plantilla3HerCajero/footer'); ?>

		











