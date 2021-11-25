<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C Project</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_c.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
</head>

<body>

    <!--NavBar-->
    <div class="navbar-fixed">
        <nav class="nav-color">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo z-depth-2" >Main Page</a>          
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="inscription.php">Sign-up</a></li>
                    <li class="divider"></li>
                    <li><a href="login.php">Log-in</a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down z-depth-1">
                    <li><a class="z-depth-1" href="#c">About C</a></li>
                    <li><a class="z-depth-1" href="#project">Our project</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Sign-in/up<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
    </div>
 

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
        <div class="row">
            <div class="col l1 hide-on-small-only"></div>
            <div class="col l3 m4 s12">
                <img class="img-responsive " src="img/c/carouc1.png" alt="Connect4">
            </div>
            <div class="col l2 hide-on-small-only"></div>
            <div class="col l4 m4 s12">
                <img class="img-responsive " src="img/c/carouc2.png" alt="Connect4">
            </div>
            <div class="col l2 hide-on-small-only"></div>
        </div>
    </div> 

  <div class="parallax-container">
    <div class="parallax"><img src="./img/c/connect3.png" alt="Connect4"></div>
  </div>


<?php
require 'footer.php';
?>

  <script src="./js/jQuery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>