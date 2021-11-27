<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C Project</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_c.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
</head>

<body>

<?php 
    require_once 'requires/navbar.php';
?>
 

  <div class="parallax-container">
      <div class="parallax"><img src="./img/c/connect1.png" alt="Connect4"></div>
  </div>

    <div class="section">
        <div class="row container">
            <h1 class="header" id="c">About the C language</h1>
            <div class="row">
                <div class="col l1 hide-on-small-only"></div>
                <div class="col l11 m11 s12">
                    <p class="grey-text text-darken-3 lighten-3">C is a high-level and general-purpose programming language that is ideal for developing firmware or portable applications. Originally intended for writing system software, C was developed at Bell Labs by Dennis Ritchie for the Unix Operating System in the early 1970s.</p>
                </div>
            </div>    
        </div>
    </div>

    <div class="parallax-container">
      <div class="parallax"><img src="./img/c/connect2.png" alt="Connect4"></div>
    </div>

    <div class="section">
        <div class="row container">
            <h2 class="header" id="project">Our C Project</h2>
            <div class="row">
                <div class="col l1 hide-on-small-only"></div>
                <div class="col l11 m11 s12">
                    <p class="grey-text text-darken-3 lighten-3">After learning Git/Github and how works Debian WSL (linux environnement on Microsoft), the aim was to create a Connect-4 with some bonus, if it was possible to do them.<br>
                    The bonus are a modifiable table to play on more columns and rows, the detection of the winner and a multiplayer like 6 players at the same time on the same board. This project was a bit hard to realise because understand how works Github was the first difficulty and after the configuration on Debian was even more <br>
                    But it was very enriching.</p>
                </div>
                
          
            </div>
            
        </div>
        <div class="row image">
            <img class="col offset-l1 l5 m6 s12" src="img/c/carouc1.png" alt="Connect4">
            <img class="col offset-l1 l4 m6 s12" src="img/c/carouc2.png" alt="Connect4">
        </div>
    </div> 

  <div class="parallax-container">
    <div class="parallax"><img src="./img/c/connect3.png" alt="Connect4"></div>
  </div>


<?php
require_once 'requires/footer.php';
?>

  <script src="./js/jQuery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>