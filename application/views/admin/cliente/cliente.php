<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>

	<div class="container"><br><br>
		<center><h1>Cliente</h1></center>
		
		
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
						<center><input type="submit" value="Generar" name="reporteC"><center>
					</form>
					<form action="generarXML">
					<h1>XML</h1>
						<input type="submit" value="Generar"><br>
					</form>
					<br>
				</div>
			</div>
		
		
		
		<div class="col-sm-9 col-lg-9 " >
			<div class="panel panel-info">
			   
			<table class="table table-responsive table-striped table-bordered table-hover">
				<div class="panel-heading">Tabla Cliente</div>
				
				<tr>
					<td colspan="6" class="success"><a href="agrCliente">Agregar Cliente</a></td>
				</tr>
				<tr>
					
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Direccion</th>
					
					
					<th colspan="2">Acciones</th>
				</tr>
			<?php
			if(isset($cliente)){
				foreach($cliente as $u){
					echo "<tr>";
				   
					echo "<td>" . $u->Nombre . "</td>";
					echo "<td>" . $u->Telefono . "</td>";
					echo "<td>" . $u->Direccion . "</td>";
					
					echo "<td class='warning'><a href='actCliente/$u->id_Cliente'>"
							. "<span class='hidden-xs'>Modificar</span>"
							. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
							. "</a></td>";
							
					echo "<td class='danger'><a href='delCliente/$u->id_Cliente' class='ask-custom'>"
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
			<br>
		</div>
	</div>
	
	<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
</div>
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>













