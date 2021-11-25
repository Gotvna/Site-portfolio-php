<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Python Project</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_python.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
</head>

<body>
  
  <div class="navbar-fixed">
    <nav class="transparent">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo z-depth-2">Main Page</a>
          <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Sign-in</a></li>
              <li class="divider"></li>
              <li><a href="#!">Log-in</a></li>
          </ul>
            <ul id="nav-mobile" class=" right hide-on-med-and-down">
                <li><a class="z-depth-1" href="#python">About Python</a></li>
                <li><a class="z-depth-1" href="#project">Our project</a></li>
                <li><a class="z-depth-1 dropdown-trigger" href="#!dropdown1" data-target="dropdown1">Sign-in/up<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
  </div>  

  <div class="parallax-container">
    <div class="parallax"><img src="./img/python/blog-async.jpeg" alt="Python"></div>
  </div>

    <div class="section blue darken-2">
        <div class="row container">
        <h1 class="header" id="python">About Python language</h1>
        <div class="row">
            <div class="col l1 hide-on-small-only"></div>
            <div class="col l11 m11 s12">
                <p class="black-text text-darken-3 lighten-3">Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Python is simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. Python supports modules and packages, which encourages program modularity and code reuse. It is one of the most used language, and had changed the way of coding for many programmers with his unique syntax.</p>
            </div>
        </div>
        </div>
    </div>    

  <div class="parallax-container">
    <div class="parallax"><img src="./img/python/stats_python.png" alt="Python"></div>
  </div>

    <div class="section blue darken-2">
        <div class="row container">
            <h2 class="header" id="project">Our Python Project</h2>
            <div class="row">
                <div class="col l1 hide-on-small-only"></div>
                <div class="col l11 m11 s12">
                    <p class="black-text">Our first project was about python language and algorithm, the goal was to create a "The Price is Right" in a terminal, in order to train ourselves in algorithm. It was a funny project, not very hard, but the real purpose was to create some add-ons. <br>
                    The two images below are a shell with the game and the code in python.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col m12 l6 s12 ">
                    <img class="img-responsive z-depth-4" src="./img/python/python_code1.png" alt="Python">
                </div>
                <div class="col m12 l6 s12 ">
                    <img class="img-responsive z-depth-4" src="./img/python/python_code2.png" alt="Python">
                </div>
            </div>
        </div> 
    </div>

  <div class="parallax-container">
    <div class="parallax"><img src="./img/python/python_with_logo.png" alt="Python"></div>
  </div>
    




<?php
require 'footer.php';
?>
  
  <script src="./js/jQuery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>