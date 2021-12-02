
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

                          <!-- <div class="row">
                            <div class=" input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" class="white-text validate">
                                <label for="first_name">First Name</label>
                            </div>

                            <div class="input-field col s6">
                              <input id="last_name" type="text" class="white-text validate">
                              <label for="last_name">Last Name</label>
                            </div>
                          </div> -->
<?php 
    $message_sent = false;
    if(isset($_PÖST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
    
        $to = "nvogt@gaming.tech";
        $body = "";
    
        $body .= "From:".$userEmail. "/r/n";
        $body .= "Message:".$message. "/r/n";
        mail($to,$messageSubject,$body); 
      
        $message_sent = true;

    }
    else{
        $invalid_class_name = "form-invalid";
    }
} 
?>
                        <form action="requires/footer.php" method="POST" class="form">  
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
            <?php
            
            $pageid = $_GET['pageid'];
            $sql = ("SELECT * FROM pages WHERE pageid = $pageid");
            $pre = $pdo->prepare($sql); 
            $pre->execute();

            $page = current($pre->fetchAll(PDO::FETCH_ASSOC));
  

            if (isset($_SESSION['user']) && isset($pageid))  {
                if ($_SESSION['user']['admin'] == 1 ) {
                    echo 
                "<div class='col offset-l12 white-text'>
                    <a class='modal-button waves-effect waves-light btn modal-trigger' href='#modal2'>Edit the page</a>
                  <div id='modal2' class=' black modal modal2'>
                    <div class=' white-text modal-content'>
                      <h3 class='center valign-wrapper'><i class='material-icons prefix'>create</i> Edit Page <i class='material-icons prefix'>create</i></h3> 

                        <form class='white-text' action='process/edit_page.php' method='post'>
                          
                            <tr style='border: 1px solid white;'>
                              
                              <td><input class='white-text' type='hidden' name='pageid' value='$pageid'><h4 class'red-text'>Page $pageid</h4></td>
                              <td><h5>Title</h5><input class='white-text' type='text' name='title' value='".$page['title']."'></td>
                              <td><h5>Background parallax 1</h5><input class='white-text' type='text' name='backf' value=".$page['backf']."></td>
                              <td><h5>H1</h5><input class='white-text' type='text' name='h1' value='".$page['h1']."'></td>
                              <td><h5>First paragraph</h5><input class='white-text' type='text' name='paraf' value='".$page['paraf']."'></td>
                              <td><h5>Background parallax 2</h5><input class='white-text' type='text' name='backs' value='".$page['backs']."'></td>
                              <td><h5>H2</h5><input class='white-text' type='text' name='h2' value='".$page['h2']."'></td>
                              <td><h5>Second paragraph</h5><input class='white-text' type='text' name='paras' value='".$page['paras']."'></td>
                              <td><h5>Img 1</h5><input class='white-text' type='text' name='imgbodyf' value='".$page['imgbodyf']."'></td>
                              <td><h5>Img 2</h5><input class='white-text' type='text' name='imgbodys' value='".$page['imgbodys']."'></td>
                              <td><h5>Background parallax 3</h5><input class='white-text' type='text' name='backt' value='".$page['backt']."'></td>
                              <td><h5>Background for Index.php</h5><input class='white-text' type='text' name='background' value='".$page['background']."'></td>
                              <td><button type='submit' class='btn'>Edit</button></td>
                              
                            </tr>
                        </form>
                    </div>
                    <div class='black white-text modal-footer'>
                      <a href='#!' class=' white-text modal-close waves-effect waves-green btn-flat'>VALIDATE</a>
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



