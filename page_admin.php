
<?php 

require_once './process/config.php';



$user = $_SESSION['user'];




if ($user['admin'] == 1 ) {
    include_once './requires/sidenav.php';
    
    echo "
    
    
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='iewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin page</title>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link type='text/css' rel='stylesheet' href='css/materialize.css'  media='screen,projection'/>
    <link rel='stylesheet' href='./css/style_admin.css'>
    <link href='https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap' rel='stylesheet'>
    </head>
    <body class='color'>
    
    ";
    $users = "SELECT COUNT(*) as number_users FROM `users` ORDER BY id";
    $prepare = $pdo->prepare($users);
    $prepare->execute();
    $count = current($prepare->fetchAll(PDO::FETCH_ASSOC));
    $CountTotalUser = $count['number_users'];
    
    $admin = "SELECT COUNT(*) as number_admin FROM `users` WHERE admin LIKE 1 ORDER BY id";
    $prepare = $pdo->prepare($admin);
    $prepare->execute();
    $count = current($prepare->fetchAll(PDO::FETCH_ASSOC));
    $CountAdminUser = $count['number_admin'];

    $NonAdmin = "SELECT COUNT(*) as number_non_admin FROM `users` WHERE admin LIKE 0 ORDER BY id";
    $prepare = $pdo->prepare($NonAdmin);
    $prepare->execute();
    $count = current($prepare->fetchAll(PDO::FETCH_ASSOC));
    $CountNonAdminUser = $count['number_non_admin'];
    
    
    $rpoject_pages = "SELECT COUNT(*) as number_pages FROM `pages` ORDER BY pageid";
    $prepare = $pdo->prepare($rpoject_pages);
    $prepare->execute();
    $count = current($prepare->fetchAll(PDO::FETCH_ASSOC));
    $CountTotalPages = $count['number_pages'];

    echo "
<div class='navbar-fixed'>
        <nav class='nav-color'>
            <div class='nav-wrapper'>
                <a href='index.php' class='brand-logo z-depth-2' >Main Page</a>  
                                      <!-- ON DESKTOP ONLY -->
                <ul id='nav-mobile' class='right hide-on-med-and-down z-depth-1'>
                    <li><a class='z-depth-1' href='project_c.php'>C Project</a></li>
                    <li><a class='z-depth-1' href='the_witcher.php'>HTML Project</a></li>
                    <li><a class='z-depth-1' href='project_python.php'>Python Project</a></li>
                    <li><a class='z-depth-1' href='team.php'>Team</a></li>
                    <li><a class='dropdown-trigger' href='#!' data-target='dropdown1'>Sign-in/up<i class='material-icons right'>arrow_drop_down</i></a></li>
                </ul>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href='./signin_up/inscription.php'><i class='material-icons'>chevron_right</i>Sign-up</a></li>
                    <li class='divider'></li>
                    <li><a href='./signin_up/login_page.php'><i class='material-icons'>chevron_right</i>Log-in</a></li>
                    <li class='divider'></li>
                    <li><a href='#' data-target='slide-out' class='sidenav-trigger'>ACCOUNT</a></li>
                </ul>


                <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ON MED AND BELOW !!!!!!!!!!!!!!!!!!!!!!!!-->

                                                    <!-- PAGES -->
                <ul id='nav-mobile' class='right hide-on-large-only show-on-med-and-down z-depth-1'>
                    <!-- <li><a class='z-depth-1' href='project_c.php'>C Project</a></li>
                    <li><a class='z-depth-1' href='the_witcher.php'>HTML Project</a></li>
                    <li><a class='z-depth-1' href='project_python.php'>Python Project</a></li> -->
                    <li><a class='dropdown-trigger z-depth-1' href='#!' data-target='dropdown2'>Pages<i class='material-icons right'>arrow_drop_down</i></a></li>
                    <li><a class='dropdown-trigger z-depth-1' href='#!' data-target='dropdown3'>Sign-in/up<i class='material-icons right'>arrow_drop_down</i></a></li>
                </ul>

                <ul id='dropdown2' class='dropdown-content'>
                <li><a class='z-depth-1' href='project_c.php'>C Project</a></li>
                    <li class='divider'></li>
                    <li><a class='z-depth-1' href='the_witcher.php'>HTML Project</a></li>
                    <li class='divider'></li>
                    <li><a class='z-depth-1' href='project_python.php'>Python Project</a></li>
                    <li class='divider'></li>
                    <li><a class='z-depth-1' href='team.php'>Team</a></li>
                </ul>

                <ul id='dropdown3' class='dropdown-content'>
                    <li><a href='./signin_up/inscription.php'><i class='material-icons'>chevron_right</i>Sign-up</a></li>
                    <li class='divider'></li>
                    <li><a href='./signin_up/login_page.php'><i class='material-icons'>chevron_right</i>Log-in</a></li>
                    <li class='divider'></li>
                    <li><a href='#' data-target='slide-out' class='sidenav-trigger'>ACCOUNT</a></li>
                </ul>

                
            </div>
        </nav>
    </div>


<div class='row'>
    <div class='col l6 m6 s6 center '>
        <h2>Go to member list</h2>
        <a class='waves-effect waves-light btn center white-text' href='member_list.php'>Redirection</a>
    </div>
    <div class='col l6 m6 s6 center '>
        <h2>Go to the page builder</h2>
        <a class='waves-effect waves-light btn center white-text' href='pagebuilder.php'>Redirection</a>
    </div>

</div>

<div class='row' style='padding-top:150px;'>
    <div class='container box box-1 col l2 offset-l2 m4 offset-m2 s4 offset-s2'>
        <h4 class='center'>
        <table class='centered responsive-table'>
            <thead>
                <tr>
                    <th>Total users</th>
                    <th>Normal users</th>
                    <th>Admins</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>$CountTotalUser</td>
                    <td>$CountNonAdminUser</td>
                    <td>$CountAdminUser</td>
               
            </tbody>
        </table>
           
         </h4>
    </div>
    <div class='container box box-2 col l2 offset-l4 l2 m4 offset-m2 s4 offset-s2'>
        <h4 class='center'>
            <table class='centered responsive-table'>
            <thead>
                <tr>
                    <th>Project pages</th>
                    
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>$CountTotalPages</td>
                

        </tbody>
    </table>
        </h4>
    </div>
    
</div>

<script src='./js/jQuery.js'></script>
<script src='./js/materialize.js'></script>
<script src='./js/script.js'></script>





</body>
</html>
"
    ;
}


?>
