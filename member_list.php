<?php


require_once 'process/config.php';
require_once 'requires/navbar.php';


$user = $_SESSION['user'];




if ($user['admin'] == 1 ) {
    include_once './requires/sidenav.php';
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <link type='text/css' rel='stylesheet' href='./css/materialize.css'  media='screen,projection'/>
    <link rel='stylesheet' href='./css/style_member.css'>
    <link href='https://fonts.googleapis.com/css2?family=Manrope&display=swap' rel='stylesheet'>
      <title>Member_page</title>
    </head>
    <body>
    <h1 class='center'>List of the users</h1>
    <div class='container'>
            <table class='responsive-table'> 
                <tbody>
                    <table id='user' class='table responsive-table table-bordered striped'>
                        <tr>
                            <th>Email</th>
                            <th>Id</th>
                            <th>First_name</th>
                            <th>Last_name</th>
                            <th>Pseudo</th>
                            <th>Password</th>
                        </tr>
                    </table>
                    </div>";
    
    $query = $pdo->prepare('SELECT * FROM users ORDER BY id asc');
    $query->execute();
    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
        $email = $data['email'];
        $id = $data['id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $pseudo = $data['pseudo'];
        $password = $data['password'];


          
                 
    
        echo 
        "
    
                <div class='container'>
                    <table class='responsive-table'>
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
                                            <td><button type='submit' class='btn'><i class='material-icons prefix'>create</i>Edit</button></td>
                                            <td><a href='process/delete_user.php?id=".$id."' type='submit' class='btn red'><i class='material-icons prefix'>delete</i>Delete</a></td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </table>
                </tbody>
            </table>
        </div>
    </body>
</html>";
    }

}
require_once 'requires/scripts.php';
?> 

