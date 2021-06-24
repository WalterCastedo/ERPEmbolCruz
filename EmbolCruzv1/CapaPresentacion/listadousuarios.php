<?php
echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";
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
  $sql="select * from usuario order by codigo";
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
              echo "<div align=center><strong><font size=5>Listado de Usuarios Activos</font></strong></div>";
              echo "<table border=1 align='center'>";
              echo "<tr>";
                   echo "<td><div align='center'><strong>CODIGO</strong></div></td>";
                   echo "<td><div align='center'><strong>LOGIN</strong></div></td>";
                   echo "<td><div align='center'><strong>PASSWORD</strong></div></td>";
                   echo "<td><div align='center'><strong>ESTADO</strong></div></td>";
              echo"</tr>";

              while($fila = $resultado->fetch_row())
              {
              echo "<tr>";
              echo "<td>".$fila[0]."</td>";
              echo "<td>".$fila[1]."</td>";
              echo "<td>".$fila[2]."</td>";
              echo "<td>".$fila[3]."</td>";
              echo"<td><a href='mostrarusuarioparaeditar.php?cod=".$fila[0]."'>editar</a></td>";
              echo"<td><a href='eliminarusuario.php?cod=".$fila[0]."'>eliminar</a></td>";
              echo"</tr>";
              }
            echo"</table>";    
          } 
       else
         {
          echo "Lista de usuarios vacio";     
         }
        
    }
}
$conexion->close();
?>
