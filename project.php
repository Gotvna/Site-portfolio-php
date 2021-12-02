<!DOCTYPE html>
<html lang="en">
  <?php
  require_once './process/config.php';
  ?>
  <?php
      $pageid = $_GET['pageid'];
      $sql = ("SELECT * FROM pages WHERE pageid = $pageid");
      $pre = $pdo->prepare($sql); 
      $pre->execute();
  
      $page = current($pre->fetchAll(PDO::FETCH_ASSOC));
  
  ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title name="title"> <?php echo $page['title']; ?> </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_c.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
</head>

<body>
<?php 
    require_once 'requires/navbar.php';
    require_once 'requires/sidenav.php';
?>

  <div class="parallax-container">
      <div class="parallax">
        <img src="<?php echo $page['backf']; ?>" alt="<?php echo $page['altimg']; ?>" name="backf">
      </div>
  </div>

    <div class="section">
        <div class="row container">
            <h1 class="header" id="c" name="h1"><?php echo $page['h1']; ?></h1>
            <div class="row">
                <div class="col l1 hide-on-small-only"></div>
                <div class="col l11 m11 s12">
                    <p class="grey-text text-darken-3 lighten-3" name="paraf"><?php echo $page['paraf']; ?></p>
                </div>
            </div>    
        </div>
    </div>

    <div class="parallax-container">
      <div class="parallax">
        <img src="<?php echo $page['backs']; ?>" alt="<?php echo $page['altimg']; ?>" name="backs">
        <?php echo $page['backs']; ?>
    </div>
    </div>

    <div class="section">
        <div class="row container">
            <h2 class="header" id="project" name="h2"><?php echo $page['h2']; ?></h2>
            <div class="row">
                <div class="col l1 hide-on-small-only"></div>
                <div class="col l11 m11 s12">
                    <p class="grey-text text-darken-3 lighten-3" name="paras"><?php echo $page['paras'];?></p>
                </div>
                
          
            </div>
            
        </div>
        <div class="row image">
            <img class="col offset-l1 l5 m6 s12" src="<?php echo $page['imgbodyf']; ?>" alt="<?php echo $page['altimg']; ?>" name="imgbodyf"> 
            <img class="col offset-l1 l4 m6 s12" src="<?php echo $page['imgbodys']; ?>" alt="<?php echo $page['altimg']; ?>" name="imgbodys">
        </div>
    </div> 

  <div class="parallax-container">
    <div class="parallax">
      <img src="<?php echo $page['backt']; ?>" alt="<?php echo $page['altimg']; ?>" name="backt">
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