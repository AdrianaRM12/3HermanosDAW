<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>
	<div class="container"><br><br>
		<center><h1>Agregar Categoria</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<center><form class="form-horizontal well"action="<?php echo base_url();?>index.php/categoria/addCategoria" method="post">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Descripcion:</label>
							<div class="input-group col-xs-12 col-sm-4">
								<?php echo form_error('descripcion','<div class = "error">','</div>');?>
								<textarea class="form-control" rows="4"  name="descripcion"></textarea>
							</div>
						</div>
						<center><input type="submit" value="Guardar"></center>
					</form></center>
				</div>
			</div>
	</div>
				
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>