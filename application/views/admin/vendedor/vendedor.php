<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>

	<div class="container"><br><br>
		<center><h1>Vendedor</h1></center>
		<div class="panel panel-info">
		   
		<table class="table table-responsive table-striped table-bordered table-hover">
			<div class="panel-heading">Tabla Vendedor</div>
			
			<tr>
				<td colspan="6" class="success"><a href="agrVendedor">Agregar Vendedor</a></td>
			</tr>
			<tr>
				<th>id_Vendedor</th>
				<th>Nombre</th>
				
				<th colspan="2">Acciones</th>
			</tr>
		<?php
		if(isset($vendedor)){
			foreach($vendedor as $u){
				echo "<tr>";
				echo "<td>" . $u->id_Vendedor . "</td>";
				echo "<td>" . $u->Nombre . "</td>";
				echo "<td class='warning'><a href='actVendedor/$u->id_Vendedor'>"
						. "<span class='hidden-xs'>Modificar</span>"
						. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
						. "</a></td>";
				echo "<td class='danger'><a href='delVendedor/$u->id_Vendedor' class='ask-custom'>"
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












