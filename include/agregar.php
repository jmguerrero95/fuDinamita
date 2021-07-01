<?php
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$correo=$_POST['email'];
$telefono=$_POST['telefono'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/consul_clien.php','uri'=>'urn:clientes',));
$info=$datos->agregar($cedula,$nombre,$apellido,$direccion,$correo,$telefono);
?>