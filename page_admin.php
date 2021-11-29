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
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_inscription.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="row box-sign-in center-align">
    <!-- <div class="col l2 m2 s2"></div> -->
    <div class="col offset-l2 s8 m8 l8">
        <div class="black modal-content z-depth-5">
            <h1 class="center">Log-in</h1>
            <form method="post" action="./process/login.php">
                <div class="row">
                    <div class="col s12 l10 offset-l1">
                        <div class="row">
                            <form method="post" action="./process/login.php">
                            <div class="input-field col l6 offset-l3 m6 offset-m3 s6 offset-s3">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="white-text validate" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="input-field col l6 offset-l3 m6 offset-m3 s6 offset-s3">
                                <i class="material-icons prefix">chevron_right</i>
                                <input id="password" type="password" class="white-text validate" name="password" onkeyup='check();' required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        
                        <input type="submit" class="white-text waves-effect waves-light btn modal-trigger right  btn-small" href="#modal1" value="Register">
                    </div>  
                    <!-- <div id="modal1" class="modal">
                        <div class="modal-content black">
                            <h4 class="white-text">THANK YOU</h4>
                            <p class="white-text">Click <a href="./index.php">here</a> to return to the main page</p>
                       </div>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./js/jQuery.js"></script>
<script src="./js/materialize.js"></script>
<script src="./js/script.js"></script>





</body>
</html>