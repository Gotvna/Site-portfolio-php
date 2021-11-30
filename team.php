<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title name="title">The Team</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_team.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<?php
require_once 'requires/navbar.php';
require_once 'requires/sidenav.php';
?>



<h1>The Team</h1>

<div class="carousel carousel-slider center">
  <div class="carousel-item black-text" href="#one!">
    <div class="col s12 m7">
      <h2 class="header" name="h2">Student Developer</h2>
      <div class="card horizontal">
        <div class="card-image">
          <img class ="activator" src="./img/team/nath.png" alt="Programmers">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <h3>Nathanaël VOGT</h3><br>
            <p>I'm 21 years old. I'm a student in Gaming Campus in Lyon. I've learn osteopathie during 3 years before apply in Gaming Campus, I know somes tips about the body. I got an A scientific graduation.<br>
            I love video game and more precisely FPS games like rainbow six and adventure games like Assassin's Creed or The Long Dark.</p>
          
            <!-- Start Progress bar -->
            <div class="row"> <!--Start Row Progress bar-->

              <div class="col l4 m4 s12">
                <section>
                  <h2>Humour</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li class="is-active"><span>Learner</span></li>  
                    <li class="is-active"><span>King</span></li>
                    <li class="is-active"><span>God</span></li>
                  </ol>
                </section>
                
                <section>
                  <h2>Beauferie</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Baby learner</span></li>  
                    <li class="is-active"><span>Apprentice</span></li>  
                    <li class="is-active"><span>King</span></li>
                    <li class="is-active"><span>Patrick Chirac</span></li>
                  </ol>
                </section>


              </div>

              <div class="col l4 m4 s12">

                <section>
                  <h2>HTML/CSS</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>0%</span></li>  
                    <li class="is-active"><span>25%</span></li>  
                    <li class="is-active"><span>50%</span></li>
                    <li class="is-active"><span>75%</span></li>
                    <li><span>100%</span></li>
                  </ol>
                </section>
                
                <section>
                  <h2>Python</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>0%</span></li>  
                    <li class="is-active"><span>25%</span></li>  
                    <li><span>50%</span></li>
                    <li><span>75%</span></li>
                    <li><span>100%</span></li>
                  </ol>
                </section>

                <section>
                  <h2>C language</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>0%</span></li>  
                    <li class="is-active"><span>25%</span></li>  
                    <li><span>50%</span></li>
                    <li><span>75%</span></li>
                    <li><span>100%</span></li>
                  </ol>
                </section>

              </div>
            
              <div class="col l4 m4 s12">

                <section>
                  <h2>English</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li class="is-active"><span>Learner</span></li>  
                    <li class="is-active"><span>King</span></li>
                    <li><span>God</span></li>
                  </ol>
                </section>

                <section>
                  <h2>Deustch</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li><span>Learner</span></li>  
                    <li><span>King</span></li>
                    <li><span>God</span></li>
                  </ol>
                </section>

                <section>
                  <h2>Japanese</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li><span>Learner</span></li>  
                    <li><span>King</span></li>
                    <li><span>God</span></li>
                  </ol>
                </section>
                
              </div>

            </div><!--End Row Progress bar-->
            <!-- End Progress bar -->
          </div>
        </div>

          <div class="card-reveal">
            <span class="card-title light-green accent-3">IT'S TRAP BOIIIIIIII<i class="material-icons right">close</i></span>
            <div class="game-box"><canvas id="canvas" width="400" height="400"></canvas></div>
              <div class="game-info">
                <h2>Snake Game</h2>
                  <p id="game-status"></p>
                  <p id="game-score"></p>
                <audio controls>
                  <source src="nyan-cat.mp3" type="audio/mpeg">
                </audio>
              </div>
          </div>

        
      </div>
    </div>
  </div>
  
  <div class="carousel-item black-text" href="#two!">
    <div class="col s12 m7">
      <h2 class="header" name="h2">Student Developer</h2>
      <div class="card horizontal">
        <div class="card-image">
          <img class ="activator" src="./img/team/val.png" alt="Programmers">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <h3>Valentin FAGUET</h3>
            <p>I'm 18 years old, studing in Gaming Campus in Lyon who lived in Orléans from his birth. I just passed my baccalaureat with the new reform, so I could take the new option NSI and have a good experience in coding.
              I love the culture of video games and I'm trying to build knowledges on.  <br>
            
            </p>
          
            <!-- Start Progress bar -->
            <div class="row"> <!--Start Row Progress bar-->

              <div class="col l4 m4 s12">
                <section>
                  <h2>Humour</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li class="is-active"><span>Learner</span></li>  
                    <li class="is-active"><span>King</span></li>
                    <li class="is-active"><span>God</span></li>
                  </ol>
                </section>
                
                <section>
                  <h2>Beauferie</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Baby learner</span></li>  
                    <li class="is-active"><span>Apprentice</span></li>  
                    <li class="is-active"><span>King</span></li>
                    <li class="is-active"><span>Brice de Nice</span></li>
                  </ol>
                </section>


              </div>

              <div class="col l4 m4 s12">

                <section>
                  <h2>HTML/CSS</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>0%</span></li>  
                    <li class="is-active"><span>25%</span></li>  
                    <li class="is-active"><span>50%</span></li>
                    <li class="is-active"><span>75%</span></li>
                    <li><span>100%</span></li>
                  </ol>
                </section>
                
                <section>
                  <h2>Python</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>0%</span></li>  
                    <li class="is-active"><span>25%</span></li>  
                    <li class="is-active"><span>50%</span></li>
                    <li class="is-active"><span>75%</span></li>
                    <li class="is-active"><span>85%</span></li>
                    <li><span>100%</span></li>
                  </ol>
                </section>

                <section>
                  <h2>C language</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>0%</span></li>  
                    <li class="is-active"><span>25%</span></li>  
                    <li class="is-active"><span>50%</span></li>
                    <li><span>75%</span></li>
                    <li><span>100%</span></li>
                  </ol>
                </section>

              </div>
            
              <div class="col l4 m4 s12">

                <section>
                  <h2>English</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li class="is-active"><span>Learner</span></li>  
                    <li class="is-active"><span>King</span></li>
                    <li class="is-active"><span>God</span></li>
                  </ol>
                </section>

                <section>
                  <h2>Deustch</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li class="is-active"><span>Learner</span></li>  
                    <li><span>King</span></li>
                    <li><span>God</span></li>
                  </ol>
                </section>

                
                <section>
                  <h2>Spanish</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li><span>Learner</span></li>  
                    <li><span>King</span></li>
                    <li><span>God</span></li>
                  </ol>
                </section>

                <section>
                  <h2>Polonais</h2>
                  <ol class="progress-bar">
                    <li class="is-active"><span>Noob</span></li>  
                    <li class="is-active"><span>Learner</span></li>  
                    <li><span>King</span></li>
                    <li><span>God</span></li>
                  </ol>
                </section>
                
              </div>

            </div><!--End Row Progress bar-->
            <!-- End Progress bar -->
          </div>
        </div>
        <div class="card-reveal jesus">
          <span class="card-title"><i class="material-icons right">close</i></span>
        </div>
      </div>
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