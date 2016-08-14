<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav'); ?>

	<div class="container"><br><br><br>
	
		<div class="row">
	
			<div class="col-sm-3 col-lg-3">
					<div class="dash-unit">
						<dtitle>Calendario</dtitle>
						<?php echo $calendario ?>
					</div>
			</div>
			
			<div class="col-sm-9 col-lg-9" >
				<a href="#" class="image featured"><img src="<?php echo base_url();?>css/images/f.png"align="left"  /></a><br> 
      		</div>
	
		</div>
		
		<center><a href="cerrarSesion"> <h6>Cerrar sesión</h6></a></center> 
	</div>
			
<?php $this->load->view('plantilla3HerAdmin/footer'); ?>