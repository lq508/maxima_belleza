  <?php
include("conexion.php");

$valor_categoria = $_GET["marca"];

class Consulta_productos_por_marca{
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
    $id_categoria = $this->Consulta_marcas($this->valor);
    $consulta = "SELECT * from productos where id_marca=" . $id_categoria["id"] . "";
    $this->resultado_productos = $this->conexion->query($consulta);
  }

  function Consulta_categorias($id_categoria){

    $consulta = "SELECT nombre_categoria from categorias where categorias.id=" . $id_categoria . "";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    return $resultado;


  }





  function Consulta_marcas($nombre_marca){


    $consulta = "SELECT * from marcas where nombre_marca=" . $nombre_marca . "";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    return $resultado;

  }


  function Respuesta(){

    while($rows = mysqli_fetch_assoc($this->resultado_productos)){

      $nombre_categoria = $this->Consulta_categorias($rows["id_categoria"]);
      $array_db_marca = array('id' =>$rows["id"] , 'nombre' => $rows["nombre_producto"] , "precio" =>$rows["precio_producto"] , "nombre_categoria" => $nombre_categoria["nombre_categoria"],"nombre_marca" =>  $this->valor , "imagen_producto" => $rows["imagen_producto"]);

      array_push($this->array_marca,  $array_db_marca  );
    }

    if($_SERVER["REQUEST_URI"]){
       header('Content-type: application/json');
      echo json_encode($this->array_marca, JSON_FORCE_OBJECT);

    }

  }







}

$objeto = new Consulta_productos_por_marca($conexion, $valor_categoria);


 ?>
