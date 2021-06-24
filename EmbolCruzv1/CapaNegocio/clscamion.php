<?php 
   include("../scripts/clsauto.php");
  class Camion extends Auto
  {
     private $tonelaje;	 
	 function __construct()
	 {
	   parent::__construct();
	   $this->tonelaje=100;
	 }
	 public function setTonelaje($ton)
	 {
	   $this->tonelaje=$ton;
	 }
	 public function getTonelaje()
	 {
	   return($this->tonelaje);
	 }
  }
?>    