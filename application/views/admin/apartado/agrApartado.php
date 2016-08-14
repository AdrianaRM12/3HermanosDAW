<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Agregar apartado</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">
				
					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/apartado/addApartado" method="post">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Abono total:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('total','<div class = "error">','</div>');?>
								<input class="form-control"  type="text" name="total">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-labe">Total a pagar:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('totalAp','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="totalAp">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-labe">Id_Cliente:</label>
							<div class="col-xs-12 col-sm-6">
								<input class="form-control"  type="text" name="idCliente"><br>
							</div>
						</div>
						
						<center><input type="submit" value="Guardar"><center>
					</form>
				</div>
			</div>
	</div>
	
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>













































































































