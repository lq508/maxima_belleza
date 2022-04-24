

<?php

include("conexion.php");



class Consulta_eliminacion{
  private $conexion=null;
  private $array_marca=null;

  function __construct($conexion){
      $this->conexion = $conexion;
      $this->array_marca =  array();
      $this->Consulta();
     $this->Respuesta();



  }

  function Consulta(){
    $consulta = "SELECT * FROM marcas";
    $resultado = $this->conexion->query($consulta);

    while($rows = mysqli_fetch_assoc($resultado)){
      $array_db_marca = array('id' =>$rows["id"] , 'nombre' => $rows["nombre_marca"]);

      array_push($this->array_marca,  $array_db_marca  );
    }




  }

  function Respuesta(){

    if($_SERVER["REQUEST_URI"]){


       header('Content-type: application/json');
      echo json_encode($this->array_marca, JSON_FORCE_OBJECT);

    }

  }


}


$objeto = new Consulta_eliminacion($conexion);



 ?>
