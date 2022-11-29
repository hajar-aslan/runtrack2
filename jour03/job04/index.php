<?php

$str = "Dans l'espace, personne ne vous entend crier";


$index = 0;

$count = 0;


do {


  $char = $str[$index];
  
 
  $count += ($char != ' ') ? 1 : 0; 
  
  $index += 1;

} while(isset($str[$index]));

echo $count; 


?>