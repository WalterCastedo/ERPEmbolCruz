<?php
include_once("../CapaNegocio/clscategoria.php");
$nombre=$_POST['txtNombre'];
$des=$_POST['txtDes'];
$estado=1;
$objCategoria=new clscategoria();
$objCategoria->setnombre($nombre);
$objCategoria->setdescripcion($des);
$objCategoria->setestado($estado);
//echo "OKKKK";

    if($objCategoria->Insertar())
    {
        echo "<font color=green size=10>El la categoria fue registrada</font>";	
        echo "<br></br>";
        echo "<p><a href='../formularios/MenuCategorias2.html'>Menu Categoria</a></p>";   
    }
	else
    {
        echo "Los datos no fueron registrados";
        echo "<p><a href='../formularios/RegistroCategoria2.html'>Volver a intentar</a></p>";	
    }    


?>