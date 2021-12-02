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
        <div style="background:url('<?php echo $page['background'] ?>')" class="center center responsive-img col l6 m6 s12 left-background1 hover-reduc-opacity valign-wrapper ">
            <div class="redirect-button text-center">
                <a class="waves-effect waves-light btn-large" href="./project.php?pageid=<?php echo $page['pageid'] ?>"><?php echo $page['title'] ?></a>
            </div>
        </div>
        <?php } ?>

        <div class="no-padding no-margin ">
            <div style="background:url('./img/index/team_code.png')" class="center center responsive-img col l6 m6 s12 left-background1 hover-reduc-opacity valign-wrapper ">
                <div class="redirect-button text-center">
                    <a class="waves-effect waves-light btn-large" href="team.php">Team</a>
                </div>
            </div>
        </div>
    </div>




<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">

          <h5 class="white-text">Contact Us</h5>
          <p class="no-padding grey-text text-lighten-4">If you want to conctact us, please click on the button <span><a class="grey-text text-lighten-4"  target="_blank" rel="nofollow" href="elevator.php">below</a></span>.</p>





           <!-- Modal Trigger -->
            <a class="modal-button waves-effect waves-light btn modal-trigger" href="#modal1">Contact</a>

            <!-- Modal Structure -->
            <div id="modal1" class=" modal modal1 modal-fixed-footer">
                <div class="black modal-content">
                    <h4>Contact Us</h4>
                    <div class="row">
                        <div class="col s12">
<div class="row">
                            <div class="form-group col s6">
                                <i class="material-icons prefix">email</i>
                                <label for="email" class="form-label">Email</label>
                                <input <?php $invalid_class_name ?? "" ?> id="email" type="email" class="white-text validate form-control" placeholder ="Email" name="email" required>
                            </div>
                            <div class="form-group col s6">
                                <i class="material-icons prefix">email</i>
                                <label for="subject" class="form-label">Subject</label>
                                <input id="subject" type="text" name="subject" class="white-text validate form-control" placeholder ="Subject" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col s12">
                              <div class="row">
                                <div class="form-group col s6">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <label for="message" class="form-label">Your message</label>
                                    <input id="message" class="white-text materialize-textarea form-control" name="message" rows="5" cols="50" tabindex="4" data-length="250" placeholder="Insert Your Message" required></input>
                                </div>
                              </div>
                            </div>
                          </div>
                    </form>  
                        </div>
                      </div>
                            
                    <p class="black-text"><p>
                </div>
                <div class="black modal-footer">
                    <button class="white-text modal-close waves-effect waves-green btn-flat modal-trigger" onclick="M.toast({html:'Email Sent', classes :'rounded'})">Submit</button>
                </div>
            </div>

   
        </div>
        <div class="col l4 offset-l2 s12">
            <div class="row">
                <div class="col l4 hide-on-med-and-down"></div>
                <div class="col">
                    <h5 class="white-text">Social Media</h5>
                </div>
                <div class="col l4"></div>
            </div>
          <div class="row">
              <div class="col l4 offset-l2 s12">

                  
                  <h6 class="white-text">Valentin</h6>
                  <ul>
                      <li><a class="grey-text text-lighten-3" rel="nofollow" target="_blank" href="https://twitter.com/fgt_valentin">Twitter</a></li>
                      <li><a class="grey-text text-lighten-3" rel="nofollow" target="_blank" href="https://www.linkedin.com/in/valentin-faguet-11b99b19b">Linkedin</a></li>
                      <li><a class="grey-text text-lighten-3" rel="nofollow" target="_blank" href="https://www.instagram.com/val_fgt/">Instagram</a></li>
                  </ul> 
              </div> 
              <div class="col l4 offset-l2 s12">

                  
                  <h6 class="white-text">Nathanaël</h6>
                  <ul>
                      <li><a class="grey-text text-lighten-3" rel="nofollow" target="_blank" href="https://twitter.com/Gotvna69">Twitter</a></li>
                      <li><a class="grey-text text-lighten-3" rel="nofollow" target="_blank" href="https://www.linkedin.com/in/nathana%C3%ABl-vogt-54622620b/">Linkedin</a></li>
                      <li><a class="grey-text text-lighten-3" rel="nofollow" target="_blank" href="https://www.instagram.com/_natha_69_/?hl=fr">Instagram</a></li>
                  </ul>
              </div>
            </div>
</div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2021 <span><a style="color: rgba(255, 255, 255, 0.8);"  target="_blank" rel="nofollow" href="https://www.cultura.com/incitant-porno-9782368776834.html">Yaoi</a></span> Team
      </div>
    </div>
  </footer>

        
  <script src="./js/jQuery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>