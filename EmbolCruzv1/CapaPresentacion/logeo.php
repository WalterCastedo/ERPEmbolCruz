<?php
$login=$_POST['txtlogin'];
$password=$_POST['txtpassword'];
$sql="select * from usuario where login='".$login."' and password='".$password."'";
$conexion=new mysqli("localhost", "root", "", "bdembolcruz");
// aqui seleccionamos la base de datos
if ($conexion->connect_errno) 
{
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $conexion->connect_errno . "\n";
    echo "Error: " . $conexion->connect_error . "\n";    
}
else
{
    if(!$resultado=$conexion->query($sql))
    {
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $conexion->errno . "\n";
            echo "Error: " . $conexion->error . "\n";         
    }
   else 
    {
       $cantfilas=mysqli_num_rows($resultado);
       if($cantfilas>0)
       {
         $host  = $_SERVER['HTTP_HOST'];	 
   	 $uri   = '/Embolcruzv1/Formularios/';	
  	 $extra='MenuUsuarios.htm';
	 header("Location: http://$host$uri$extra");	       
       }
       else
       {
          echo "Usuario No Encontrado";
          echo "<p><a href='../formularios/login.htm'>Volver a intentar</a></p>";	   
           
       }
    }
    
}

$conexion->close();
?>