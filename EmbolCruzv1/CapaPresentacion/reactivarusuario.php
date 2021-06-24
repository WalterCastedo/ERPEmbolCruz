<?php
echo "<font color=green size=10>Tarea para la casa</font>";
echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";
/*
$conexion=mysql_connect("localhost","root","");
// aqui seleccionamos la base de datos
mysql_select_db("BRIGADA",$conexion);
$cod=$_POST['txtcodigo'];
$log=$_POST['txtlogin'];
$pas=$_POST['txtpassword'];
$con=$_POST['txtconfirmacion'];

echo "Los datos recibidos son:<br>";
echo "codigo=".$cod."<br>";
echo "login=".$log."<br>";
echo "password=".$pas."<br>";
echo "password=".$con."<br>";

if($pas==$con)
 {
	$sql="UPDATE USUARIO SET LOGIN='".$log ."',PASSWORD='".$pas."' WHERE CODIGO=".$cod;
	// aqui disparamos la consulta SQL
	$result=mysql_query($sql,$conexion);
	if(mysql_affected_rows()>0)
	   {    
		echo "<font color=green size=10>Los datos fueron guardados correctamente</font>";	
		echo "<br></br>";
		echo "<p><a href='../../scripts/bd/listadousuarios.php'>Listado de Usuarios</a></p>";      
		echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";
		//$error=mysql_errno();
		//echo "El error es=".$error;
	   }
	   else
		 {
   	       if(mysql_errno()!=0)
	         {
			   echo "Se ha producido un error";
			   echo "El codigo del error es=".$error;		   
			   echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";	      
			 }
		   else
		     {
				echo "<font color=green size=10>Los datos fueron guardados correctamente</font>";	
				echo "<br></br>";
				echo "<p><a href='../../scripts/bd/listadousuarios.php'>Listado de Usuarios</a></p>";			
				echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";
			 }		   		   
		 } 
  }
 else
  {
     echo "El password y la confirmación deben ser iguales";
	 echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";	     
  } 		 
mysql_close($conexion);
*/
?>
