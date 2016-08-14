<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Proveedor</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well"  action="<?php echo base_url();?>index.php/proveedor/upProveedor" method="post">

					<?php foreach ($proveedor as $pro){ ?> 

						<input type="hidden" name="id" value="<?php echo $pro->id_Proveedor;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre" value="<?php echo $pro->Nombre;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Telefono:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('tel','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="tel" value="<?php echo $pro->Telefono;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Direccion:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('direccion','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="direccion" value="<?php echo $pro->Direccion;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">id_Marca:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('idM','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="idM" value="<?php echo $pro->id_Marca;?>"><br>
							</div>
						</div>
						<center><input type="submit" name="enviar" value="enviar"></center><br>

						
					<?php }?> 
						
					</form>
				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>
