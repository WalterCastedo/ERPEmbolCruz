<?php
$conexion=mysql_connect("localhost","root","");
// aqui seleccionamos la base de datos
mysql_select_db("BRIGADA",$conexion);
$log=$_POST['txtlogin'];
$pas=$_POST['txtpassword'];
$con=$_POST['txtconfirmacion'];
if($pas==$con)
 {
    $sql="SELECT * FROM PARAMETRO WHERE CODIGO=1";
	$result=mysql_query($sql,$conexion);
	$obj=mysql_fetch_object($result);
	$nuevocodigo=$obj->CODUSUARIO+1;
	$estado="ACTIVO";
	$sql="INSERT INTO USUARIO(codigo,login,password,estado) VALUES(".$nuevocodigo.",'".$log ."','".$pas."','".$estado."')";
	$result=mysql_query($sql,$conexion);
	if(mysql_affected_rows()>0)
	   {    
		$sql="UPDATE PARAMETRO SET CODUSUARIO=".$nuevocodigo." WHERE CODIGO=1";
		// aqui disparamos la consulta SQL
		$result=mysql_query($sql,$conexion);
		if(mysql_affected_rows()>0)
		  {		
			echo "<font color=green size=10>El Usuario fue registrado correctamente</font>";	
			echo "<br></br>";
    		echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";
			echo "<p><a href='../../scripts/bd/listadousuarios.php'>Listado de Usuarios</a></p>"; 			echo "<p><a href='../../formularios/login.htm'>Ingresar</a></p>";      
		  }
	   }
	   else
		 {
		   echo "Usuario No Registrado";
		   echo "<p><a href='../../formularios/RegistroUsuario.htm'>Volver a intentar</a></p>";	   
		 } 
  }
 else
  {
     echo "El password y la confirmación deben ser iguales";
	 echo "<p><a href='../../formularios/RegistroUsuario.htm'>Volver a intentar</a></p>";	     
  } 		 
mysql_close($conexion);
?>
