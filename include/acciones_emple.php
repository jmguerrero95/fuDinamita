<?php
//error_reporting(0);
$modificar=$_POST['modificar'];
$eliminar=$_POST['eliminar'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
if (isset($modificar)) {
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleado',));
	$info=$datos->modificar($cedula,$nombre,$apellido,$direccion,$especialidad,$telefono);
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
	$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	$info=$datos->eliminar($cedula);
	echo "<script language='javascript'>alert('especialidad eliminada con exito');window.location='../paginas/especialidad.php';</script>";
}
?>