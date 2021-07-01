<?php
	require('base.php');
	$usuario=$_GET['usuario'];
	$conexion = new base_de_datos;
	$conexion2=$conexion->conectar();
	$cone_fin=pg_connect($conexion2);
	$resultado=pg_query($cone_fin, "SELECT clave FROM public.usuarios WHERE usuario='".$usuario."';");
	$datos=pg_fetch_all_columns($resultado);
	echo json_encode($datos);
?>