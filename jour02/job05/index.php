<?php 
$compteur=0;
echo "1 <br>";
for ( $i=2 ;$i<=1000 ;$i++){
    for( $j=$i; $j>=1 ; $j--){
        if($i%$j==0){
            $compteur++;
        }
    }
    if ($compteur==2){
        echo $i. "<br>";
    }
    $compteur=0;


}







?>