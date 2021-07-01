<?php
$ingreso=array();
$cod_produc=$_POST['cod_produc'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/productos.php','uri'=>'urn:productos',));
$info=$datos->consulta_especifica($cod_produc);
$info_provee = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/proveedor.php','uri'=>'urn:proveedor',));
$rifs=$info_provee->consulta_rif();
$aux2=count($rifs);
print_r($info);
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
	<div><p>producto no registrado, Proceda al registro</p></div>
		<form action="../include/agre_produc.php" id="guardar" method="POST">
		<table class="mdl-data-table mdl-js-data-table">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">
						codigo
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Nombre
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Descripcion
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Precio
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						cantidad
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						cantidad minima
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Rif de proveedor
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="number" required name="codigo">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" required name="nombre">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" required name="descripcion">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="number" required name="precio">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="number" required name="cantidad">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="number" required name="cant_mini">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<select name="rif_provee">
													<option value="<?php echo $info[5] ?>"><?php echo $info[5] ?></option>
													<?php
														for ($z=0; $z < $aux2; $z++) { 
															if ($info[5]!=$rifs[$z][0]) {
																?>
																	<option><?php echo $rifs[$z][0] ?></option>
																<?php
															}
														}
													?>
						</select>
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
<?php
}else
if (isset($info)) {
?>
	<div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone mdl-cell--hide-tablet">
	<form method="POST" action="../include/edit_produ.php">
		<table class="mdl-data-table mdl-js-data-table">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">
						codigo
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Nombre
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Descripcion
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Precio
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						cantidad
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						cantidad minima
					</th>
					<th class="mdl-data-table__cell--non-numeric">
						Rif de proveedor
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<input readonly="readonly" size="13" type="text" name="codigo" value="<?php echo $info[0] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="nombre" value="<?php echo $info[6] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="descripcion" value="<?php echo $info[1] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="precio" value="<?php echo $info[2] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="cantidad" value="<?php echo $info[3] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" type="text" name="can_mini" value="<?php echo $info[4] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<select name="rif_provee">
													<option value="<?php echo $info[5] ?>"><?php echo $info[5] ?></option>
													<?php
														for ($z=0; $z < $aux2; $z++) { 
															if ($info[5]!=$rifs[$z][0]) {
																?>
																	<option><?php echo $rifs[$z][0] ?></option>
																<?php
															}
														}
													?>
						</select>
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