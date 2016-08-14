<?php $this->load->view('plantilla3HerCajero/head'); ?>
<?php $this->load->view('plantilla3HerCajero/nav2'); ?>



	<div class="container"><br><br><br>
		<center><h1>Apartado</h1></center>
		<div class="row">
		
			<div class="panel panel-info">
				<div class="panel-heading">Tabla Apartado</div>
				   
					<table class="table table-responsive table-striped table-bordered table-hover">
						<tr>
							<td colspan="6"><a href="agrApartado">Agregar Apartado</a></td>
						</tr>
						
						<tr>
							<th>Total Abono</th>
							<th>Total a pagar</th>
							<th>Id_Cliente</th>
							<th>Status</th>
							<th colspan="1">Acciones</th>
						</tr>
						<?php
						if(isset($apartado)){
							foreach($apartado as $u){
								echo "<tr>";
								echo "<td>" . $u->Abono_total . "</td>";
								echo "<td>" . $u->Total_AP . "</td>";
								echo "<td>" . $u->id_Cliente . "</td>";
								
								$status = ($u->aStatus == 1) ? 'Pagado' : 'Por pagar';
									
								echo "<td><a href='cambiarStatus/$u->id_Apartado/$u->aStatus'>" . $status ."</a></td>";
								
								
								echo "<td><a href='actApartado/$u->id_Apartado'>"
										. "<span class='hidden-xs'>Modificar</span>"
										. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
										. "</a></td>";
								
								echo "</tr>";
						}
					}else{
						echo "Sin registros a mostrar";
					}
					?>
					</table>
						<button class="visible-xs" type="button">Más</button>
				</div>
						<br>
		</div>
		
		<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
		
	</div>
<?php $this->load->view('plantilla3HerCajero/footer'); ?>









