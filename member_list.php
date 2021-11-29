<!DOCTYPE html>
<html lang="en">
<head>
  <title>Member_page</title>
<?php
require_once 'requires/head.php';
?>
</head>
<body>
<?php require_once './process/config.php'; ?>

<h1>Liste des utilisateurs</h1>

<div class="container">
          <table class="responsive-table"> 
            <tbody>
                <?php 
                    $query = $pdo->prepare("SELECT * FROM users ORDER BY id asc");
                    $query->execute();


                    echo "<table id='user' class='table table-bordered striped'>
                          <tr>
                          <th>Email</th>
                          <th>Id</th>
                          <th>First_name</th>
                          <th>Last_name</th>
                          <th>Pseudo</th>
                          <th>Password</th>
                          </tr>
                          </table>
                          <table>";

                    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                        $email = $data['email'];
                        $id = $data['id'];
                        $first_name = $data['first_name'];
                        $last_name = $data['last_name'];
                        $pseudo = $data['pseudo'];
                        $password = $data['password'];


               { echo "
                     <tr>
                      <td>
                        <form action='process/edit_user.php' method='post'>
                          <table>
                          <tr>
                              <td>$email</td>
                              <td><input type='hidden' name='id' value='$id'>$id</td>
                              <td><input type='text' name='first_name' value='$first_name'></td>
                              <td><input type='text' name='last_name' value='$last_name'></td>
                              <td><input type='text' name='pseudo' value='$pseudo'></td>
                              <td>$password</td>
                              <td><button type='submit'>Edit</button></td>
                              <td><a href='process/delete_user.php?id=".$id."' class='delete_btn''>Delete</a></td>
                            </tr>
                          </table>
                        </form>
                      </td>
                      </tr>";}
                }
                ?> 


            </tbody>
          </table>
</div>





<?php require_once 'requires/scripts.php'; ?>
</body>
</html>