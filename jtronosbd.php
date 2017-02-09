<?php
/**
 *Clase para conexion y consultas con la base de datos.
 */
class jtronosbd
{
  private $mysqli;
  private $error=false;


  function __construct()
  {
    $this->mysqli= new mysqli("localhost", "root", "", "gameofthrones");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }

  public function Resumen(){
    return $resultado=$this->mysqli->query("SELECT plot FROM titles");
  }

  public function Actores(){
    return $resultado2=$this->mysqli->query("SELECT * FROM cast");
  }

  public function ActoresTemp($episode){
    return $resultado3=$this->mysqli->query("SELECT * FROM season_ep WHERE episode=".$episode);
  }

}

 ?>
