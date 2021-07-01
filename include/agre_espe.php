<?php
$especialidad=$_POST['especialidad'];
$descripcion=$_POST['descripcion'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/especialidades.php','uri'=>'urn:especilidad',));
	$info=$datos->agregar($especialidad,$descripcion);
	echo "<script language='javascript'>alert('Nueva especialidad agregada con exito');window.location='../paginas/especialidad.php';</script>";
?>