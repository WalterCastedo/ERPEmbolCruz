<?php
include_once("../CapaNegocio/clscategoria.php");
echo "<p><a href='../formularios/MenuCategorias2.html'>Menu de Categoria</a></p>";
$objcategoria=new clscategoria();

if($objcategoria->seleccionarregistrosactivos())
          {    	
              echo "<div align=center><strong><font size=5>Listado de Categorias Activos</font></strong></div>";
              echo "<table border=1 align='center'>";
              echo "<tr>";
                   echo "<td><div align='center'><strong>ID</strong></div></td>";
                   echo "<td><div align='center'><strong>NOMBRE</strong></div></td>";
                   echo "<td><div align='center'><strong>DESCRIPCION</strong></div></td>";
                   echo "<td><div align='center'><strong>ESTADO</strong></div></td>";
              echo"</tr>";

              while($objcategoria->Siguiente())
              {
              echo "<tr>";
              echo "<td>".$objcategoria->getidcategoria()."</td>";
              echo "<td>".$objcategoria->getnombre()."</td>";
              echo "<td>".$objcategoria->getdescripcion()."</td>";
              echo "<td>".$objcategoria->getestado()."</td>";
              echo"<td><a href='mostrarcategoriaparaeditar2.php?cod=".$objcategoria->getidcategoria()."'>editar</a></td>";
              echo"<td><a href='eliminarcategoria2.php?cod=".$objcategoria->getidcategoria()."'>eliminar</a></td>";
              echo"</tr>";
              }
            echo"</table>";    
          } 
       else
         {
          echo "Lista de usuarios vacio";     
         }
        

?>
