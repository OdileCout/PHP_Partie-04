<?php
//d'claration de fonction "compareNumbers" et je fait les condition pour faire la comparaison
  function compareNumbers($numberOne, $numberTwo){
    if ($numberOne > $numberTwo){
      $result = 'Le premier nombre est plus grand ';
    }else if ($numberOne < $numberTwo){
      $result = 'Le premier nombre est plus petit ';
    }else if ($numberOne == $numberTwo){
      $result = 'Les deux nombres sont identiques';
    }
    return $result;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-4 Partie-IV</title>
  </head>
  <body>
    <!-- j'appelle ma fonction dans un "p" -->
    <p><?php echo compareNumbers(69, 15) ?></p>
    <p><?php echo compareNumbers(6, 15) ?></p>
    <p><?php echo compareNumbers(69, 69) ?></p>
  </body>
</html>
