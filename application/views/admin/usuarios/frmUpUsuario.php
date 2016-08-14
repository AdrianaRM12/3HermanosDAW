<?php $this->load->view('plantilla3HerAdmin/head'); ?>
<?php $this->load->view('plantilla3HerAdmin/nav2'); ?>

	<div class="container"><br><br>
		<center><h1>Actualizar Usuario</h1></center>
		
			<div class="row">
				<div class="col-xs-12 col-sm-10">

					<form class="form-horizontal well" action="<?php echo base_url();?>index.php/usuario/UpUsuario" method="post">
					<?php foreach ($usuario as $usu){ ?>
					
						<input type="hidden" name="id" value="<?php echo $usu->idUsuario;?>">
						
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Usuario:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('username','<div class = "error">','</div>');?>
								<input class="form-control" type="text" name="username" value="<?php echo $usu->username;  echo set_value('username');?>"><br>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Contraseña:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('password','<div class = "error">','</div>');?>
								<input class="form-control" type="password" name="password"value="<?php echo $usu->password;  echo set_value('password');?>"><br>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Correo:</label>
							<div class="col-xs-12 col-sm-6">
								<?php echo form_error('email','<div class = "error">','</div>');?>
								<input class="form-control" type="email" name="email" value="<?php echo $usu->email;?>" require/><br>
							</div>
						</div>
						<center><input type="submit" value="Guardar"></center>
						
					<?php } ?>
					</form>

				</div>
			</div>
	</div>

 <?php $this->load->view('plantilla3HerAdmin/footer'); ?>