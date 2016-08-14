<?php $this->load->view('plantilla3HerCajero/head'); ?>
<?php $this->load->view('plantilla3HerCajero/nav2'); ?>



	<div class="container"><br><br><br>
		<h1>Agregar Venta</h1>
		<div class="row">
		<div class="col-xs-12 col-sm-10">

			<form class="form-horizontal well" action="<?php echo base_url();?>index.php/VentaC/agrVenta" method="post">
			
			
				<?php echo form_error('total','<div class = "error">','</div>');?>
				<h3>Total:</h3><input type="text" name="total"><br>
				
				<?php echo form_error('idVen','<div class = "error">','</div>');?>
				<h3>ID_Vendedor:</h3><input type="text" name="idVen"><br>
				
				<?php echo form_error('idCajero','<div class = "error">','</div>');?>
				<h3>ID_Cajero:</h3><input type="text" name="idCajero"><br>
				
				<?php echo form_error('idCal','<div class = "error">','</div>');?>
				<h3>ID_Calzado:<h3/><input type="text" name="idCal" ><br>
				
				<?php echo form_error('fecha','<div class = "error">','</div>');?>
				<h3>Fecha:</h3><input type="date" name="fecha"><br>
				
				<?php echo form_error('idCli','<div class = "error">','</div>');?>
				<h3>ID_Cliente:</h3><input type="text" name="idCli"><br>
				
				<input type="submit" value="Guardar">
			</form>
		</div>
	</div>
	<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
</div>
<?php $this->load->view('plantilla3HerCajero/footer'); ?>




