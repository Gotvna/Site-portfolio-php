<!DOCTYPE html>
<html lang="en">
    <?php 
    require_once './process/config.php';
    require_once './process/getid_page.php';
    ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title name="title">Portfolio Presentation</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_index.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>

<body>   
<!-- Require the sidenav file-->
<?php require_once './requires/sidenav.php'; 

?>

    <nav>

<!-- NAVBAR -->
        <div class="nav-wrapper">
            <h1 class=" brand-logo center" name="h1">Portfolio</h1>
            <ul id="nav-mobile" class="right">
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Sign-in/up<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul id="dropdown1" class=" dropdown-content">
                    <li><a href="./signin_up/inscription.php"><i class="material-icons">chevron_right</i>Sign-up</a></li>
                    <li class="divider"></li>
                    <li><a href="./signin_up/login_page.php"><i class="material-icons">chevron_right</i>Log-in</a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-target="slide-out" class="sidenav-trigger">ACCOUNT</a></li>
            </ul>
        </div>
    </nav>

    <?php
    $sql = ("SELECT * FROM pages");
    $pre = $pdo->prepare($sql); 
    $pre->execute();

    $pages = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <div class="row no-padding no-margin ">
        
        <?php
        foreach($pages AS $page){ 
        ?>
        <div style="background:url('<?php echo $page['background'] ?>')" class=" responsive-img col l6 m6 s12 left-background1 hover-reduc-opacity valign-wrapper center center">
            <div class="redirect-button text-center">
                <a class="waves-effect waves-light btn-large" href="./project.php?pageid=<?php echo $page['pageid'] ?>"><?php echo $page['title'] ?></a>
            </div>
        </div>
        <?php } ?>
        <div style="background:url('./img/index/team_code.png')" class=" responsive-img col l6 m6 s12 left-background1 hover-reduc-opacity valign-wrapper center center">
            <div class="redirect-button text-center">
                <a class="waves-effect waves-light btn-large" href="team.php">About The Team</a>
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