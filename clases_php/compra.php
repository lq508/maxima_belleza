<?php
session_start();
include("conexion.php");
$id_producto = $_GET["id_producto"];
echo $id_producto;



class Compra{
  private $id= null;
  private $conexion = null;

    function __construct($id , $conexion){
      $this->id = $id;
      $this->conexion = $conexion;
      $this->Consulta();
    }

    function Consulta(){
      $consulta = "SELECT * from productos where id=" . $this->id;
      $resultado = $this->conexion->query($consulta)->fetch_assoc();
      $_SESSION["producto_compra"] = $resultado;
      header("Location: ../paginas/compra.php");
    }

}


$objeto = new Compra($id_producto , $conexion);


 ?>
