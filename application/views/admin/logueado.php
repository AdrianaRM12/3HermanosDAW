<!DOCTYPE HTML>

<html>
   
       
	<head>
        <br> </br>
        <center> <h1>BIENVENIDO <br> ADMINISTRADOR <?php echo $nombre;?></h1> </center>
        
		<title>Admin 3 Hermanos </title>
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
                                                                       
                                                                        <center>   <a href= class="image featured"><img src="<?php echo base_url();?>css/images/h.png"align="left"  /></a>   </center>  
                                                                        <br>
                                                                        
                                                         <nav id="nav">
                                                             
											<ul>
                                                                                            
    
    <li><a href="<?php echo base_url();?>index.php/Usuario/logueado"> Inicio</a></li>
	<li><a href="<?php echo base_url();?>index.php/Usuario/getUsuario">Usuarios</a></li> 
    <li><a href="<?php echo base_url();?>index.php/producto/getproducto"> Calzado</a></li>
	<li><a href="<?php echo base_url();?>index.php/Venta/getVenta"> Venta</a></li>
	<li><a href="<?php echo base_url();?>index.php/Cajero/getCajero">Cajero</a></li> 
    <li><a href="<?php echo base_url();?>index.php/Marca/getMarca">Marcas</a></li>
	<li><a href="<?php echo base_url();?>index.php/Proveedor/getProveedor">Proveedor</a></li>
	<li><a href="<?php echo base_url();?>index.php/Vendedor/getVendedor">Vendedor</a></li> 
    <li><a href="<?php echo base_url();?>index.php/Cliente/getCliente">Cliente</a></li>
	<li><a href="<?php echo base_url();?>index.php/Apartado/getApartado">Apartado</a></li>
											
											</ul>
										</nav>         

								</div>
							</header>

			<!-- Footer Wrapper -->
				
                               <a href="#" class="image featured"><img src="<?php echo base_url();?>css/images/f.png"align="left"  /></a> 
      
                               <center> <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
		<!-- Scripts -->

			<script src="<?php echo base_url();?>js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>js/jquery.dropotron.min.js"></script>
			<script src="<?php echo base_url();?>js/skel.min.js"></script>
			<script src="<?php echo base_url();?>js/skel-viewport.min.js"></script>
			<script src="<?php echo base_url();?>js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url();?>js/main.js"></script>

	</body>
</html>