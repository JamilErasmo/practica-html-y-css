<?php
/**
 * class mysql i
 */
class class_mysqli{
	
	//var de conexion de la bd
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

	public function __construct($host="", $user="", $pass="", $bd="")
	{
		$this->BaseDatos=$bd;
		$this->Usuario=$user;
		$this->Clave=$pass;
		$this->Servidor=$host;
	}

	function conectar($host, $user, $pass, $bd){
		if ($bd != "") $this->BaseDatos=$bd; 
		if ($user != "") $this->Usuario=$user; 
		if ($pass != "") $this->Clave=$pass; 
		if ($host != "") $this->Servidor=$host;

		//parametos de conexion a la bd
		$this->Conexion_ID=new mysql($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if (!$this->Conexion_ID) {
		 	$this->Error="La conexion a fallado :(";
		 	return 0;
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
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}

	function verconsulta(){
		echo "<table border='1'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	function verconsultaCRUD(){
		echo "<table border='1'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		
		echo "<td>Actualizar</td>";
		echo "<td>Borrar</td>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td><a href='update.php?idUser=$row[0]'>Actualizar</a></td>";
			echo "<td><a href='deleteUser.php?pepito=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

}
?>