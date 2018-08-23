<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/exo4.css">
  <link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
  <title>exo4</title>
</head>
<body>
  <div class="rec">
  <a href="index.php">home</a>
  <p>
    <?php
    //j'utilise $_cookie et $data pour récupéré le login et le mot de passe de l'éxercice 3 qui a était enregistre dans un cookie 
    if (!isset($_COOKIE['Login'])) {
      echo 'Le Cookie login n\'existe pas';
    } else {
      $data = explode('&', $_COOKIE['Login']);
      if (isset($data[0]) && isset($data[1])) {
        echo 'Login : ' . $data[0] . ', Mot de passe : ' . $data[1];
      }
    }
    ?>
  </p>
</div>
</body>
</html>
