<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>
	<div class="container"><br><br>
		<center><h1>Agregar Cliente</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/cliente/addCliente" method="post">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre completo:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre"><br>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Telefono:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('telefono','<div class = "error">','</div>');?>
								<input  class="form-control" type="text" name="telefono"><br>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Direccion:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('direccion','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="direccion"><br>
							</div>
						</div>
							<center><input type="submit" value="Guardar"></center>
					</form>
				</div>
			</div>
	</div>
				
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>