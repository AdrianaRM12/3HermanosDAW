<div id="footerwrap">
<center><img class="clearfix" src="<?php echo base_url();?>css/images/h.png"></center><br>
</div>
<?php

	$this->load->view('plantilla3HerCajero/head');
	
?>

<div class="container"><br><br>
	<div class="row">
		<div class="half-unit">
	      		<dtitle>Hora local</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>
	
			<div class="col-sm-3 col-lg-3">
					<div class="dash-unit">
						<dtitle>Calendario</dtitle>
						<?php echo $calendario ?>
					</div>
			</div>
			
			<div class="col-sm-3 col-lg-3">
					<div class="dash-unit"><br><br><br><br><br><br>
				
						<form action="Usuario">
							
								<center><input type="submit" value="Login"></center>
						</form>
					</div>
			</div>
			
			<div class="col-sm-3 col-lg-3">
					<div class="dash-unit"><br><br><br><br>
						<center><img  width='100px' height='100px' src="<?php echo base_url();?>css/images/pic03.png"></center><br>
					</div>
			</div>
			<div class="col-sm-3 col-lg-3">
					<div class="dash-unit"><br><br><br><br>
						<center><img  width='100px' height='100px' src="<?php echo base_url();?>css/images/header.png"></center><br>
					</div>
			</div>

	</div>
</div>
<?php

	$this->load->view('plantilla3HerCajero/footer');
	
?>
