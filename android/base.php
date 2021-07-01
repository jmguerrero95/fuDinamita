<?php
class base_de_datos
	{
		var $equipo="127.0.0.1";
		var $puerto= 5432;
		var $base="dinamita";
		var $usuario="postgres";
		var $clave="12345678";
		function __construct($equipo='127.0.0.1', $puerto='5432',$base='dinamita',$usuario='postgres',$clave='12345678')
		{
			$this->equipo=$equipo;
			$this->puerto=$puerto;
			$this->base=$base;
			$this->usuario=$usuario;
			$this->clave=$clave;
		}
		function conectar()
		{
			$datos_bd="host='$this->equipo' port='$this->puerto' dbname='$this->base' user='$this->usuario' password='$this->clave'";	
			return $datos_bd;
		}
	}
?>