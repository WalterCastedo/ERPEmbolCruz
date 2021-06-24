<?php
include_once("../CapaNegocio/clsusuario.php");
$log=$_POST['txtlogin'];
$pas=$_POST['txtpassword'];
$con=$_POST['txtconfirmacion'];
$estado=1;
$objusuario=new clsusuario();
$objusuario->setlogin($log);
$objusuario->setpassword($pas);
$objusuario->setestado($estado);
//echo "OKKKK";
if($pas==$con)
{
    if($objusuario->Insertar())
    {
        echo "<font color=green size=10>El Usuario fue registrado</font>";	
        echo "<br></br>";
        echo "<p><a href='../formularios/login2.html'>Ingresar</a></p>";   
    }
    else
    {
        echo "Los datos no fueron registrados";
        echo "<p><a href='../formularios/RegistroUsuario.htm'>Volver a intentar</a></p>";	
    }    
}
else
{
    echo "El password y la confirmacion deben ser iguales";
    echo "<p><a href='../formularios/RegistroUsuario2.html'>Volver a intentar</a></p>";
}

?>