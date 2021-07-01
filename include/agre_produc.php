<?php
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$cant_mini=$_POST['cant_mini'];
$rif_provee=$_POST['rif_provee'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/productos.php','uri'=>'urn:productos',));
$info=$datos->agregar($descripcion,$precio,$cantidad,$cant_mini,$rif_provee,$nombre);
echo $info;
?>