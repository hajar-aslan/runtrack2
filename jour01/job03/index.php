<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $nom = "Hamza";
      $age = 4 ;
      $poids = 15.6 ;
      $garcon = true ;
      $taille = 1.9 ;
     ?>
    <table class="tableau"> 
        <thead> 
            <tr>
                <th> Type </th>
                 <th> Nom </th>
                <th> Valeur </th>
            </tr>   
        </thead>

        <tbody>
            <tr> 
                <td> string </td>
                <td> nom </td>
                <td> <?php echo $nom ;?></td>
            </tr> 
            <tr> 
                <td> int </td>
                <td> age </td>
                <td> <?php echo $age ; ?> </td>
            </tr> 
            <tr> 
                <td> float </td>
                <td> poids </td>
                <td> <?php echo $poids ; ?> </td>
            </tr> 
            <tr> 
                <td> booléen </td>
                <td> garcon </td>
                <td> <?php echo $garcon ; ?></td>
            </tr> 
            <tr> 
                <td> float </td>
                <td> taille </td>
                <td> <?php echo $taille ; ?></td>
            </tr> 
        </tbody>
     </table>




</body>
</html>