<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>



	<div class="container"><br><br>
		<center><h1>Apartado</h1></center>
		
		<div class="row">
			<div class="col-sm-3 col-lg-3 " >
				<div class="dash-unit">
					<dtitle>Reportes</dtitle>
					<hr>
					<div class="thumbnail">
						<img src="<?php echo base_url();?>css/images/pic01.png" alt="Marcel Newman" class="img-circle" width='90px' height='90px'>
					</div><!-- /thumbnail -->
					<form action="generarEXCEL">
					<h1>EXCEL</h1>
						<center><input type="submit" value="Generar" name="reporteA"></center>
					</form>
					<form action="generarXML">
					<h1>XML</h1>
						<center><input type="submit" value="Generar"><br><center>
					</form>
					<br>
				</div>
			</div>
		
		<div class="col-sm-9 col-lg-9 " >
			<div class="panel panel-info">
			   
				<table class="table table-responsive table-striped table-bordered table-hover">
					<div class="panel-heading">Tabla Apartado</div>
					<tr>
						<td colspan="6" class="success"><a href="agrApartado">Agregar Apartado</a></td>
					</tr>
					
					<tr>
						<th>Total Abono</th>
						<th>Total a pagar</th>
						<th>Id_Cliente</th>
						<th>Status</th>
						<th colspan="2">Acciones</th>
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
							
							
							echo "<td class='warning'><a href='actApartado/$u->id_Apartado'>"
									. "<span class='hidden-xs'>Modificar</span>"
									. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
									. "</a></td>";
									
							echo "<td class='danger'><a href='delApartado/$u->id_Apartado' class='ask-custom'>"
									. "<span class='hidden-xs'>Eliminar</span>"
									."<span class='visible-xs glyphicon glyphicon-trash' </span>"
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
		</div>
        <br>
		
	</div>
	<center><a href="cerrarSesion"> <h6>Cerrar sesión</h6></a></center>
</div>
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>













