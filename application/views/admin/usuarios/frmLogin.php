<!DOCTYPE HTML>

<html>
    
	<head>
           
		<title>3Hermanos</title>
                 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
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
                                                                        <h1 align=center>       Administrador </h1> 
                                                                        
                                                                        
                                                                        <br><br>
                                                                        
                                                                   
                                <nav id="nav">
											<ul>
                                                                                            <center>   <a href= class="image featured"><img src="<?php echo base_url();?>css/images/h.png"align="left"  /></a>   </center>                     
                                                                                            <br>
                                                                                            <center>   <a href= class="image featured"><img src="<?php echo base_url();?>css/images/mau.png"align="left"  /></a>   </center>  
     
    

											
											</ul>
										</nav>     
                                                                  

								</div>
							</header>

		
                
                                                     <center><body>
                                                          <div class="container">
                                                           <div class="row">
              <div class="col-xs-12 col-md-6">
                     
                    <?php echo form_open('Usuario/login'); ?>
                 <div  class="form-group">
                      <label for="username"><h1></h1></label>    
                      <input type ="text" class="form-control" name="username" placeholder="Usuario">
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><h1></h1></span>
                      <input type="password" name="password" placeholder="Contraseña">
                  </div><br>
                    <button type="submit" class="btn btn-danger" name ="btnEnviar">
                        
                        <span class="glyphicon glyphicon-ok-sign"></span> LOGIN</button>   <br></br>
                        
                        <a href="<?php echo base_url();?>index.php/Controlador"><h6>Cambiar Vista a Usuario</h6> </a>
                    </form>
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

	</body>
        		<!-- Nav -->
                 <a href="#" class="image featured"><img src="<?php echo base_url();?>css/images/ab.png"align="left"  /></a>  
</html>