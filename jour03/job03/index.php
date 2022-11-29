<?php

$str = "I'm sorry Dave I'm afraid I can't do that";


$voyelles = ['a', 'e', 'i', 'o', 'u', 'w', 'y', 'A', 'E', 'I', 'O', 'U', 'W', 'Y']; 


$index = 0;

$result = "";

do {

 
  $char = $str[$index];
  
  foreach($voyelles as $voyelle) {
   
    if ($char == $voyelle) {
      
      $result .= $char;

     
      break;
    }

  }


  $index += 1;

} while(isset($str[$index]));
    echo $result;


?>