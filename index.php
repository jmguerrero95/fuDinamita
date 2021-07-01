<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<link href="icons/sprites/svg-sprite/svg-sprite-action.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>
</head>
<body id="ini_sesion">
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		  <header class="mdl-layout__header">
		  <div align="center" id="titulo">
		      	<h3 id="titulo_princi">Distribuidora y Fumigadora la Dinamita</h3>
		  </div>
		      <!-- Add spacer, to align navigation to the right -->
		      <div class="mdl-layout-spacer"></div>
		      <!-- Navigation. We hide it in small screens. -->
		  </header>
		</div>
		<div class="mdl-grid">
			<div id="conte_princi" class="mdl_cell mdl-cell--12-col" align="center">
				<div id="contenedor" class="mdl_cell mdl-cell--3-col mdl-cell--12-col-phone" align="center">
					<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone">
						<form action="include/ini_sesion.php" method="POST">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    	<input class="mdl-textfield__input" type="text" id="usuario" name="usuario">
						    	<label class="mdl-textfield__label" for="usuario"><div class="svg-ic_account_circle_24px" style="width: 24px; height: 24px;"><span style="margin-left: 24px;">Usuario</span></div></label>
						    </div>
						    <br/>
						    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							  	<input class="mdl-textfield__input" type="password" id="clave" name="clave">
							    <label class="mdl-textfield__label" for="clave"><div class="svg-ic_lock_outline_24px" style="width: 24px; height: 24px;"><span style="margin-left: 24px;">Clave</span></div></label>
							</div>
							<br/>
						    <button id="boton" type="submit" class="mdl-color--accent mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
								Ingresar
							</button>	
						</form>
						<br/><br/>
					</div>
				</div>
			</div>
		</div>
</body>
</html>