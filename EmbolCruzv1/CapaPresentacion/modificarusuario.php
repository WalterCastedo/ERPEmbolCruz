<?php
$cod=$_POST['txtcodigo'];
$log=$_POST['txtlogin'];
$pas=$_POST['txtpassword'];
$con=$_POST['txtconfirmacion'];
$conexion=new mysqli("localhost", "root", "", "bdsoporte");
// aqui seleccionamos la base de datos
if ($conexion->connect_errno) 
{
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $conexion->connect_errno . "\n";
    echo "Error: " . $conexion->connect_error . "\n";    
}
else
{
  if($pas==$con)
   {
	$sql="update usuario set password='". $pas . "' where codigo=" . $cod ;
	// aqui disparamos la consulta SQL
	if(!$resultado=$conexion->query($sql))
        {
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $conexion->errno . "\n";
            echo "Error: " . $conexion->error . "\n";            
        }
        else
        {
		echo "<font color=green size=10>El Usuario fue actualizado</font>";	
		echo "<br></br>";
		echo "<p><a href='../../formularios/login.htm'>Ingresar</a></p>";                      
        }
  }
 else
  {
     echo "El password y la confirmacion deben ser iguales";
	 echo "<p><a href='../../formularios/RegistroUsuario.htm'>Volver a intentar</a></p>";	     
  } 
}  
$conexion->close();
?>
