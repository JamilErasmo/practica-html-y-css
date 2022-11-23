<?php
/**
 * class mysql i
 */
class class_mysqli{
	
	//var de conexion de la db
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;

	//variales de eror
	var $Error="";
	var $Errno=0;

	//variables de conexion
	var $Conexion_ID=0;
	var $Consulta_ID=0;

	public function __construct($host="", $user="", $pass="", $db="")
	{
		$this->BaseDatos=$db;
		$this->Usuario=$user;
		$this->Clave=$pass;
		$this->Servidor=$host;
	}

	function conectar($host, $user, $pass, $db){
		if ($db != "") $this->BaseDatos=$db; 
		if ($user != "") $this->Usuario=$user; 
		if ($pass != "") $this->Clave=$pass; 
		if ($host != "") $this->Servidor=$host;

		//parametos de conexion a la db
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if (!$this->Conexion_ID) {
		 	$this->Error="La conexion a fallado :(";
		 	return 0;
		}
		return $this->Conexion_ID;
	}
	function consulta($sql=""){
		if ($sql=="") {
			$this->Error="No hay sql";
			return 0;
		}
		//ejecuta la sql
		$this->Consulta_ID=mysqli_query($this->Conexion_ID, $sql);
		if (!$this->Consulta_ID) {
			print($this->Conexion_ID->error);
			return 0;
		}
		return $this->Conexion_ID;
	}

}
?>