<?php
//error_reporting(0);
session_start();
$numero=$_SESSION['numero'];
$codigo=$_SESSION['codigo'];
$prueba=array();
for ($i=0; $i < $numero; $i++) { 
	if (empty($_POST[$i])) {
	}else
	$cedulas[$i]=$_POST[$i];
}
array_push($cedulas, $codigo);
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/cuadrilla.php','uri'=>'urn:cuadrilla',));
$info=$datos->asig_emple_cuadri($cedulas);
//$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleado',));
//$info=$datos->agregar($cedula,$nombre,$apellido,$direccion,$especialidad,$telefono);
/*$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
echo $especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleado',));
	$info=$datos->agregar($cedula,$nombre,$apellido,$direccion,$especialidad,$telefono);
	//echo "<script language='javascript'>alert('Nuevo empleado agregado con exito');window.location='../paginas/empleados.php';</script>";
	//echo $info;*/
?>