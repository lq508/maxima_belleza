<?php

include("conexion.php");
$id_producto = $_GET["id_producto"];


class Consulta_producto{
  private $id= null;
  private $conexion= null;
  private $producto= null;
  function __construct($id , $conexion){
    $this->id = $id;
    $this->conexion = $conexion;
    $this->Consulta();
    $this->Respuesta();
  }

  function Consulta(){
    $consulta = "SELECT * from productos where id=" .  $this->id;
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    $this->producto=$resultado;


  }

  function Respuesta(){
    if($_SERVER["REQUEST_URI"]){
      header('Content-type: application/json');
     echo json_encode($this->producto, JSON_FORCE_OBJECT);


    }


  }

}


$objeto = new Consulta_producto($id_producto , $conexion);





 ?>
