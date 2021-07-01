<?php
$ingreso=array();
$cedula=$_POST['cedu'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/consul_clien.php','uri'=>'urn:clientes',));
$info=$datos->consulta_especifica($cedula);
if (is_null($info)) {
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/material.min.css">
<script type="text/javascript" src="../js/material.min.js"></script>
	<title></title>
</head>
<body>
	<div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone mdl-cell--hide-tablet">
	<div><p>Usuario no registrado, Proceda al registro</p></div>
		<form action="../include/agregar.php" id="guardar" method="POST">
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
						cargo
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Telefono
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="cedula">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="nombre">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="apellido">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="direccion">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="email">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="telefono">
					</td>
				</tr>
			</tbody>
		</table>
		<button type="submit" class="mdl-button mdl-js-button mdl-button--colored" id="salvar">
			Guardar
		</button>
		</form>
		<button class="mdl-button mdl-js-button mdl-button--colored" onclick="javascript:window.location.reload();">
			Cancelar
		</button>
	</div>	
	<script type="text/javascript">
	 /*document.ready(function() {
	 	var notification = document.querySelector('.mdl-js-snackbar');
		notification.MaterialSnackbar.showSnackbar(
		  {
		    message: 'No existe, Ingrese los datos para registrar'
		  }
		);
	 });
	  $("#salvar").click( function() {
	      $.post("../include/guardar_clien.php",$("#guardar").serialize(),function(datos){
	        $("#info").html(datos);
	        $("#info_parcial").hide("slow");
	        $("#info").show(2000);
	      });
	    //alert("no se puede realizar una busqueda vacia, por favor especifique un numero de cedula o rif");
	    event.preventDefault();
	  });*/
	</script>
</body>
</html>






<?php
}else
if (isset($info)) {
?>
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
						Cargo
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Telefono
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<input readonly="readonly" size="13" type="text" name="cedula" value="<?php echo $info[0] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="nombre" value="<?php echo $info[2] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="apellido" value="<?php echo $info[3] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="direccion" value="<?php echo $info[4] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="email" value="<?php echo $info[5] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="telefono" value="<?php echo $info[6] ?>">
					</td>
				</tr>
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
<?php
};
?>