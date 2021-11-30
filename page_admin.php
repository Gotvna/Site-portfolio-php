<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_admin.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php require_once './requires/sidenav.php'; ?>

<div class="navbar-fixed">
    <nav class="nav-color">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo z-depth-2" >Main Page</a>          
            <ul id="nav-mobile" class="right hide-on-med-and-down z-depth-1">
                <li><a class="z-depth-1" href="project_c.php">C Project</a></li>
                <li><a class="z-depth-1" href="the_witcher.php">HTML Project</a></li>
                <li><a class="z-depth-1" href="project_python.php">Python Project</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Sign-in/up<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="./signin_up/inscription.php"><i class="material-icons">chevron_right</i>Sign-up</a></li>
                <li class="divider"></li>
                <li><a href="./signin_up/login_page.php"><i class="material-icons">chevron_right</i>Log-in</a></li>
                <li class="divider"></li>
                <li><a href="#" data-target="slide-out" class="sidenav-trigger">ACCOUNT</a></li>
            </ul>
        </div>
    </nav>
</div>


<div class="row background">
    <div class="col l6 m6 s6 ">
        <h2>Go to member list</h2>
        <a class="waves-effect waves-light btn center white-text" href="member_list.php">Redirection</a>
    </div>
    <div class="col l6 m6 s6 ">
        <h2>Go to page editor page</h2>
        <a class="waves-effect waves-light btn center white-text" href="editor_page.php">Redirection</a>        
    </div>
</div>

<script src="./js/jQuery.js"></script>
<script src="./js/materialize.js"></script>
<script src="./js/script.js"></script>





</body>
</html>