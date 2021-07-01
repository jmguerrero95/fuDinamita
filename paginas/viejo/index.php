<div id="contenido">
<?php
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/consul_clien.php','uri'=>'urn:clientes',));
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
<body id="ini_sesion" style="background-color: beige">
	<div id="carga" class="mdl-spinner mdl-js-spinner is-active"></div>
	<div id="fondo_carga"></div>
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
		    		<h3 class="mdl-cell--hide-desktop" style="color:blue">Buscar cliente</h3>
					<br/><br/><br/><br/>
					<form method="POST" id="formulario">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--2-col">
					    <input class="mdl-textfield__input" maxlength="13" size="13" type="number" minlength="8" id="cedu" name="cedu">
					    <label class="mdl-textfield__label" for="cedu">Cedula a buscar</label>
					  </div>
					  <button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-button--mini-fab" id="activador">
					  <div class="svg-ic_search_24px" align="center" style="width: 24px; height: 24px; margin-left: 25%;"></div>
					  </button>
					</form>
					<div class="mdl-tooltip" data-mdl-for="activador">Buscar cliente a consultar</div>
					<h3 style="color:orange" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Lista de Clientes</h3>
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
												Email
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
										<tr>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" type="text" name="cedula" value="<?php echo $info[$i][0] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" type="text" name="nombre" value="<?php echo $info[$i][2] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" type="text" name="apellido" value="<?php echo $info[$i][3] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" type="text" name="direccion" value="<?php echo $info[$i][4] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" type="text" name="email" value="<?php echo $info[$i][5] ?>">
											</td>
											<td class="mdl-data-table__cell--non-numeric">
												<input size="13" type="text" name="telefono" value="<?php echo $info[$i][6] ?>">
											</td>
										</tr>
								<?php
							}
						?>
						</tbody>
								</table>
					</div>
				</div>
				<div align="center"></div>
	    </div>
	  </main>
	</div>
	<script type="text/javascript">
	  $(window).on('load',function() {
      		$("#carga").fadeOut("slow");
	  });
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
	</script>
</body>
</html>
</div>