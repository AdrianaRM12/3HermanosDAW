<!DOCTYPE html>
<html lang="en">
  
    <head>
        <center>
			<a href= class="image featured"><img src="<?php echo base_url();?>css/images/h.png"align="left"  /></a> 
		</center><br><br>
 
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
			<title>Cajero</title>

			<!-- Bootstrap -->
			<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	</head>
	<body>
      		
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
                                                                       
			<h1 align=center>Cajero <br>Ventas </h1> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                                                                        
                <nav id="nav">
					<ul>
                        <li><a href="<?php echo base_url();?>index.php/VentaC/getVenta"> Venta</a></li>
						<li><a href="<?php echo base_url();?>index.php/ApartadoC/getApartado">Apartado</a></li></ul>
				</nav>         

				</div>
			</header>



					<form action="<?php echo base_url();?>index.php/VentaC/actVentaC" method="post">

					<?php foreach ($venta as $vent){ ?> 

						<input type="hidden" name="id" value="<?php echo $vent->id_Venta;?>"><br>
						
						<label><h3>Total: </h3></label><br>
						<?php echo form_error('total','<div class = "error">','</div>');?>
						<input type="text" name="total" value="<?php echo $vent->Total;?>"><br>

						<label><h3>id_Vendedor: </h3></label><br>
						<?php echo form_error('idVen','<div class = "error">','</div>');?>
						<input type="text" name="idVen" value="<?php echo $vent->id_Vendedor;?>"><br>
						
						<label><h3>id_Cajero: </h3></label><br>
						<?php echo form_error('idCaj','<div class = "error">','</div>');?>
						<input type="text" name="idCaj" value="<?php echo $vent->id_Cajero;?>"><br>
						
						<label><h3>id_Calzado: </h3></label><br>
						<?php echo form_error('idCal','<div class = "error">','</div>');?>
						<input type="text" name="idCal" value="<?php echo $vent->id_Calzado;?>"><br>
						
						<label><h3>Fecha: </h3></label><br>
						<?php echo form_error('fecha','<div class = "error">','</div>');?>
						<input type="text" name="fecha" value="<?php echo $vent->Fecha;?>"><br>
						
						<label><h3>id_Cliente: </h3></label><br>
						<?php echo form_error('idCli','<div class = "error">','</div>');?>
						<input type="text" name="idClient" value="<?php echo $vent->id_Cliente;?>"><br>
						
						
						<input type="submit" name="enviar" value="enviar"><br>

						
						<?php }?> 
						
					</form>

				
		
		<!-- Scripts -->

			<script src="<?php echo base_url();?>js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>js/jquery.dropotron.min.js"></script>
			<script src="<?php echo base_url();?>js/skel.min.js"></script>
			<script src="<?php echo base_url();?>js/skel-viewport.min.js"></script>
			<script src="<?php echo base_url();?>js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url();?>js/main.js"></script>

	</body>
		
        
			<script src="<?php echo base_url();?>js/jquery-2.1.4.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
	
	<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
  </body>
</html>














