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
                                                                                            
                                                                                            <li><a href="<?php echo base_url();?>index.php/Usuario/getUsuario">Usuarios</a></li>
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

<form action="<?php echo base_url();?>index.php/producto/actProducto" method="post">

<?php foreach ($producto as $prod){ ?> 

	<input type="hidden" name="id" 
		value="<?php echo $prod->id_Calzado;?>"><br>
	
	<label><h3>Nombre: </h3></label><br>
	<input type="text" name="nombre"
		value="<?php echo $prod->Nombre;?>"><br>

	<label><h3>Precio: </h3></label><br>
	<input type="text" name="precio"
		value="<?php echo $prod->Precio;?>"><br>
	
	<label><h3>Decripción: </h3></label><br>
	<input type="text" name="descripcion"
	value="<?php echo $prod->Descripcion;?>"><br>
	
	
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






























