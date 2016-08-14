<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Calzado</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/producto/actProducto" method="post">

					<?php foreach ($producto as $prod){ ?> 

						<input type="hidden" name="id" value="<?php echo $prod->id_Calzado;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nombre:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('nombre','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="nombre" value="<?php echo $prod->Nombre;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Precio:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('precio','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="precio" value="<?php echo $prod->Precio;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Decripción:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('descripcion','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="descripcion" value="<?php echo $prod->Descripcion;?>"><br>
							</div>
						</div>
						<input type="hidden" name="id_Categoria" value="<?php echo $prod->id_Categoria;?>"><br>
						<input type="hidden" name="Stock" value="<?php echo $prod->Stock;?>"><br>
						<input type="hidden" name="id_Marca" value="<?php echo $prod->id_Marca;?>"><br>
						
						<center><input type="submit" name="enviar" value="Guardar"></center><br>

						
						<?php }?> 
						
					</form>
				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>
 