<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>


<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>
	
	<div class="container"><br><br>
		<center><h1>Calzado</h1></center>
		
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
						<center><input type="submit" value="Generar" name="reporteP"></center>
					</form>
					<form action="generarXML">
					<h1>XML</h1>
						<center><input type="submit" value="Generar"></center>
					</form>
					<br>
				</div>
			</div>
			
			<div class="col-sm-9 col-lg-9">
				<div class="panel panel-info">
				<table class="table table-responsive table-striped table-bordered table-hover well">
					<?php echo $this->pagination->create_links();?>
					<div class="panel-heading">Tabla calzado</div>
					<tr>
						<td colspan="8" class="success"><a href="agrCalzado">Nuevo Calzado</a></td>
					</tr>
					
					<tr>
						<th>Nombre</th>
						<th class="hidden-xs">Precio</th>
						<th>Descripción</th>
						<th>Id_Categoria</th>
						<th>Stock</th>
						<th>Id_Marca</th>
						<th colspan="2">Acciones</th>
					</tr>
					
					<?php
					if(isset($producto)){
						foreach($producto as $u){
							echo "<tr>";
							echo "<td>" . $u->Nombre . "</td>";
							echo "<td class='hidden-xs'> " . $u->Precio . "</td>";
							echo "<td>" . $u->Descripcion . "</td>";
							echo "<td>" . $u->id_Categoria . "</td>";
							echo "<td>" . $u->Stock . "</td>";
							echo "<td>" . $u->id_Marca . "</td>";
							?>
							<td class='warning'>
							<a href="<?php
							if($this->uri->segment(3)== null){
								echo "UpProducto/$u->id_Calzado";
							}else{
								echo "../UpProducto/$u->id_Calzado";
							}
							?>
							">
							<?php
							echo	"<span class='hidden-xs'>Modificar</span>"
									. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
									. "</a></td>";
							?>
							
							<td class='danger'>
							<a class= 'ask-custom' href=" 
							<?php 
								if($this->uri->segment(3) == null){
									echo "delProducto/$u->id_Calzado";
								}else{
									echo "../delProducto/$u->id_Calzado";
								}
							?>
							  ">
							<?php
								echo "<span class='hidden-xs'>Eliminar</span>"
									."<span class='visible-xs glyphicon glyphicon-trash' </span>"
									. "</a></td>";
							echo "</tr>";
						}
					}else{
						echo "Sin registros a mostrar";
					}
					?>
					
					
				</table>
				
				<button class="visible-xs"type="button"> Mas</button>
		</div>
				
	</div>
	</div>
		<center>
			<a href="cerrarSesion"> <h6>Cerrar sesión</h6></a>
		</center>
	</div>
	
	
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>












