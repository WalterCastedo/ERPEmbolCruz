<?php 
  class Auto
  {
     private $chasis;
	 private $modelo;
	 private $color;
	 
	 public function __construct()
	 {
	   $this->chasis="XYZ";
	   $this->modelo=2006;
	   $this->color="VERDE";
	 }
	 public function setChasis($cha)
	 {
	   $this->chasis=$cha;
	 }
	 public function getChasis()
	 {
	   return($this->chasis);
	 }
	 public function setModelo($mod)
	 {
	   $this->modelo=$mod;
	 }
	 public function getModelo()
	 {
	   return($this->modelo);
	 }
	 public function setColor($col)
	 {
	   $this->color=$col;
	 }
	 public function getColor()
	 {
	   return($this->color);
	 }	 
  }
?>    