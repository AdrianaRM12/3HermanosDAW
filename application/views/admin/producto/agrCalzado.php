<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>
	<div class="container"><br><br>
		<center><h1>Agregar Calzado</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">
				
					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/producto/addCalzado" method="post">
					
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Nombre:</label>
						<div class="col-xs-12 col-sm-6">
							<?php echo form_error('nombre','<div class = "error">','</div>');?>
							<input class="form-control" type="text" name="nombre"/><br>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Precio:</label>
						<div class="col-xs-12 col-sm-6">
							<?php echo form_error('precio','<div class = "error">','</div>');?>
							<input class="form-control" type="text" name="precio"/><br>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Descripcón:</label>
						<div class="input-group col-xs-12 col-sm-6">
							<?php echo form_error('descripcion','<div class = "error">','</div>');?>
							<textarea type="text" name="descripcion" class="form-control" rows="4"></textarea><br>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">id_Categoria:</label>
						<div class="col-xs-12 col-sm-6">
							<?php echo form_error('categoria','<div class = "error">','</div>');?>
							<input class="form-control" type="text" name="categoria"><br>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Stock:</label>
						<div class="col-xs-12 col-sm-6">
							<?php echo form_error('stock','<div class = "error">','</div>');?>
							<input class="form-control" type="text" name="stock"><br>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">id_Marca:</label>
						<div class="col-xs-12 col-sm-6">
							<?php echo form_error('marca','<div class = "error">','</div>');?>
							<input class="form-control" type="text" name="marca"><br>
						</div>
					</div>
						<center><input type="submit" value="Guardar"></center>
					</form>
				</div>
			</div>
	</div>
					
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>
