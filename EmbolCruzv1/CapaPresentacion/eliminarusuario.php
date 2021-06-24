<?php
$cod=$_GET['cod'];
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
	$sql="update usuario set estado=0 where codigo=" . $cod ;
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
		echo "<font color=green size=10>El Usuario fue deshabilitado</font>";	
		echo "<br></br>";
		echo "<p><a href='../../formularios/login.htm'>Ingresar</a></p>";                      
        }

}  
$conexion->close();
?>
