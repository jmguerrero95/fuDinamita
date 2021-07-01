<div id="contenido">
<?php
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
$info=$datos->consulta_general();
$aux=count($info);
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
<body id="ini_sesion">
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
					<h3 style="color:blue" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Lista de especilidades</h3>
					<div id="info" class="mdl-cell mdl-cell--12-col" style="display: none"></div>
					<div id="info_parcial">
						<table class="mdl-data-table mdl-js-data-table" id="tabla">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">
												Nombre de la especialidad
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Descripción
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Acciones
											</th>
										</tr>
									</thead>
									<tbody>
						<?php
							for ($i=0; $i < $aux; $i++) { 
						?>
								<form action="../include/acciones_espe.php" method="POST">
									<tr>
										<td class="mdl-data-table__cell--non-numeric">
											<input size="13" type="text" name="especialidad" value="<?php echo $info[$i][0] ?>">
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<input size="13" type="text" name="descripcion" value="<?php echo $info[$i][1] ?>">
										</td>
											<input size="13" type="hidden" name="codigo" value="<?php echo $info[$i][2] ?>">
										<td class="mdl-data-table__cell--non-numeric">
											<button type="submit" name="modificar" value="a">Modificar</button>
											<button type="submit" name="eliminar" value="b">Eliminar</button>
										</td>
									</tr>
								</form>
						<?php
							}
						?>
							<form action="../include/agre_espe.php" method="POST">
								<tr style="display: none" id="nuevo">
									<td class="mdl-data-table__cell--non-numeric"><input size="13" type="text" required name="especialidad"></td>
									<td class="mdl-data-table__cell--non-numeric"><input size="13" type="text" required name="descripcion"></td>
									<td class="mdl-data-table__cell--non-numeric"><button type="submit" name="guardar">Guardar</button></td>
								</tr>
							</form>
						</tbody>
								</table>
								<br>
								<button type="button" id="button">Nueva especialidad</button> 
					</div>
				</div>
				<div align="center"></div>
	    </div>
	  </main>
	</div>
	<script type="text/javascript">
		$("#button").click(function() {
		$("#button").hide(1000);
		$("#nuevo").fadeIn(2000);
		});
		//creo una nueva fila
		/*var fila = $('<tr>'+
		'<td class="mdl-data-table__cell--non-numeric"><input size="13" type="text" name="especialidad"></td>'+
		'<td class="mdl-data-table__cell--non-numeric"><input size="13" type="text" name="descripcion"></td>'+
		'<td class="mdl-data-table__cell--non-numeric"><button type="submit" name="guardar">Guardar</button></td>'+
		'</form>'+
		'</tr>').hide().fadeIn(1000);
		//añado fila a la tabla
		$("#tabla").append(fila);
		$("#button").hide(1000)
		});*/
	</script>
</body>
</html>
</div>