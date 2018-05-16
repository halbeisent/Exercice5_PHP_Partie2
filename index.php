<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 5 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    $devIdentity = 'Femme';
    // Si $maVariable contient le string Femme
    echo 'le contenu de ma variable $devIdentity est ' . $devIdentity . '<br />';
    if ($devIdentity == 'Femme') {
      echo 'C\'est une développeuse!!!';
    }
    // Sinon on affiche ce message
    else {
      echo 'C\'est un développeur!!!';
    }
    ?>
  </p>
</body>
</html>
