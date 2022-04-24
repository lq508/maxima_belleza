<?php
include("conexion.php");

session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: ../admin/error_session.php");
}

$nombre = $_POST["nombre"];

class Eliminacion{

  private $conexion = null;
  private $nombre_marca = null;

  function __construct($conexion , $nombre_marca){
    $this->conexion = $conexion;
    $this->nombre_marca = $nombre_marca;
    $this->Eliminando();
  }


  function Eliminando(){
    $consulta = "DELETE FROM marcas WHERE nombre_marca='" . $this->nombre_marca . "'";
    $this->conexion->query($consulta);
    echo "Eliminacion exitosa <a href='../admin/marca/eliminar_marca.php'> Ir a campo eliminacion  </a> ";

  }

}

$objeto = new Eliminacion($conexion , $nombre);






 ?>
