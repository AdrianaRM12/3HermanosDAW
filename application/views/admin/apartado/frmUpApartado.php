<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar apartado</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">


					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/apartado/upApartado" method="post">

					<?php foreach ($apartado as $ap){ ?> 

						<input type="hidden" name="id" value="<?php echo $ap->id_Apartado;?>"><br>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Total Abono: </label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('totalA','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="totalA" value="<?php echo $ap->Abono_total;?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Total A Pagar:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('totalAP','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="totalAP" value="<?php echo $ap->Total_AP;?>"><br>
							</div>
						</div>
						<input type="hidden" name="idC" value="<?php echo $ap->id_Cliente;?>"><br>
						<center><input type="submit" name="enviar" value="Guardar"></center><br>

					<?php }?> 
						
					</form>
				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>


