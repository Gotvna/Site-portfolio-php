<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once 'requires/head.php';
?>
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
$sql = "SELECT * FROM users"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);   
foreach ($data as $user) { ?>
<div class="bloc_user">
    <?php echo "<tbody><tr><td>" . $user["email"]. "</td><td>" . $user["first_name"] . "</td><td>". $user["last_name"]. "</td><td>" . $user["pseudo"]. "</td><td>" . $user["password"]. "</td></tr>"; ?>
    

        


</div>

<?php } ?>
</tbody>
</table>


<?php require_once 'requires/scripts.php'; ?>
</body>
</html>