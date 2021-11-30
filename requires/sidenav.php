
<ul id="slide-out" class="sidenav" style="background-image: linear-gradient(315deg, #36096d 0%, #37d5d6 74%);">
<li><a class="subheader">Your Profile</a></li>
<li><div class='divider'></div></li>
    <li>
        <div class="user-view">
            <a class="center" href="#user"><img class="circle" src="img/logo_user.jpg"></a>
            
            <?php 
            session_start();

            if (isset($_SESSION['user'])) {
                if ($_SESSION['user']['admin'] == 1) {
                    echo "<h4 class='black-text'>Welcome home ! </h4><h6> Dear Admin ". $_SESSION['user']['pseudo'] ." !</h6>";
                } else {
                    echo "<h4 class='black-text'>Welcome ". $_SESSION['user']['pseudo'] ." !</h4>";
                }
                echo "<p class='black-text'>Your email : ". $_SESSION['user']['email'] ."<p/>";
                
                echo "<li><div class='divider'></div></li>";
                echo "<ul><li><a href='./process/log_out.php' style'margin-left: 15px; margin-right: 15px;' class='waves-effect waves-light btn-small'>Log-out</a></li></ul>";
            
            } else { 
                echo "<ul><h5>Don't have an account ?</h5><a style'margin-left: 15px; margin-right: 15px;' class='waves-effect waves-light btn-small' href='signin_up/inscription.php'>Register</a><br></ul>";
                echo "<ul><h5>Already have an account ?</h5><a style'margin-left: 15px; margin-right: 15px;' class='waves-effect waves-light btn-small' href='signin_up/login_page.php'>Log-in</a><br></ul>";
            }
            ?>
            
            
        </div>
    </li>
</ul>
 
        