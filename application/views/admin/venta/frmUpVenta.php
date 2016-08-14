<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Venta</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/venta/actVenta" method="post">

					<?php foreach ($venta as $vent){ ?> 

						<input type="hidden" name="id" value="<?php echo $vent->id_Venta;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Total: </label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('total','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="total" value="<?php echo $vent->Total;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">id_Vendedor:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('idVen','<div class = "error">','</div>');?>
								<input class="form-control" ="text" name="idVen" value="<?php echo $vent->id_Vendedor;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">id_Cajero:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('idCaj','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="idCaj" value="<?php echo $vent->id_Cajero;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">id_Calzado:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('idCal','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="idCal" value="<?php echo $vent->id_Calzado;?>"><br>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">id_Cliente:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('idClient','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="idClient" value="<?php echo $vent->id_Cliente;?>"><br>
							</div>
						</div>
						
						<center><input type="submit" name="enviar" value="Guardar"></center><br>

						
						<?php }?> 
						
					</form>
				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>