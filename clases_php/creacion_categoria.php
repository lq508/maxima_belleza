<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: ../admin/error_session.php");
}
include("conexion.php");

$nombre_marca = $_POST["nombre_marca"];



class Marca{
  private $existencia  = false;


  private $nombre_marca=null;
  private $conexion = null;
  function __construct($nombre_marca , $conexion){
    $this->nombre_marca = $nombre_marca;
    $this->conexion = $conexion;
    $this->Validando();

    if(!$this->existencia){
      $this->Creando();

    } else {
      echo " la categoria ya esta registrada <a href='../admin/categorias/crear_categoria.php'> Ir al panel de creacion de categorias </a> ";
    }

  }


  function Creando(){
    $consulta = " insert into categorias(nombre_categoria) values(?) ";
    $ejecucion = $this->conexion->prepare($consulta);
    $ejecucion->bind_param("s" , $this->nombre_marca);
    $resultado = $ejecucion->execute();
    $ejecucion->close();


    if(!$resultado){
      echo " hubo un error al insertar en la base de datos<a href='../admin/categorias/crear_categoria.php'> Ir al panel de creacion de marcas </a>";

    } else {
      echo "Registro exitoso !!  <a href='../admin/categorias/crear_categoria.php'> Ir al panel de creacion de categorias </a>" ;
    }



    }

  function Validando(){

    $consulta = " SELECT * FROM categorias";
    $resultado = $this->conexion->query($consulta);
    while($rows = mysqli_fetch_assoc($resultado)){
      if($this->nombre_marca == $rows["nombre_categoria"]){
        $this->existencia = true;

      }

    }


  }




}

$objeto = new Marca($nombre_marca , $conexion);














 ?>
