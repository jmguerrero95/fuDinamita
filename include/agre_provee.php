<?php
$rif=$_POST['rif'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$num_tele=$_POST['num_tele'];
$direccion=$_POST['direccion'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/proveedor.php','uri'=>'urn:proveedor',));
	$info=$datos->agregar($rif,$nombre,$email,$num_tele,$direccion);
	echo "<script language='javascript'>alert('Nuevo proveedor agregado con exito');window.location='../paginas/proveedor.php';</script>";
	echo $info;
?>