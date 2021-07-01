<?php
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$canti_mini=$_POST['can_mini'];
$rif=$_POST['rif_provee'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/productos.php','uri'=>'urn:productos',));
$info=$datos->modificar($codigo,$nombre,$descripcion,$precio,$cantidad,$canti_mini,$rif);
echo "<script language='javascript'>alert('Modificacion exitosa');window.location='../paginas/productos.php';</script>";
?>