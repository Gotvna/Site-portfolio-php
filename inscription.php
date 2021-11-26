<!DOCTYPE html>
<html lang="en" class="grey darken-2">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_inscription.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <!--First Modal Structure -->

<div class="row box-sign-in center-align">
    <div class="col l2 m2 s2"></div>
        <div class="col s8 m8 l8">
                <div class="black modal-content z-depth-5">
                    <h1 class="center">Sign-up</h1>
                    <form method="post" action="./process/sign_up.php">
                        <div class="row">
                            <div class="col s12">

                                <div class="row">
                                    
                                    <form method="post" action="sign_up.php">
                                    <div class="input-field col offset-l1 l3 m3 s3">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="first_name" type="text" class="white-text validate" name="first_name"  required>
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col l3 offset-l3 m3 offset-m3 s3 offset-s3">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="last_name" type="text" class="white-text validate" name="last_name"  required>
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="input-field col offset-l1 l3 m3 s3">
                                        <i class="material-icons prefix">chevron_right</i>
                                        <input id="password" type="password" class="white-text validate" name="password" onkeyup='check();' required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col l3 offset-l3 m3 offset-m3 s3 offset-s3">
                                        <i class="material-icons prefix">face</i>
                                        <input id="username" type="text" class="white-text validate" name="username"  required>
                                        <label for="username">Username</label>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input-field col l3 offset-l4 m3 offset-m4 s3 offset-s4">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="white-text validate" name="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                <!-- <a  class="waves-effect waves-light btn modal-trigger right btn-small" href="#modal1">Sign-up</a> -->
                                <input type="submit" class="waves-effect waves-light btn modal-trigger right white-text" href="#modal1" value="Register">
                            </div>  
                            <!-- <div id="modal1" class="modal">
                                <div class="modal-content black">
                                    <h4 class="white-text">THANK YOU</h4>
                                    <p class="white-text">Click <a href="./index.php">here</a> to return to the main page</p>
                               </div>
                            </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
    <script src="./js/jQuery.js"></script>
    <script src="./js/materialize.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>