<!DOCTYPE html>
<html lang="en">
   <head>
              <center> <a href= class="image featured"><img src="<?php echo base_url();?>css/images/h.png"align="left"  /></a> </center>
		
        <br><br>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrador</title>

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
                                                                       
                                                                        <h1 align=center>Administrador <br>Calzado </h1> <br> <br>
                                                                        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                                                                        
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

<div class="panel panel-info">
    <div class="panel-heading">Tabla calzado</div>
<table class="table table-responsive table-striped table-bordered table-hover">
    <tr>
        <td colspan="6"><a href="agrCalzado">Nuevo</a></td>
    </tr>
    <tr>
        <th>Nombre</th>
        <th class="hidden-xs">Precio</th>
        <th>Descripción</th>
		<th>Id_Categoria</th>
		<th>Stock</th>
		<th>Id_Marca</th>
        <th colspan="2">Acciones</th>
    </tr>
<?php
if(isset($producto)){
    foreach($producto as $u){
        echo "<tr>";
        echo "<td>" . $u->Nombre . "</td>";
        echo "<td class='hidden-xs'> " . $u->Precio . "</td>";
		echo "<td>" . $u->Descripcion . "</td>";
        echo "<td>" . $u->id_Categoria . "</td>";
        echo "<td>" . $u->Stock . "</td>";
		echo "<td>" . $u->id_Marca . "</td>";
        echo "<td><a href='UpProducto/$u->id_Calzado'>"
                . "<span class='hidden-xs'>Modificar</span>"
                . "<span class='visible-xs glyphicon glyphicon-pencil'></span>"
                . "</a></td>";
        echo "<td><a href='delProducto/$u->id_Calzado'>"
			. "<span class='hidden-xs'>Eliminar</span>"
			."<span class='visible-xs glyphicon glyphicon-trash' </span>"
			. "</a></td>";
        echo "</tr>";
    }
}else{
    echo "Sin registros a mostrar";
}
?>
</table>
    <button class="visible-xs"type="button"> Mas</button>
</div>
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery-2.1.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
	
	<center>  <a href="cerrarSesion"> <h6>Cerrar sesión</h6></a> </center>
  </body>
</html>













