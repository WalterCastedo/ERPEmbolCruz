<?php
$cod=$_GET['cod'];
$sql="select * from usuario where codigo=".$cod;
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
           $fila = $resultado->fetch_row();
            echo "<p align='center'><strong><font color='#000000' size='5'>Actualizar Cliente</font></strong></p>";
            echo "<form method=POST action=modificarusuario.php>";	
            echo		"<table border=0 width=100%>";
            echo		  "<tr>";
            echo            "<input name=txtcodigo type=hidden value=$fila[0]>"; 
            echo			"<td width=50% align=right>LOGIN</td>";	
            echo			"<td width=50%><input type='text' name='txtlogin' value='$fila[1]' size='15'></td>";
            echo		  "</tr>";
            echo		  "<tr>";
            echo			"<td width=50% align=right>PASSWORD</td>";
            echo			"<td width=50%><input type='password' name='txtpassword' value='$fila[2]' size='15'></td>";
            echo		  "</tr>";
            echo			"<td width=50% align=right>CONFIRMAR</td>";
            echo			"<td width=50%><input type='password' name='txtconfirmacion' value='$fila[2]' size='15'></td>";	
            echo		  "</tr>";
            echo		  "</tr>";
            echo			"<td width=50% align=right><input name='Bguardar' type='submit' id='Bguardar' value='Guardar'/></td>";
            echo			"<td width=50%><input name='Bguardar' type='reset' id='Bcancelar' value='Reset'/></td>";	
            echo		  "</tr>";
            echo		"</table>";			
            echo	  "</div>";
            echo	"</form>";       
        }
       else
        {     
           echo "USUARIO NO ENCONTRADO";	   	         
        }
        
    }
}

$conexion->close();
?>