<?php $this->load->view('plantilla3HerCajero/head'); ?>
<?php $this->load->view('plantilla3HerCajero/nav'); ?>



	<div class="container"><br><br><br>
	
		<div class="row">
	
			<div class="col-sm-3 col-lg-3">
					<div class="dash-unit">
						<dtitle>Calendario</dtitle>
						<?php echo $calendario ?>
					</div>
			</div>
                <a href="#" class="image featured"><img src="<?php echo base_url();?>css/images/f.png"align="left"  /></a> 
		</div>
                    <center> <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
	</div>
<?php $this->load->view('plantilla3HerCajero/footer'); ?>