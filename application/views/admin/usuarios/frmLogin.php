<!DOCTYPE HTML>

<html>
    
	<head>
           
		<title>3Hermanos</title>
                 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" href="<?php echo base_url();?>css/image/3hermanos.jpg">


	</head>

	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div class="container">

			<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<center><h1 style="color: white">LOGIN</h1></center>
                                                                        
                
                                                                  

					</div>
				</header>

		
                
<center><body>

            
	<div class="container">
        <div class="row">
   		<div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
   			<div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
   				<img src="<?php echo base_url();?>css/images/usu.png" alt="" class="img-circle">
   				
					<form class="cmxform" id="signupForm" action="<?php echo base_url();?>index.php/Usuario/login" method="post"><br>
						<fieldset>
							<p>
								
									<?php echo form_error('username','<div class = "error">','</div>');?>
									<input type ="text"  name="username" placeholder="Usuario" value="<?php echo set_value('username');?>">
								
				  
							
									<?php echo form_error('password','<div class = "error">','</div>');?>
									<input type="password" name="password" placeholder="Contraseña" value="<?php echo set_value('password');?>">
								
					
							</p>
								<button type="submit" class="btn" name ="btnEnviar">
                        
								<span class="glyphicon glyphicon-ok-sign"></span> LOGIN</button>   <br>
                        
								<a href="<?php echo base_url();?>index.php/Controlador"><h4>Cambiar Vista a Usuario</h4> </a>
        
						</fieldset>
					</form>
				 
   			</div>

   		</div>


        </div>
    </div>

              
    </body></center>
			
		
		<!-- Scripts -->

			<script src="<?php echo base_url();?>js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>js/jquery.dropotron.min.js"></script>
			<script src="<?php echo base_url();?>js/skel.min.js"></script>
			<script src="<?php echo base_url();?>js/skel-viewport.min.js"></script>
			<script src="<?php echo base_url();?>js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url();?>js/main.js"></script>
			<script src="<?php echo base_url();?>js/jquery-2.1.4.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
			

	</body>
        	
            
</html>