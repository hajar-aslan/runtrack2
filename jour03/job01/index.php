<?php 
$tableau = [200, 204, 173, 98, 171, 404, 459]; 

foreach($tableau as $num) {
    if (($num % 2) === 0) {
        echo $num. " est paire <br>";
        echo"<br>";
  
    } else {
         echo $num. " est impaire <br>";
         echo"<br>";
    }
  
  }




?>