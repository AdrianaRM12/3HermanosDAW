<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Categioria</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">


					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/categoria/upCategoria" method="post">

					<?php foreach ($categoria as $cat){ ?> 

						<input type="hidden" name="id" value="<?php echo $cat->id_Categoria;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre: </h3></label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre" value="<?php echo $cat->Nombre;?>"><br>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Descripcion: </h3></label>
							<div class="input-group col-xs-12 col-sm-6">
								<textarea class="form-control" rows="4"  name="descripcion" value="<?php echo $cat->id_Categoria;?>"></textarea><br>
							</div>
						</div>
						
						
						<center><input type="submit" name="enviar" value="enviar"></center><br>

						
						<?php }?> 
						
					</form>
				</div>
			</div>
	</div>
 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>
