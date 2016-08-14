<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>

	<div class="container"><br><br>
		<center><h1>Marca</h1></center>
		<div class="panel panel-info">
			<div class="panel-heading">Tabla Marcas</div>
		   
		<table class="table table-responsive table-striped table-bordered table-hover">
		
			<tr>
				<td colspan="6" class="success"><a href="agrMarca">Agregar Marca</a></td>
			</tr>
			<tr>
				<th>id_Marca</th>
				<th>Nombre</th>
				
				<th colspan="2">Acciones</th>
			</tr>
				<?php
				if(isset($marca)){
					foreach($marca as $u){
						echo "<tr>";
						echo "<td>" . $u->id_Marca . "</td>";
						echo "<td>" . $u->Nombre . "</td>";
						echo "<td class='warning'><a href='actMarca/$u->id_Marca'>"
								. "<span class='hidden-xs'>Modificar</span>"
								. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
								. "</a></td>";
								
						echo "<td class='danger'><a href='delMarca/$u->id_Marca' class='ask-custom'>"
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
	
	
	<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
	</div>

<?php $this->load->view('plantilla3HerAdmin/footer'); ?>










