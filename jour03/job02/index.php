<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


$text = 0;

$switch = false;

$result = "";
do {
    $switch = !$switch;
    $char = $str[$text];

$result .= ($switch) ? $char : "";
  
  $text += 1;

} while(isset($str[$text])); 

print $result;

?>