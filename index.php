<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice4</title>
</head>
<body>
  <p>
    <?php
    /*Déclaration de la fonction avec comme paramètres les deux nombres et retour des messages
    selon les conditions*/ 
    function number($a, $b){
    //Conditions pour retourner les messages
      if($a > $b){
        return 'Le premier nombre est plus grand.';
      } elseif ($a < $b) {
        return 'Le premier nombre est plus petit.';
      } else {
        return 'Les deux nombres sont égaux.';
      }
    }
    //Comparaison des deux nombres et affichage des messages
    echo 'Comparaison entre 10 et 5: ' .number(10, 5).'<br/>
    Comparaison entre 5 et 10: ' .number(5, 10).'<br/>
    Comparaison entre 10 et 10: ' .number(10, 10).'<br/>';
    ?>
  </p>
</body>
</html>
