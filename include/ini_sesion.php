<?php
$ingreso=array();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$inicio = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/index.php','uri'=>'urn:inicio_sesion',));
$ingreso=$inicio->iniciar_sesion($usuario,$clave);
if ($ingreso==1||$ingreso==2||$ingreso==3) {
	echo "<script language='javascript'>alert('Bienvenido');window.location='../paginas/index.php'</script>";
	/*session_start();
	$_SESSION['logueado']="si";
	$_SESSION['permiso']=$ingreso;
	header('Location: ../paginas/busqueda.php');*/
}
else 
	echo "<script language='javascript'>alert('Usuario o clave incorrecto, por favor verifique e intente de nuevo');history.back(1)</script>";
	$usuario=null;
	$clave=null
?>