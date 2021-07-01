<?php
$nombre=$_POST['nombre'];
$cedu_jefe=$_POST['cedu_jefe'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/cuadrilla.php','uri'=>'urn:cuadrilla',));
	$info=$datos->agregar($nombre,$cedu_jefe);
	echo "<script language='javascript'>alert('Cuadrilla registrada, a continuacion rectifique el nombre y escoja los empleados a asignar');window.location='../lumino/agre_emple_cuadri.php';</script>";
	//echo $info;
session_start();
$_SESSION['nombre']=$nombre;
$_SESSION['cedu_jefe']=$cedu_jefe;
?>