<?php
//le session_start permette de démarrer une session
session_start();
//$_session c est une super global et un tableau associatif
$_SESSION['lastname'] = 'jardin';
$_SESSION['firstname'] = 'cyril';
$_SESSION['age'] = '18 ans';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/exo2.css">
        <link href="https://fonts.googleapis.com/css?family=Uncial+Antiqua" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <title>exo2</title>
    </head>
    <body>
        <a href="exo2.2.php">results exo2</a>
        <a href="index.php">home</a>
        <svg viewbox="0 0 100 20">
        <defs>
        <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
        <stop offset="5%" stop-color="red"/>
        <stop offset="10%" stop-color="orange"/>
        <stop offset="15%" stop-color="yellow"/>
        <stop offset="20%" stop-color="green"/>
        <stop offset="25%" stop-color="blue"/>
        <stop offset="30%" stop-color="indigo"/>
        <stop offset="35%" stop-color="purple"/>
        <stop offset="40%" stop-color="pink"/>
        </linearGradient>
    <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
        <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="1.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
        </path>
    </pattern>
    </defs>
    <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">LOADING</text>
    <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.2">LOADING</text>
    </svg>
</body>
</html>
