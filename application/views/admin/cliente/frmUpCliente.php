<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Cliente</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/cliente/upCliente" method="post">

					<?php foreach ($cliente as $client){ ?> 

						<input type="hidden" name="id" value="<?php echo $client->id_Cliente;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre: </label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre" value="<?php echo $client->Nombre;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Telefono: </label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('telefono','<div class = "error">','</div>');?>
								<input class="form-control"  type="text" name="telefono" value="<?php echo $client->Telefono;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Direccion: </label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('direccion','<div class = "error">','</div>');?>
								<input class="form-control"  type="text" name="direccion" value="<?php echo $client->Direccion;?>"><br>
							</div>
						</div>
						<center><input type="submit" name="enviar" value="Guardar"></center><br>

						
						<?php }?> 
						
					</form>
				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>
