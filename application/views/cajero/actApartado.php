<?php $this->load->view('plantilla3HerCajero/head'); ?>
<?php $this->load->view('plantilla3HerCajero/nav2'); ?>



	<div class="container"><br><br><br>
		<center><h1>Actualizar Apartado</h1></center>
		<div class="row">
		<div class="col-xs-12 col-sm-10">

			<form class="form-horizontal well"action="<?php echo base_url();?>index.php/apartadoC/upApartado" method="post">
				<?php foreach ($apartado as $ap){ ?> 

					<input type="hidden" name="id" value="<?php echo $ap->id_Apartado;?>"><br>
					
					<label><h3>Total Abono: </h3></label><br>
					<input type="text" name="totalA" value="<?php echo $ap->Abono_total;?>"><br>
						
					<label><h3>Total A Pagar: </h3></label><br>
					<input type="text" name="totalAP" value="<?php echo $ap->Total_AP;?>"><br>
					
					<input type="submit" name="enviar" value="enviar"><br>

				<?php }?> 
						
			</form>
		</div>
	</div>
		
		<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
	
	</div>
	
<?php $this->load->view('plantilla3HerCajero/footer'); ?>


	












