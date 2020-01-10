<?php
  function funcParam($number, $word){
    return $number . ', ' . $word . '.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-5 Partie-IV</title>
  </head>
  <body>
    <p>Nombre: <?php echo funcParam(12, 'Bonjour') ?></p>
  </body>
</html>
