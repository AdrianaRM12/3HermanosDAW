<body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="<?php echo base_url();?>css/images/logo30.png" alt="">Administrador <?php echo $nombre;?></a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
				<li><a href="<?php echo base_url();?>index.php/Usuario/logueado"> Inicio</a></li>
				<li><a href="<?php echo base_url();?>index.php/Apartado/getApartado">Apartado</a></li>
				<li><a href="<?php echo base_url();?>index.php/producto/getproducto"> Calzado</a></li>
				<li><a href="<?php echo base_url();?>index.php/Cajero/getCajero">Cajero</a></li> 
				<li><a href="<?php echo base_url();?>index.php/Categoria/getCategoria">Categoria</a></li>
				<li><a href="<?php echo base_url();?>index.php/Cliente/getCliente">Cliente</a></li>
				<li><a href="<?php echo base_url();?>index.php/Marca/getMarca">Marcas</a></li>
				<li><a href="<?php echo base_url();?>index.php/Proveedor/getProveedor">Proveedor</a></li>
				<li><a href="<?php echo base_url();?>index.php/Usuario/getUsuario">Usuarios</a></li> 
				<li><a href="<?php echo base_url();?>index.php/Vendedor/getVendedor">Vendedor</a></li>
				<li><a href="<?php echo base_url();?>index.php/Venta/getVenta"> Venta</a></li>			
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
