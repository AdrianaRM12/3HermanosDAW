<!DOCTYPE HTML>

<html>
 
	<head>
                <center> <a href= class="image featured"><img src="<?php echo base_url();?>css/images/h.png"align="left"  /></a> </center>
		
        <br><br>
        
		<title>Administrador</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->


     <link rel="shortcut icon" href="<?php echo base_url();?>css/image/3hermanos.ico">


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
                                                                       
                                                                        <h1 align=center>Modificar <br>Calzado </h1> <br> <br>
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
	<li><a href="<?php echo base_url();?>index.php/Categoria/getCategoria">Categoria</a></li>		
											</ul>
										</nav>         

								</div>
							</header>
                                                <body>

<form action="<?php echo base_url();?>index.php/venta/actVenta" method="post">

<?php foreach ($venta as $vent){ ?> 

	<input type="hidden" name="id" 
		value="<?php echo $vent->id_Venta;?>"><br>
	
	<label><h3>Total: </h3></label><br>
	<input type="text" name="total"
		value="<?php echo $vent->Total;?>"><br>

	<label><h3>id_Vendedor: </h3></label><br>
	<input type="text" name="idVen"
		value="<?php echo $vent->id_Vendedor;?>"><br>
	
	<label><h3>id_Cajero: </h3></label><br>
	<input type="text" name="idCaj"
	value="<?php echo $vent->id_Cajero;?>"><br>
	
	<label><h3>id_Calzado: </h3></label><br>
	<input type="text" name="idCal"
	value="<?php echo $vent->id_Calzado;?>"><br>
	
	<label><h3>Fecha: </h3></label><br>
	<input type="text" name="fecha"
	value="<?php echo $vent->Fecha;?>"><br>
	
	<label><h3>id_Cliente: </h3></label><br>
	<input type="text" name="idClient"
	value="<?php echo $vent->id_Cliente;?>"><br>
	<input type="submit" name="enviar" value="enviar"><br>

	
	<?php }?> 
	
</form>

                                                </body>		<!-- Footer Wrapper -->
				
		
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






























