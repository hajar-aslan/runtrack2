<?php

$STR_CONSONANTS = "consonnes";
$STR_VOWELS = "voyelles";

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [$STR_CONSONANTS => 0, $STR_VOWELS => 0];


$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];


$consonants = [
  'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 
  'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'
];


$index = 0;


do {

  $char = $str[$index]; 

  foreach($vowels as $vowel) {
  
    if ($char === $vowel) {
    
      $dic[$STR_VOWELS] += 1;

      break;
    }

  }

  foreach($consonants as $consonant) {
  
    if ($char === $consonant) {
    
      $dic[$STR_CONSONANTS] += 1;

  
      break;
    }

  }
 $index += 1;

} while(isset($str[$index]));

$totalVowels = $dic[$STR_VOWELS];

$totalConsonants = $dic[$STR_CONSONANTS];



$htmlTable = "
<table style='border: 2px solid; border-collapse: collapse; font-size: large;'>
  <thead style='background: white; text-transform: capitalize;'>
    <tr>
      <th style='border: 2px solid;padding: 4px 8px;'>$STR_CONSONANTS</th>
      <th style='border: 2px solid;padding: 4px 8px;'>$STR_VOWELS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style='border: 2px solid;padding: 4px 8px;'>$totalConsonants</td>
      <td style='border: 2px solid;padding: 4px 8px;'>$totalVowels</td>
    </tr>
  </tbody>
</table>
";



echo $htmlTable;

?>