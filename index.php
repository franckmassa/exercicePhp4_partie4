<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>exercice4</title>
</head>
<body>
  <p>
  <?php
  // création de la fonction compareNumber
  function compareNumber($numberOne, $numberTwo) {
    // début de la condition
    // On ne doit pas avoir plusieurs return
    if($numberOne == $numberTwo) {
        $message = 'Les deux nombres sont identiques ';
    } elseif ($numberOne > $numberTwo) {
        $message = 'Le premier nombre est plus grand ';
    } elseif ($numberOne < $numberTwo) {
        $message = 'Le premier nombre est plus petit ';
    } else {
        $message = 'Le nombre ne peut être qu\'identique, plus grand ou plus petit';
      }
      return $message;
    }
    // affichage de la fonction
      echo compareNumber(1,2) . ', ' . compareNumber(2,1) . ', ' . compareNumber(15,15);
  ?>
 </p>
</body>
</html>
