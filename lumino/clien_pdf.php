<?php
session_start();
$datos=array();
$cedula=$_SESSION['cedula'];

?>
<page backtop="15mm" backbottom="15mm" backleft="10mm" backright="10mm">
<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
<h1 align="center" id="empresa_pdf"><span id="empresa2_pdf">DISTRIBUIDORA Y FUMIGADORA</span> <br/>LA DINAMITA</h1>
<br>
<h1 align="center" style="color:#C21416;">Informacion de cliente</h1>
<br><br><br>
<h2 align="center">Datos personales</h2>
<table border="1" align="center" id="tabla_pdf">
	<tr>
		<td>Cedula</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Email</td>
		<td>Telefono loca</td>
		<td>Telefono Movil</td>
		<td>Direccion</td>
	</tr>
	<tr>
		<td><?php echo $cedula[0]?></td>
		<td><?php echo $cedula[2]?></td>
		<td><?php echo $cedula[3]?></td>
		<td><?php echo $cedula[5]?></td>
		<td><?php echo $cedula[6]?></td>
		<td><?php echo $cedula[6]?></td>
		<td><?php echo $cedula[4]?></td>
	</tr>
</table>
<br><br><br><br><br>
<h2 align="center">Fumigaciones pendientes</h2>
</page>