<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>


<script type="text/javascript">    
		$(document).ready(function() {
		  $('.ask-custom').jConfirmAction({question : "Estás seguro que quieres eliminar este calzado?", yesAnswer : "Si", cancelAnswer : "No"});
		  $('.ask').jConfirmAction();
		});        
</script>

	<div class="container"><br><br>
		<div class="cont2">
			<center><h1>Usuarios</h1></center>
		</div>
		
		
		
			<div class="panel panel-info">
	   
				<table class="table table-responsive table-striped table-bordered table-hover display">
					<div class="panel-heading">Tabla Usuario</div>
					<thead>
						<tr>
							<td colspan="6" class="success"><a href="frmUsuario">Agregar Usuario</a></td>
						</tr>
						<tr>
							<th>Usuario</th>
							<th class="hidden-xs">Contraseña</th>
							<th>Email</th>
							<th>Status</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
					<?php
					if(isset($usuario)){
						foreach($usuario as $u){
							echo "<tr>";
							echo "<td>" . $u->username . "</td>";
							echo "<td class='hidden-xs'> " . $u->password . "</td>";
							echo "<td>" . $u->email . "</td>";
							
								$status = ($u->uStatus == 1) ? 'Admin' : 'Cajero';
								
							echo "<td><a href='cambiarStatus/$u->idUsuario/$u->uStatus'>" . $status ."</a></td>";
							
							echo "<td class='warning'><a href='frmUpUsuario/$u->idUsuario'>"
									. "<span class='hidden-xs'>Modificar</span>"
									. "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
									. "</a></td>";
									
							echo "<td class='danger'><a href='delUsuario/$u->idUsuario' class='ask-custom'>"
									. "<span class='hidden-xs'>Eliminar</span>"
									."<span class='visible-xs glyphicon glyphicon-trash' </span>"
									. "</a></td>";
							echo "</tr>";
						}
					}else{
						echo "Sin registros a mostrar";
					}
					?>
					</tbody>
				</table>
					<button class="visible-xs" type="button">Más</button>
			</div>
	</div>
        <br>
		
		

			<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>

<?php $this->load->view('plantilla3HerAdmin/footer'); ?>











