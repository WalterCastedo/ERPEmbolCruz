<?php
include_once("../CapaNegocio/clsusuario.php");
$login=$_POST['txtlogin'];
$password=$_POST['txtpassword'];
$objusuario=new clsusuario();
$objusuario->setlogin($login);
$objusuario->setpassword($password);
if($objusuario->buscarporloginandpassword())
{
   $host  = $_SERVER['HTTP_HOST'];	 
   $uri   = '/Embolcruzv1/Formularios/';	
   $extra='MenuUsuarios2.html';
   header("Location: http://$host$uri$extra");	       
}
else
{
    echo "Usuario No Encontrado";
    echo "<p><a href='../formularios/login2.html'>Volver a intentar</a></p>";	   
}

?>