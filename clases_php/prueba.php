<?php
$array = array();
$array_otro = array('valor' => '1');


array_push($array , $array_otro);

var_dump($array);

$valor = json_encode($array);

echo "<script>console.log('<?php echo $valor  ?>' ) </script>";




 ?>
