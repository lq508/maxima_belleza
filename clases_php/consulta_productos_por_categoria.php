<?php
include("conexion.php");

$valor_categoria = $_GET["categoria"];

class consulta_productos_por_categoria{
  private $conexion = null;
  private $array_marca = null;
  private $marca = null;
  private $categoria = null;
  private $resultado_productos = null;
  private $valor= null;
  function __construct($conexion , $valor){
  $this->conexion = $conexion;
  $this->valor = $valor;
  $this->array_marca = array();


  $this->Consulta_productos();
  $this->Respuesta();


  }


  function Consulta_productos(){
    $id_categoria = $this->Consulta_categorias($this->valor);
    $consulta = "SELECT * from productos where id_categoria=" . $id_categoria["id"] . "";
    $this->resultado_productos = $this->conexion->query($consulta);
  }

  function Consulta_categorias($nombre_categoria){
    $consulta = "SELECT * from categorias where nombre_categoria='" . $nombre_categoria . "'";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    return $resultado;

  }





  function Consulta_marcas($id_marca){
    $consulta = "SELECT nombre_marca from marcas where marcas.id=" . $id_marca . "";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    return $resultado;

  }


  function Respuesta(){

    while($rows = mysqli_fetch_assoc($this->resultado_productos)){

      $nombre_marca = $this->Consulta_marcas($rows["id_marca"]);
      $array_db_marca = array('id' =>$rows["id"] , 'nombre' => $rows["nombre_producto"] , "precio" =>$rows["precio_producto"] , "nombre_marca" => $nombre_marca["nombre_marca"],"nombre_categoria" =>  $this->valor  , "imagen_producto" => $rows["imagen_producto"]);

      array_push($this->array_marca,  $array_db_marca  );
    }

    if($_SERVER["REQUEST_URI"]){
       header('Content-type: application/json');
      echo json_encode($this->array_marca, JSON_FORCE_OBJECT);

    }

  }







}

$objeto = new Consulta_productos_por_categoria($conexion, $valor_categoria);


 ?>
