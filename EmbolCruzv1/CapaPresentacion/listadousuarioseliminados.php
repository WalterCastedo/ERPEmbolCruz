<?php
echo "<p><a href='../../formularios/MenuUsuarios.htm'>Menu de Usuarios</a></p>";
$conexion=mysql_connect("localhost","root","");
mysql_select_db("BRIGADA",$conexion);
$sql="SELECT * FROM USUARIO WHERE ESTADO='ELIMINADO' ORDER BY CODIGO";
$result=mysql_query($sql,$conexion);
if(mysql_num_rows($result)>0)
   {    	
	echo "<div align=center><strong><font size=5>Listado de Usuarios Eliminados</font></strong></div>";
	echo "<table border=1 align='center'>";
	echo "<tr>";
    echo "<td><div align='center'><strong>CODIGO</strong></div></td>";
	echo "<td><div align='center'><strong>LOGIN</strong></div></td>";
	echo "<td><div align='center'><strong>PASSWORD</strong></div></td>";
	echo"</tr>";
    while($obj=mysql_fetch_object($result)){
	echo "<tr>";
	echo "<td>".$obj->CODIGO."</td>";
	echo "<td>".$obj->LOGIN."</td>";
	echo "<td>".$obj->PASSWORD."</td>";
	echo"<td><a href='reactivarusuario.php?cod=".$obj->CODIGO."'>activar</a></td>";
	echo"</tr>";
	}
echo"</table>";
}
mysql_close($conexion);
?>
