<div id="contenido">
<?php
$directorio='../videos';
$archivos=scandir($directorio);
print_r($archivos);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Distribuidora y Fumiagadora la Dinamita</title>
	<link href="../icons/sprites/svg-sprite/svg-sprite-action.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/material.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/material.min.js"></script>
</head>
<body id="ini_sesion" style="background-color: beige">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <!-- Title -->
	      <span class="mdl-layout-title">Distribuidora y Fumiagadora la Dinamita</span>
	      <!-- Add spacer, to align navigation to the right -->
	      <div class="mdl-layout-spacer"></div>
	      <!-- Navigation. We hide it in small screens. -->
	      <nav class="mdl-navigation mdl-layout--large-screen-only">
	        <a class="mdl-navigation__link" href="index.php">Clientes</a>
	        <a class="mdl-navigation__link" href="empleados.php">Empleados</a>
	        <a class="mdl-navigation__link" href="cuadrilla.php">Cuadrillas</a>
	        <a class="mdl-navigation__link" href="proveedor.php">Proveedores</a>
	        <a class="mdl-navigation__link" href="productos.php">Productos</a>
	        <a class="mdl-navigation__link" href="proyectos.php">Proyectos</a>
	        <a class="mdl-navigation__link" href="seguridad.php">Seguridad</a>
	      </nav>
	    </div>
	  </header>
	  <div class="mdl-layout__drawer">
	    <span class="mdl-layout-title">Usuario</span>
	    <nav class="mdl-navigation">
	      <a class="mdl-navigation__link" href="">Modificar Permisos</a>
	      <a class="mdl-navigation__link" href="">Cambiar datos de inicio de sesion</a>
	      <a class="mdl-navigation__link" href="">Desactivar aplicacion movil</a>
	      <a class="mdl-navigation__link" href="">Reportar falla</a>
	    </nav>
	  </div>
	  <main class="mdl-layout__content">
	    <div class="page-content mdl-grid">
		    	<div align="center" class="mdl-cell mdl-cell--12-col">
					<h3 style="color:orange" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Videovigilacia</h3>
					<div id="info" class="mdl-cell mdl-cell--12-col" style="display: none"></div>
	    			<video src="../videos/<?php echo($archivos[2]) ?>" controls></video>
	    		</div>
	    </div>
	  </main>
</body>
</html>
</div>