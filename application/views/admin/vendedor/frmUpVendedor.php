<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Vendedor</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well"  action="<?php echo base_url();?>index.php/vendedor/upVendedor" method="post">

					<?php foreach ($vendedor as $vend){ ?> 

						<input type="hidden" name="id" value="<?php echo $vend->id_Vendedor;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre: </label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre" value="<?php echo $vend->Nombre;?>"><br>
							</div>
						</div>
						
						<center><input type="submit" name="enviar" value="enviar"></center><br>

						
					<?php }?> 
						
					</form>
				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>
