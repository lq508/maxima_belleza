<?php
include("conexion.php");
$ciudades = array();
$nombre_producto = $_REQUEST["nombre_producto"];
$categoria = $_REQUEST["categoria_escondido"];
$marca = $_REQUEST["marca_escondido"];



$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$destino="fotos/"  . $image;




$descripcion = $_REQUEST["descripcion"];
$precio_producto = $_REQUEST["precio"];


if(isset($_POST["eleccion_ciudad_1"])){

  echo $_POST["eleccion_ciudad_1"];
  array_push($ciudades , $_REQUEST["eleccion_ciudad_1"]);


}

if(isset($_POST["eleccion_ciudad_2"])){

  array_push($ciudades , $_REQUEST["eleccion_ciudad_2"]);

}

if(isset($_POST["eleccion_ciudad_3"])){

  array_push($ciudades , $_REQUEST["eleccion_ciudad_3"]);

}

if(isset($_POST["eleccion_ciudad_4"])){

  array_push($ciudades , $_REQUEST["eleccion_ciudad_4"]);

}
if(isset($_POST["eleccion_ciudad_5"])){

  array_push($ciudades , $_REQUEST["eleccion_ciudad_5"]);

}




class Creando_productos{
private $ciudades = null;
private $conexion = null;
private $marca = null;
private $marca_registro = null;
private $nombre_producto=null;
private $validacion = null;
private $destino = null;
private $ruta = null;
private $ruta_producto_final = null;
  function __construct($conexion , $marca, $categoria ,$ciudades, $nombre_producto, $descripcion , $precio_producto, $ruta , $destino){
    $this->conexion = $conexion;
    $this->marca = $marca;
    $this->categoria = $categoria;
    $this->ciudades = $ciudades;
    $this->nombre_producto = $nombre_producto;
    $this->descripcion = $descripcion;
    $this->precio_producto = $precio_producto;
    $this->ruta = $ruta;
    $this->destino = $destino;
    $this->Validando();
    $this->Buscando_id();
    $this->Copiando_imagen_servidor();
    $this->Creando_producto();
  }

  function Buscando_id(){
    //buscando marca
    $consulta= "SELECT id from marcas where nombre_marca ='" . $this->marca . "'";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    $this->marca_registro = $resultado["id"];
    //buscando categoria
    $consulta= "SELECT id from categorias where nombre_categoria='" . $this->categoria . "'";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();
    $this->categoria_registro = $resultado["id"];

  }

  function Creando_producto(){
    $ciudad_tigre = null;
    $ciudad_primera_carrera=null;
    $ciudad_plaza_bolivar=null;
    $ciudad_san_remo=null;
    $ciudad_pariaguan=null;
    // sacando ciudades

    for($i = 0 ; $i < count($this->ciudades); $i++){
      if($this->ciudades[$i] == "el tigre"){

        $ciudad_tigre = $this->ciudades[$i];
      } else if($this->ciudades[$i] == "Pariaguan"){
        $ciudad_pariaguan = $this->ciudades[$i];

      } else if($this->ciudades[$i] == "Plaza bolivar"){
        $ciudad_plaza_bolivar = $this->ciudades[$i];

      } else if($this->ciudades[$i] == "San remo"){
        $ciudad_san_remo = $this->ciudades[$i];

      } else if($this->ciudades[$i] == "Primera carrera"){
        $ciudad_primera_carrera = $this->ciudades[$i];

      }


    }


    if($this->validacion){
      $consulta_creacion = "INSERT INTO productos(nombre_producto,precio_producto,id_categoria,id_marca,descripcion,tienda_tigre,tienda_primera_carrera,tienda_plaza_bolivar,tienda_san_remo , pariaguan , imagen_producto) values(?,?,?,?,?,?,?,?,?,?,?)";
      $ejecucion = $this->conexion->prepare($consulta_creacion);
      $ejecucion->bind_param("sssssssssss", $this->nombre_producto, $this->precio_producto, $this->categoria_registro , $this->marca_registro , $this->descripcion , $ciudad_tigre , $ciudad_primera_carrera , $ciudad_plaza_bolivar , $ciudad_san_remo, $ciudad_pariaguan, $this->ruta_producto_final);
      $resultado = $ejecucion->execute();
      if($resultado){

        echo " Registro exitoso";

      } else {
        echo " No se pudo registrar ";
      }


    } else {
      echo " faltan datos por ingresar ";
    }




  }

  function Validando(){
    $contador = 0 ;


    if( !count($this->ciudades) == 0 ){

      $contador++;


    }

    if($this->marca){
      $contador++;
    }
    if($this->categoria){
      $contador++;
    }
    if($this->descripcion){
      $contador++;
    }
    if($this->precio_producto){
      $contador++;
    }
    if($this->nombre_producto){
      $contador++;
    }

    if($contador == 6){
      $this->validacion = true;
    }



  }

  function Copiando_imagen_servidor(){
    $numero_aleatorio = mt_rand(0,5); 

    copy($this->ruta, $this->destino . $numero_aleatorio );
    $this->ruta_producto_final = $this->destino . $numero_aleatorio;

  }

}





$producto = new Creando_productos($conexion, $marca , $categoria, $ciudades , $nombre_producto, $descripcion , $precio_producto, $ruta , $destino);





 

 ?>
