<?php
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$costo=$_POST['costo'];
$cuadrilla=$_POST['cuadrilla'];
$direccion=$_POST['direccion'];
$fech_ini=$_POST['fech_ini'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/proyecto.php','uri'=>'urn:proyecto',));
$info=$datos->agregar($cedula,$nombre,$costo,$cuadrilla,$direccion,$fech_ini);
$info2=$datos->recuperar_codigo($cedula,$cuadrilla,$direccion,$fech_ini);
echo $info2
?>