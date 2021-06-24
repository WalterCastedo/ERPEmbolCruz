<?php
include_once("../CapaDatos/clsdatos.php");
class clsusuario 
  {         
         private $codigo;
         private $login;
         private $password;
	       private $estado;

         private $con;
         private $obj;
	 function __construct()
	 {
            $this->con=new clsdatos();
	 }
//--------------------------------------------	 
	 public function setcodigo($id)
	 {
	   $this->codigo=$id;
	 }
	 public function getcodigo()
	 {
	   return($this->codigo);
	 }
//--------------------------------------------	 

	 public function setlogin($log)
	 {
	   $this->login=$log;
	 }
	 public function getlogin()
	 {
	   return($this->login);
	 }
//--------------------------------------------
	 public function setpassword($pas)
	 {
	   $this->password=$pas;
	 }
	 public function getpassword()
	 {
	   return($this->password);
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
  $sql="INSERT INTO usuario (login,password,estado)";
  $sql.=" values('";
  $sql.=$this->login ."','".$this->password."',";
  $sql.=$this->estado;
  $sql.=")";
  return($this->con->Ejecutar($sql));
 }

 //---------------------------------------------------------
  public function Actualizar()
 {
  $sql="UPDATE " . $this->nombretabla .
  $sql=$sql . " SET LOGIN='" . $this->login."',CLAVE='".$this->clave."'";
  //$sql=$sql . "DESCRIPCION='" . $this->descripcion . "',ESTADO='" . $this->estado. "'";
  $sql=$sql . " WHERE " . $this->nombrepktabla . "=" . $this->getpktabla();
  //echo $sql."<br>";
  return($this->Ejecutar($sql));
 }
//--------------------------------------------
 public function EliminarLogico()
 {
  $sql="UPDATE " . $this->nombretabla . " SET ESTADO='" . $this->estadoregistroeliminado . "'";
  $sql=$sql . " WHERE " . $this->nombrepktabla . "=" . $this->getpktabla();
  //echo $sql."<br>";
  return($this->Ejecutar($sql));
 }
//--------------------------------------------
 public function seleccionarregistrosactivos()
 {
   $sql="select * from usuario "; 
   $sql.=" where estado=1";
   $sql.=" order by login";
   return($this->con->Seleccionar($sql));
 }
 //---------------------------------------------------------
 public function buscarporcodigo()
 {
   $sql="select * from codigo=" . $this->codigo;
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
              $this->codigo=$this->obj[0];
              $this->login=$this->obj[1];
              $this->password=$this->obj[2];
              $this->estado=$this->obj[3];
	 }
//---------------------------------------------------------

}

?>