<?php
error_reporting(0);
$modificar=$_POST['modificar'];
$eliminar=$_POST['eliminar'];
$rif=$_POST['rif'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$num_tele=$_POST['num_tele'];
$direccion=$_POST['direccion'];
if (isset($modificar)) {
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/proveedor.php','uri'=>'urn:proveedor',));
	$info=$datos->modificar($rif,$nombre,$email,$num_tele,$direccion);
	echo "<script language='javascript'>alert('Modificacion exitosa');window.location='../paginas/proveedor.php';</script>";
	//$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	//$info=$datos->eliminar($codigo);
}
if (isset($eliminar)) {
	//codigo de modificar
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/proveedor.php','uri'=>'urn:proveedor',));
	$info=$datos->eliminar($rif);
	echo "<script language='javascript'>alert('proveedor eliminado con exito');window.location='../paginas/proveedor.php';</script>";
}
?>