<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Presentation</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_index.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>

<body>   
    <!-- Begin of first line -->
    <!-- <div class="head-title">
            <div class="nav-wrapper">
                <h1 class="white-text brand-logo center">Portfolio</h1>
            </div>
    </div> -->
    <nav>
        <div class="nav-wrapper">
            <h1 class=" brand-logo center">Portfolio</h1>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Sign-in/up<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="signin_up/inscription.php">Sign-up</a></li>
                <li class="divider"></li>
                <li><a href="signin_up/login_page.php">Log-in</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="row no-padding no-margin ">
        <div class=" responsive-img col l6 m6 s12 left-background1 hover-reduc-opacity valign-wrapper ">
            <div class="redirect-button text-center">
                <a class="waves-effect waves-light btn-large" href="./the_witcher.php">The Witcher III</a>
            </div>
            
        </div>
        <div class=" responsive-img col l6 m6 s12  right-background2 hover-reduc-opacity valign-wrapper ">
            <div class="redirect-button text-center">
                <a class="waves-effect waves-light btn-large" href="./project_c.php">C Programming</a>
            </div>
        </div>
    </div>
  
<!-- End of first line -->
    <div class="row no-padding no-margin">
        <div class="responsive-img left-background3 col l6 m6 s12  hover-reduc-opacity valign-wrapper ">
            <div class="redirect-button text-center">
                <a class="bttn waves-effect waves-light btn-large" href="./project_python.php">Python Programming</a>
            </div>
        </div>

       
        <div class="responsive-img right-background4  col l6 m6 s12  hover-reduc-opacity valign-wrapper ">
            <div class="redirect-button text-center">
                <a class="bttn waves-effect waves-light btn-large" href="./team.php">About the Team</a>
            </div>
        </div>
    </div>




<?php
require_once 'requires/footer.php';
?>
        
  <script src="./js/jQuery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>