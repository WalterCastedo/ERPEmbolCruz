<?php
  echo "Conexion a informix</br>";
  $hostname="192.168.100.229";
  $database="tbase";
  $informixserver="nb600";
  $protocolname="onsoctcp";
  $login="nb600";
  $password="Axon2016";
  echo "paso1</br>";
  $dbh = new PDO("informix:host=$hostname;service=1516;database=$database;server=$informixserver; protocol=$protocolname;", $login, $password);
  //$dbh = new PDO("informix:host=$hostname;service=1516;database=$database;server=$informixserver; protocol=$protocolname;", $login, $password);
  echo "paso2</br>";
?>