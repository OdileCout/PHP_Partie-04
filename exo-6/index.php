<?php
  function funcParam($firstName, $lastName, $age){
    return 'Bonjour ' . $firstName . ' ' . $lastName . ', tu as ' . $age . ' ans.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-6 Partie-IV</title>
  </head>
  <body>
    <p><?php echo funcParam('RAKOTO','Ravola',55) ?></p>
  </body>
</html>
