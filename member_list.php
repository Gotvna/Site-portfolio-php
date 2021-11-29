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
                          </tr>";

                    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                        $email = $data['email'];
                        $id = $data['id'];
                        $first_name = $data['first_name'];
                        $last_name = $data['last_name'];
                        $pseudo = $data['pseudo'];
                        $password = $data['password'];


               { echo "<tr>
                        <td>$email</td>
                        <td>$id</td>
                        <td>$first_name</td>
                        <td>$last_name</td>
                        <td>$pseudo</td>
                        <td>$password</td>
                        <td><a href='process/edit_user.php?id=".$id."'>Edit</a></td>
                        <td><a href='process/delete_user.php?id=".$id."'>Delete</a></td>
                      </tr>";}
                }
                ?> 


            </tbody>
          </table>
</div>





<?php require_once 'requires/scripts.php'; ?>
</body>
</html>