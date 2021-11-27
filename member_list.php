<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member List</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./css/style_admin.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once './process/config.php'; ?>


<table class="table responsive-table striped">
        <thead>
          <tr>
              <th>Email</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
              <th>Password</th>
          </tr>
        </thead>

<h1>Liste des utilisateurs</h1>
<?php
$sql = "SELECT * FROM normal_users"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);   
foreach ($data as $user) { ?>
<div class="bloc_user">
    <?php echo "<tbody><tr><td>" . $user["email"]. "</td><td>" . $user["first_name"] . "</td><td>". $user["last_name"]. "</td><td>" . $user["username"]. "</td><td>" . $user["password"]. "</td></tr>"; ?>
    

        


</div>

<?php } ?>
</tbody>
</table>


<?php require_once './requires/scripts.php'; ?>
</body>
</html>