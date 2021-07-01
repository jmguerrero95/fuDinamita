<?php
//error_reporting(0);
$modificar=$_POST['modificar'];
$eliminar=$_POST['eliminar'];
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$canti_mini=$_POST['canti_mini'];
$rif=$_POST['rif'];
if (isset($modificar)) {
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/productos.php','uri'=>'urn:productos',));
	$info=$datos->modificar($descripcion,$precio,$cantidad,$canti_mini,$rif,$nombre,$codigo);
	if ($info) {
		echo $info;
	}
	else
	echo "<script language='javascript'>alert('Modificacion exitosa');window.location='../paginas/empleados.php';</script>";
	//$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	//$info=$datos->eliminar($codigo);
}
if (isset($eliminar)) {
	//codigo de modificar
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/productos.php','uri'=>'urn:productos',));
	$info=$datos->eliminar($cedula);
	echo "<script language='javascript'>alert('especialidad eliminada con exito');window.location='../paginas/especialidad.php';</script>";
}
?>