<?php
include_once("../CapaDatos/clsdatos.php");
class clscategoria 
  {         
         private $idcategoria;
         private $nombre;
         private $descripcion;
	     private $estado;

         private $con;
         private $obj;
	 function __construct()
	 {
            $this->con=new clsdatos();
	 }
//--------------------------------------------	 
	 public function setidcategoria($id)
	 {
	   $this->idcategoria=$id;
	 }
	 public function getidcategoria()
	 {
	   return($this->idcategoria);
	 }
//--------------------------------------------	 

	 public function setnombre($nombre)
	 {
	   $this->nombre=$nombre;
	 }
	 public function getnombre()
	 {
	   return($this->nombre);
	 }
//--------------------------------------------
	 public function setdescripcion($descripcion)
	 {
	   $this->descripcion=$descripcion;
	 }
	 public function getdescripcion()
	 {
	   return($this->descripcion);
	 }
//--------------------------------------------
	 public function setestado($valor)
	 {
	   $this->estado=$valor;
	 }
	 public function getestado()
	 {
	   return($this->estado);
	 }
     
//--------------------------------------------
 public function Insertar()
 {
  $sql="INSERT INTO categoria (nombre,descripcion,estado)";
  $sql.=" values('";
  $sql.=$this->nombre ."','".$this->descripcion."',";
  $sql.=$this->estado;
  $sql.=")";
  return($this->con->Ejecutar($sql));
 }

 //---------------------------------------------------------
  public function Actualizar()
 {
  $sql="UPDATE " . $this->categoria .
  $sql=$sql . " SET nombre='" . $this->nombre."',descripcion='".$this->descripcion."'";
  //$sql=$sql . "DESCRIPCION='" . $this->descripcion . "',ESTADO='" . $this->estado. "'";
  //$sql=$sql . " WHERE " . $this->nombrepktabla . "=" . $this->getpktabla();
  echo $sql."<br>";
  return($this->Ejecutar($sql));
 }
//--------------------------------------------
 public function EliminarLogico()
 {
  $sql="UPDATE " . $this->categoria . " SET ESTADO='" . $this->estadoregistroeliminado . "'";
  $sql=$sql . " WHERE " . $this->nombrepktabla . "=" . $this->getpktabla();
  //echo $sql."<br>";
  return($this->Ejecutar($sql));
 }
//--------------------------------------------
 public function seleccionarregistrosactivos()
 {
   $sql="select * from categoria "; 
   $sql.=" where estado=1";
   $sql.=" order by idcategoria";
   return($this->con->Seleccionar($sql));
 }
 //---------------------------------------------------------
 public function buscarporcodigo()
 {
   $sql="select * from idcategoria=" . $this->idcategoria;
   if($this->con->Seleccionar($sql))
   {
       if($this->con->Siguiente())
       {
           return true;
       }
   }
 else
     {
       return false;
     }

 }
//---------------------------------------------------------
 public function buscarporloginandpassword()
 {
   $sql="select * from usuario ";
   $sql.=" where login='" . $this->login . "'";
   $sql.=" and password='" . $this->password . "'" ;
   if($this->con->Seleccionar($sql))
   {
       if($this->Siguiente())
       {
           return true;
       }
   }
 else
     {
       return false;
     }

 }
 //---------------------------------------------------------
public function Siguiente()
 {
       if($this->obj=$this->con->getResult()->fetch_row())
        {
	      $this->Cargar();
	      return true;
        }	
}
//---------------------------------------------------------
	 public function Cargar()
	 {
              $this->idcategoria=$this->obj[0];
              $this->nombre=$this->obj[1];
              $this->descripcion=$this->obj[2];
              $this->estado=$this->obj[3];
	 }
//---------------------------------------------------------

}

?>