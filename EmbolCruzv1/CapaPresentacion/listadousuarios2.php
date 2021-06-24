<?php
include_once("../CapaNegocio/clsusuario.php");
echo "<p><a href='../formularios/MenuUsuarios2.html'>Menu de Usuarios</a></p>";
$objusuario=new clsusuario();

if($objusuario->seleccionarregistrosactivos())
          {    	
              echo "<div align=center><strong><font size=5>Listado de Usuarios Activos</font></strong></div>";
              echo "<table border=1 align='center'>";
              echo "<tr>";
                   echo "<td><div align='center'><strong>CODIGO</strong></div></td>";
                   echo "<td><div align='center'><strong>LOGIN</strong></div></td>";
                   echo "<td><div align='center'><strong>PASSWORD</strong></div></td>";
                   echo "<td><div align='center'><strong>ESTADO</strong></div></td>";
              echo"</tr>";

              while($objusuario->Siguiente())
              {
              echo "<tr>";
              echo "<td>".$objusuario->getcodigo()."</td>";
              echo "<td>".$objusuario->getlogin()."</td>";
              echo "<td>".$objusuario->getpassword()."</td>";
              echo "<td>".$objusuario->getestado()."</td>";
              echo"<td><a href='mostrarusuarioparaeditar2.php?cod=".$objusuario->getcodigo()."'>editar</a></td>";
              echo"<td><a href='eliminarusuario2.php?cod=".$objusuario->getcodigo()."'>eliminar</a></td>";
              echo"</tr>";
              }
            echo"</table>";    
          } 
       else
         {
          echo "Lista de usuarios vacio";     
         }
        

?>
