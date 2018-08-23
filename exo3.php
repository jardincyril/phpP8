<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/exo3.css">
    <link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
    <title>exo3</title>
  </head>
  <body>
    <div class="degra">
    <a href="index.php">home</a>
    <form action="exo3.php" method="GET">
    <label for="login">Login : </label><input type="text" name="login" />
    <label for="password">Mot de passe : </label><input type="password" name="password" />
    <input type="submit" value="Envoyer">
    </form>
    <p>
      <?php
      // j'utilise un setcookie pour enregistre les donnés saisie dans les input
      if(!empty($_GET)){
    if (!empty($_GET['login']) && !empty($_GET['password'])) {
        $value = $_GET['login'] . '&' .  $_GET['password'];
        setcookie('Login', $value, time() + (86400 * 30));
    }
}
      ?>
    </p>
  </div>
  </body>
</html>
