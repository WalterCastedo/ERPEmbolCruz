<?php
class clsdatos
  {
   const HOST    ="localhost";
	 const LOGIN   ="root";
	 const PASSWORD="";
	 const NOMBREBD="bdembolcruz";

	 private $conexion;
	 private $result;
	 private $codigoerror;
	 //------------------------------------
	 public function __construct()
	 {
		$this->conexion=mysqli_connect(self::HOST,self::LOGIN,self::PASSWORD,self::NOMBREBD);
                if (empty($this->conexion))
                {
                      die("mysqli_connect failed: " . mysqli_connect_error());
                }
            else
                {
                //mysql_select_db(self::NOMBREBD,$this->conexion);
                }

         }
	 //------------------------------------
	 public function __desctruct()
	 {
		mysqli_close($this->conexion);
	 }
	 //------------------------------------
	 public function Ejecutar($sql)
	 {
             if($this->result=$this->conexion->query($sql))
           {
              return true;
           }
           else
           {
               echo "Error en:" .$sql;
               return false;
           }
	 }
	 //------------------------------------
	 public function Seleccionar($sql)
	 {
          if($this->result=$this->conexion->query($sql))
           {
              //echo "result ok<br>";
              return true;
           }
           else
           {
               echo "Error en:" . $sql ;
               return false;
           }
	 }
	 //------------------------------------
	 public function getResult()
	 {
	   return($this->result);
	 }
	 //------------------------------------		
  }
?>