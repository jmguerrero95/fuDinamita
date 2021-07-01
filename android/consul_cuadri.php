<?php
	require('base.php');
	$cedula=$_GET['cedula'];
	$conexion = new base_de_datos;
	$conexion2=$conexion->conectar();
	$cone_fin=pg_connect($conexion2);
	$resultado=pg_query($cone_fin, "SELECT * FROM public.proyec_fumi");
	echo " ".pg_last_error();
	$datos=pg_fetch_all_columns($resultado);
	print_r($datos);
	//echo json_encode($datos);
?>