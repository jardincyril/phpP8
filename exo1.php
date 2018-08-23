<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/exo.css">
  <link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
  <title>exo1</title>
</head>
<body>
  <a href="index.php">home</a>
  <p>
    <?php
    //j ai utiliser la variable superglobal server pour obtenir l'user, l'adresse et le nom du server
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>
  </p>
  <p>
    <?php
    echo $_SERVER['REMOTE_ADDR'];
    ?>
  </p>
  <p>
    <?php
    echo $_SERVER['SERVER_NAME'];
    ?>
  </p>
</body>
</html>
