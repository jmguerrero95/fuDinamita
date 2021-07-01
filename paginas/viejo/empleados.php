<div id="contenido">
<?php
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleados',));
$info=$datos->consulta_general();
$aux=count($info);
$codigos=array();
for ($i=0; $i < $aux; $i++) { 
	$codigo[$i]=$info[$i][3];
}
$datos2 = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
$info2=$datos2->recuperar_especialidades();
$aux2=count($info2);
//print_r($info2);
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
		    		<h3 class="mdl-cell--hide-desktop" style="color:orange">Filtrar Empleado</h3>
					<br/>
					<h3 style="color:orange" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Lista de empleados</h3>
					<div id="info" class="mdl-cell mdl-cell--12-col" style="display: none"></div>
					<div id="info_parcial">
						<table class="mdl-data-table mdl-js-data-table">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">
												Cedula
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Nombre
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Apellido
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Direccion
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Especialidad
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Telefono
											</th>
										</tr>
									</thead>
									<tbody>

						<?php
							for ($i=0; $i < $aux; $i++) { 
								?>
									<form method="POST" action="../include/acciones_emple.php">
										<tr>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" required readonly type="number" name="cedula" value="<?php echo $info[$i][0] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" required type="text" name="nombre" value="<?php echo $info[$i][1] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" required type="text" name="apellido" value="<?php echo $info[$i][2] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" required type="text" name="direccion" value="<?php echo $info[$i][4] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<select name="especialidad">
													<option value="<?php echo $info[$i][3] ?>"><?php echo $info[$i][9] ?></option>
													<?php
														for ($z=0; $z < $aux2; $z++) { 
															if ($info[$i][9]!=$info2[$z][0]) {
																?>
																	<option value="<?php echo $info[$i][3] ?>"><?php echo $info2[$z][0] ?></option>
																<?php
															}
														}
													?>
												</select>
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" required type="number" name="telefono" value="<?php echo $info[$i][7] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
											<button type="submit" name="modificar" value="a">Modificar</button>
											<button type="submit" name="eliminar" value="b">Eliminar</button>
										</td>
										</tr>
									</form>
								<?php
							}
						?>
						<form action="../include/agre_emple.php" method="POST">
								<tr style="display: none" id="nuevo">
									<td class="mdl-data-table__cell--non-numeric"><input size="13" min="1000000" max="99999999" required type="number" name="cedula"></td>
									<td class="mdl-data-table__cell--non-numeric"><input size="13" required type="text" name="nombre"></td>
									<td class="mdl-data-table__cell--non-numeric"><input size="13" required type="text" name="apellido"></td>
									<td class="mdl-data-table__cell--non-numeric"><input size="13" required type="text" name="direccion"></td>
									<td class="mdl-data-table__cell--non-numeric">
												<select name="especialidad">
													<option value="0">Seleccione</option>
													<?php
														for ($z=0; $z < $aux2; $z++) { 
																?>
																	<option value="<?php echo $info2[$z][2] ?>"><?php echo $info2[$z][0] ?></option>
																<?php
															}
													?>
												</select>
									<td class="mdl-data-table__cell--non-numeric"><input size="13" required type="number" name="telefono"></td>
									<td class="mdl-data-table__cell--non-numeric"><button type="submit" name="guardar">Guardar</button></td>
								</tr>
							</form>
						</tbody>
								</table>
								<br>
								<button type="button" id="button">Nuevo empleado</button> 
					</div>
				</div>
				<div align="center"></div>
	    </div>
	  </main>
	</div>
	<script type="text/javascript">
	  $("#activador").click( function() {
	      $.post("../include/consulta.php",$("#formulario").serialize(),function(datos){
	        $("#info").html(datos);
	        $("#info_parcial").hide("slow");
	        $("#info").show(2000);
	      });
	    //alert("no se puede realizar una busqueda vacia, por favor especifique un numero de cedula o rif");
	    event.preventDefault();
	  });
	  $("#ver_todo").click( function() {
			$("#contenido").hide(2000);
			$("#contenido").load(index.php);
			$("#contenido").show(2000);
	    //alert("no se puede realizar una busqueda vacia, por favor especifique un numero de cedula o rif");
	    event.preventDefault();
	  });
	  $("#button").click(function() {
		$("#button").hide(1000);
		$("#nuevo").fadeIn(2000);
		});
	</script>
</body>
</html>
</div>