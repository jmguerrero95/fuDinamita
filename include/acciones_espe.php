<?php
error_reporting(0);
$modificar=$_POST['modificar'];
$eliminar=$_POST['eliminar'];
$especialidad=$_POST['especialidad'];
$descripcion=$_POST['descripcion'];
$codigo=$_POST['codigo'];
if (isset($modificar)) {
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	$info=$datos->modificar($codigo,$especialidad,$descripcion);
	echo "<script language='javascript'>alert('Modificacion exitosa');window.location='../paginas/especialidad.php';</script>";
	//$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	//$info=$datos->eliminar($codigo);
}
if (isset($eliminar)) {
	//codigo de modificar
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	$info=$datos->eliminar($codigo);
	echo "<script language='javascript'>alert('especialidad eliminada con exito');window.location='../paginas/especialidad.php';</script>";
}
?>