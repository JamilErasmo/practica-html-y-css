<?php 

include("../dl/config.php");
  include("../dl/class_mysqli.php");
  $miconexion=new class_mysqli();
  $miconexion=->conectar('DBHOST','DBUSER','DBPASS','DBNAME');

$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fecha=$_POST['fecha'];
	echo "Biemvenido"." ".$nombres." ".$apellidos;


  $sql="insert into personal values('','$nombres','$apellidos','$correo','$direccion','$telefono','$fecha')"; 
   
  //$sql="update personal set nombres= 'Daniela',apellidos='pardo' where id =7";

   $resSQL= mysqli_query($conexion,$sql);
   if ($resSQL==""){
    echo "Problemas de ejecucion del SQL";
   }else{
    echo '<script>alerta("sentencia ejecutada..");</script>';
    echo "<script>location.href'../'</script>";
   }
?>