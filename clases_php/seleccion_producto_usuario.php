<?php

class Seleccion{
 function __construct(){
   $this->Redirecion();


 }

function Redirecion(){
  header("Location: http://localhost/maxima_belleza/paginas/ver_mas.php");

 }

}


$objeto_seleccion = new Seleccion();





 ?>
