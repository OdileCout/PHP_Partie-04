<?php
  function funcParam($gender, $age){
    if (($gender == 'Homme') && ($age >= 18)){
      $result = 'Vous êtes un Homme et vous êtes majeur';
    }else if (($gender == 'Homme') && ($age < 18)){
      $result = 'Vous êtes un Homme et vous êtes mineur';
    }else if(($gender == 'Femme') && ($age >= 18)){
      $result = 'Vous êtes un Femme et vous êtes majeur';
    }else{
      $result = 'Vous êtes un Femme et vous êtes mineur';
    }
    return $result;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-7 Partie-IV</title>
  </head>
  <body>
    <p><?php echo funcParam('homme', 10) ?>.</p>
  </body>
</html>
