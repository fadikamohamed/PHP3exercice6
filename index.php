<?php
  $stepsNumber = 20;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
    <?php
    while ($stepsNumber >= 0) {
      echo ' | ' .$stepsNumber. ' C\'est presque bon.';
      $stepsNumber--;
    }
    ?>
  </p>
  </body>
</html>
