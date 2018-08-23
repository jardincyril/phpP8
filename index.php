<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <title>home</title>
  </head>
  <body>
    <video autoplay muted loop id="myVideo">
      <source src="wowbfA.mp4" type="video/mp4">
      </video>
    <div class="content">
      <button id="myBtn" onclick="myFunction()">Pause</button>
      <a href="exo1.php">Exercice-1</a>
      <a href="exo2.php">Exercice-2</a>
      <a href="exo3.php">Exercice-3</a>
      <a href="exo4.php">Exercice-4</a>
      <a href="exo5.php">Exercice-5</a>
</div>
    <script>
    // Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}
    </script>
  </body>
</html>
