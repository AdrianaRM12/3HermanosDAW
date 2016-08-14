<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>


<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>
	
	<div class="container"><br><br>
		<center><h1>Cajero</h1></center>
		<div class="panel panel-info">
		   
			<table class="table table-responsive table-striped table-bordered table-hover">
				<div class="panel-heading">Tabla Cajero</div>
				
					<tr>
						<td colspan="6" class="success"><a href="agrCajero">Agregar Cajero</a></td>
					</tr>
					<tr>
						<th>id_Cajero</th>
						<th>Nombre</th>
						
						<th colspan="2">Acciones</th>
					</tr>
							<?php
							if(isset($cajero)){
								foreach($cajero as $u){
									echo "<tr>";
									echo "<td>" . $u->id_Cajero . "</td>";
									echo "<td>" . $u->Nombre . "</td>";
									echo "<td class='warning'><a href='actCajero/$u->id_Cajero'>"
											. "<span class='hidden-xs'>Modificar</span>"
											. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
											. "</a></td>";
											
									echo "<td class='danger'><a href='delCajero/$u->id_Cajero' class='ask-custom'>"
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
     
    	
	<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
	
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>













