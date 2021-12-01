
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
                            <div class=" input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" class="white-text validate">
                                <label for="first_name">First Name</label>
                            </div>

                            <div class="input-field col s6">
                              <input id="last_name" type="text" class="white-text validate">
                              <label for="last_name">Last Name</label>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="white-text validate">
                                <label for="email">Email</label>
                            </div>
                          </div>

                          <div class="row">

                            <div class="col s12">
                              <div class="row">

                                <div class="input-field col s6">

                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="message" class="white-text materialize-textarea"  data-length="250"></textarea>
                                    <label for="message">Your message</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                            
                    <p class="black-text"><p>
                </div>
                <div class="black modal-footer">
                    <a class="white-text modal-close waves-effect waves-green btn-flat modal-trigger">Submit</a>
                </div>
            </div>

   

            <!-- Second Modal Structure
            <div id="modal2" class=" black modal modal2">
              <div class=" white-text modal-content">
                <h4 class="center valign-wrapper">Thanks for your message !</h4>
                
              </div>
              <div class="black white-text modal-footer">
                <a href="#!" class=" white-text modal-close waves-effect waves-green btn-flat">Next</a>
              </div>
            </div> -->

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
            <?php
              if (isset($_SESSION['user']) && isset($pageid)){
                if($_SESSION['user']['admin'] == 1 ){
                echo 
                "<div class='col offset-l12'>
                    <a class='modal-button waves-effect waves-light btn modal-trigger' href='#modal2'>Edit</a>
                  <div id='modal2' class=' black modal modal2'>
                    <div class=' white-text modal-content'>
                      <h4 class='center valign-wrapper'>Edit Page</h4> 

                        <form action='process/edit_page.php' method='post'>
                          <tr>
                              <td>$email</td>
                              <td><input type='hidden' name='pageid' value='$pageid'>$pageid</td>
                              <td><input type='text' name='title' value='$title'></td>
                              <td><input type='text' name='backf' value='$backf'></td>
                              <td><input type='text' name='h1' value='$h1'></td>
                              <td><input type='text' name='paraf' value='$paraf'></td>
                              <td><input type='text' name='backs' value='$backs'></td>
                              <td><input type='text' name='h2' value='$h2'></td>
                              <td><input type='text' name='paras' value='$paras'></td>
                              <td><input type='text' name='imgbodyf' value='$imgbodyf'></td>
                              <td><input type='text' name=imgbodys' value='$imgbodys'></td>
                              <td><input type='text' name=backt' value='$backt'></td>
                              <td><button type='submit' class='btn'>Edit</button></td>
                              <td><a type='submit' class='btn'>Cancel</a></td>
                            </tr>
                        </form>
                    </div>
                    <div class='black white-text modal-footer'>
                      <a href='#!' class=' white-text modal-close waves-effect waves-green btn-flat'>Edit</a>
                    </div>
                  </div>
                </div>";
                }
              }
            ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2021 <span><a style="color: rgba(255, 255, 255, 0.8);"  target="_blank" rel="nofollow" href="https://www.cultura.com/incitant-porno-9782368776834.html">Yaoi</a></span> Team
      </div>
    </div>
  </footer>



