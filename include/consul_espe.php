<?php
$ingreso=array();
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/consul_clien.php','uri'=>'urn:especilidad',));
$info=$datos->consulta_general();
$aux=count($info);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/material.min.css">
<script type="text/javascript" src="../js/material.min.js"></script>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone mdl-cell--hide-tablet">
	<form method="POST" action="../include/editar.php">
		<table class="mdl-data-table mdl-js-data-table">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">
						Nombre de la especialidad
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Descripción
					</th>
				</tr>
			</thead>
			<tbody>
			<?php
				for ($i=0; $i < $aux; $i++) { 
			?>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="nombre" value="<?php echo $info[$i][1] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="apellido" value="<?php echo $info[$i][2] ?>">
					</td>
				</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<button type="submit" class="mdl-button mdl-js-button mdl-button--colored">
			Actualizar Datos
		</button>
	</div>
	</form>	
	<button class="mdl-button mdl-js-button mdl-button--colored" id="ver_todo">
			Ver todos
		</button>
</body>
</html>