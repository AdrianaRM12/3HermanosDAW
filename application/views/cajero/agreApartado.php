<?php $this->load->view('plantilla3HerCajero/head'); ?>
<?php $this->load->view('plantilla3HerCajero/nav2'); ?>

<div class="container"><br><br><br>
		<h1>Agregar Apartado</h1>
		<div class="row">
		<div class="col-xs-12 col-sm-10">

			<form class="form-horizontal well" action="<?php echo base_url();?>index.php/ApartadoC/addApartado" method="post">
			
			
				<?php echo form_error('abono','<div class = "error">','</div>');?>
				<h3>Abono:</h3><input type="text" name="abono"><br>
				
				<?php echo form_error('totalA','<div class = "error">','</div>');?>
				<h3>Total a pagar:</h3><input type="text" name="totalA"><br>
				
				<?php echo form_error('idC','<div class = "error">','</div>');?>
				<h3>ID_Cliente:</h3><input type="text" name="idC"><br>
				
				<input type="submit" value="Guardar">
			</form>
		</div>
			
	</div>
		<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
	</div>
<?php $this->load->view('plantilla3HerCajero/footer'); ?>












