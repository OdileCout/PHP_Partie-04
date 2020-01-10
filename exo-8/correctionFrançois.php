<?php
function add($first = 20, $second = 50, $third = 10){
  return $first + $second + $third;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exo 8</title>
  </head>
  <body>
    <p><?= add(1,2,3) ?></p>
    <p><?= add(1,2) ?></p>
    <p><?= add(1) ?></p>
    <p><?= add() ?></p>
  </body>
</html>
