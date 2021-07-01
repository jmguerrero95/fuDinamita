<div id="contenido">
<?php
$cedula=$_POST['cedula'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/cuadrilla.php','uri'=>'urn:cuadrilla',));
//$datos2 = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleados',));
$info=$datos->recu_codigo_total();
//$info2=$datos2->recuperar_cedulas();
print_r($info);
$aux=count($info);
$aux2=count($info2);
echo $aux2;
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
	        <a class="mdl-navigation__link" href="">Clientes</a>
	        <a class="mdl-navigation__link" href="">Empleados</a>
	        <a class="mdl-navigation__link" href="">Proyectos</a>
	        <a class="mdl-navigation__link" href="">Seguridad</a>
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
					<h3 style="color:blue" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Agregar Proyecto</h3>
					<div id="info" class="mdl-cell mdl-cell--12-col" style="display: none"></div>
					<div id="info_parcial">
						<table class="mdl-data-table mdl-js-data-table" id="tabla">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">
												Cedula de cliente
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Nombre del proyecto
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Costo
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												cuadrilla a asignar 
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Direccion 
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Fecha a realizar 
											</th>
										</tr>
									</thead>
									<tbody>
								<form action="../include/agre_proyec.php" method="POST">
									<tr>
										<td class="mdl-data-table__cell--non-numeric">
											<input size="13" type="text" name="cedula" value="<?php echo($cedula) ?>" readonly>
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<input size="13" type="text" required name="nombre">
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<input size="13" type="number" required name="costo">
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<select name="cuadrilla">
												<option value="0">Seleccione</option>
										<?php
											for ($i=0; $i < $aux; $i++) { 
												?>
												<option value="<?php echo $info[$i][1] ?>"><?php echo $info[$i][0] ?></option>
												<?php
											}
										?>
											</select>
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<textarea rows="4" cols="25" required name="direccion">
											</textarea>
										</td>
										<td>
											<input type="date" required name="fech_ini">
										</td>
										<td>
											<input type="date" required name="fech_fin">
										</td>
									</tr>
									</tbody>
									</table>
								</br>
									<button type="submit" id="button">Continuar</button>
								</form>
								<br> 
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