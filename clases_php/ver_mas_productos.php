<?php
session_start();
include("conexion.php");
$id_producto = $_GET["id_producto"];


class Ver_mas{
  private $id = 0;
  private $conexion = null;
  function __construct($id , $conexion){
    $this->id = $id;
    $this->conexion = $conexion;
  $this->Consulta();
  $this->Redirecion();

  }

  function Consulta(){
    $consulta = "SELECT * from productos where id=" .  $this->id;
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    $_SESSION["producto_seleccionado"]=$resultado;


  }

  function Redirecion(){
    header("Location: http://localhost/maxima_belleza/paginas/informacion_producto.php");

  }


}


$objeto = new Ver_mas($id_producto , $conexion);



 ?>
