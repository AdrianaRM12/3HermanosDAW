<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>

	<div class="container"><br><br>
		<center><h1>Ventas</h1></center>
		
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
						<center><input type="submit" value="Generar" name="reporteV"></center>
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
				<div class="panel-heading">Tabla ventas</div>
				<tr>
					<td colspan="8" class="success"><a href="agrVenta">Agregar Venta</a></td>
				</tr>
				<tr>
					<th>Total</th>
					<th>id_Vendedor</th>
					<th>id_Cajero</th>
					<th>id_Calzado</th>
					<th>Fecha</th>
					<th>id_Cliente</th>
					
					<th colspan="2">Acciones</th>
				</tr>
					<?php
					if(isset($venta)){
						foreach($venta as $u){
							echo "<tr>";
							echo "<td> $" . $u->Total . "</td>";
							echo "<td>" . $u->id_Vendedor . "</td>";
							echo "<td>" . $u->id_Cajero . "</td>";
							echo "<td>" . $u->id_Calzado . "</td>";
							echo "<td>" . $u->Fecha . "</td>";
							echo "<td>" . $u->id_Cliente . "</td>";
							echo "<td class='warning'><a href='frmUpVenta/$u->id_Venta'>"
									. "<span class='hidden-xs'>Modificar</span>"
									. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
									. "</a></td>";
									
							echo "<td class='danger'><a href='delVenta/$u->id_Venta' class='ask-custom'>"
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
	</div>
 
	</div>
		<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
	</div>
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>











