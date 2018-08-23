<?php
setcookie('Login', 'Cookie Modifié', time() + (86400 * 30));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/exo5.css">
    <link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
    <title>exo5</title>
  </head>
  <body>
    <a href="index.php">home</a>
    <p>
      <?php
      if(isset($_COOKIE['Login'])){
             echo $_COOKIE['Login'];
         }
      ?>
    </p>
  </body>
</html>
