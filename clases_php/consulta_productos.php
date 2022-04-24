<?php

include("conexion.php");


class Consulta_productos{
private $conexion = null;
private $array_marca = null;

private $resultado_productos = null;
function __construct($conexion){
$this->conexion = $conexion;
$this->array_marca = array();
$this->Consulta();


$this->Respuesta();


}


function Consulta_marcas($id_marca){
  $consulta = "SELECT nombre_marca from marcas where marcas.id=" . $id_marca . "";
  $resultado = $this->conexion->query($consulta)->fetch_assoc();
  return $resultado;

}

function Consulta_categorias($id_categoria){
  $consulta = "SELECT nombre_categoria from categorias where categorias.id=" . $id_categoria . "";
  $resultado = $this->conexion->query($consulta)->fetch_assoc();
  return $resultado;

}

function Consulta(){
$consulta = "SELECT * FROM productos";
$resultado = $this->conexion->query($consulta);
$this->resultado_productos = $resultado;



}

function Respuesta(){

  while($rows = mysqli_fetch_assoc($this->resultado_productos)){

    $nombre_categoria = $this->Consulta_categorias($rows["id_categoria"]);
    $nombre_marca = $this->Consulta_marcas($rows["id_marca"]);
    $array_db_marca = array('id' =>$rows["id"] , 'nombre' => $rows["nombre_producto"] , "precio" =>$rows["precio_producto"] , "nombre_marca" => $nombre_marca["nombre_marca"],"nombre_categoria" =>  $nombre_categoria["nombre_categoria"] , "imagen_producto" => $rows["imagen_producto"]);

    array_push($this->array_marca,  $array_db_marca  );
  }

  if($_SERVER["REQUEST_URI"]){
     header('Content-type: application/json');
    echo json_encode($this->array_marca, JSON_FORCE_OBJECT);

  }

}



}


$objeto_consulta = new Consulta_productos($conexion);




 ?>
