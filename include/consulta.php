<script type="text/javascript" src="../js/jquery.js"></script>
<?php
$ingreso=array();
$cedula=$_POST['cedu'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/consul_clien.php','uri'=>'urn:clientes',));
$info=$datos->consulta_especifica($cedula);
if (is_null($info)) {
?>
	<div class="">
	<div><p>Usuario no registrado, Proceda al registro</p></div>
		<div>
		<form action="../include/agregar.php" id="guardar" method="POST">
		<table class="table table-hover table-condensed">
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Cedula</b></label></br></br>
						<input class="form-control" size="13" required type="number" min="1000000" max="99999999" name="cedula">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Nombre</b></label></br></br>
						<input size="13" required type="text" class="form-control" name="nombre">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Apellido</b></label></br></br>
						<input size="13" required type="text" class="form-control" name="apellido">
					</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Email</b></label></br></br>
						<input size="13" required type="email" class="form-control" name="email">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Telefono local</b></label></br></br>
						<input size="13" required type="number" class="form-control" name="telefono">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Celular</b></label></br></br>
						<input size="13" required type="number" class="form-control" name="telefono">
					</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric" colspan="3">
						<label><b>Direccion</b></label></br></br>
						<textarea name="direccion" required class="form-control"><?php echo $info[4] ?></textarea>
					</td>
				</tr>
			</tbody>
			</table>








			<!--<thead>
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
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" required type="number" min="1000000" max="99999999" name="cedula">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" required type="text" name="nombre">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" required type="text" name="apellido">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" required type="text" name="direccion">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" required type="email" class="form-control" name="email">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<input size="13" required type="number" name="telefono">
						<input size="13" required type="number" class="form-control" name="telefono">
					</td>
				</tr>
			</tbody>
		</table>-->
		<div class="col-lg-4 col-md-offset-4">
		<button style="float: left;" type="submit" class="btn btn-primary" id="salvar">
			Guardar
		</button>
		</form>
		<button style="float: right;" class="btn btn-primary" onclick="javascript:window.location.reload();">
			Cancelar
		</button>
		</div>
	</div>
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
	<div>
	<form method="POST" action="../include/editar.php">
		<table class="table table-hover table-condensed">
			
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Cedula</b></label></br></br>
						<input readonly="readonly" class="form-control" size="13" type="text" name="cedula" value="<?php echo $info[0] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Nombre</b></label></br></br>
						<input size="13" type="text" class="form-control" name="nombre" value="<?php echo $info[2] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Apellido</b></label></br></br>
						<input size="13" type="text" class="form-control" name="apellido" value="<?php echo $info[3] ?>">
					</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Email</b></label></br></br>
						<input size="13" type="text" class="form-control" name="email" value="<?php echo $info[5] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Telefono local</b></label></br></br>
						<input size="13" type="text" class="form-control" name="telefono" value="<?php echo $info[6] ?>">
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<label><b>Celular</b></label></br></br>
						<input size="13" type="text" class="form-control" name="telefono" value="<?php echo $info[6] ?>">
					</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric" colspan="3">
						<label><b>Direccion</b></label></br></br>
						<textarea name="direccion" class="form-control"><?php echo $info[4] ?></textarea>
					</td>
				</tr>
			</tbody>
		</table>
		<div>
		<button type="submit" style="float: left" class="btn btn-primary"">
			Actualizar Datos
		</button>
		</form>
		<form method="POST" action="../lumino/agre_proyec.php">
			<input readonly="readonly" size="13" type="hidden" name="cedula" value="<?php echo $info[0] ?>">
			<button type="submit" style="float: right" class="btn btn-primary">
			Asignar proyecto
			</button>
		</form>
	</div>
	</div>
	<form method="post" action="../include/client_pdf.php">
		<input type="hidden" name="cedula" value="<?php echo $info[0] ?>">	
		<button type="submit" class="btn btn-primary" id="pdf">generar pdf</button>
	</form>
<?php
session_start();
$_SESSION['cedula']=$info;
};
?>