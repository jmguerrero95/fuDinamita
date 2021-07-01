<?php
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
echo $especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleado',));
	$info=$datos->agregar($cedula,$nombre,$apellido,$direccion,$especialidad,$telefono);
	//echo "<script language='javascript'>alert('Nuevo empleado agregado con exito');window.location='../paginas/empleados.php';</script>";
	//echo $info;
?>