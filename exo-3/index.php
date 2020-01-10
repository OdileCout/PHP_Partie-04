<?php
  function funcTwoWord($wordOne, $wordTwo ){
    return $wordOne . ', ' . $wordTwo . '.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-3 Partie-IV</title>
  </head>
  <body>
    <p><?php echo funcTwoWord('Bah alors', 'Bah oui'); ?></p>
  </body>
</html>
