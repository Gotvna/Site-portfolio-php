<?php

require_once 'config.php';

if (isset($_POST["id"]) && $_POST["pseudo"] && $_POST["passphrase"]) {     

        $id = $_POST["id"]; 
        $pseudo = $_POST["pseudo"];     
        $passphrase = $_POST["passphrase"]; 

        // $email = stripslashes($_POST["email"]); 
        // $email = ($_POST["email"]);

        // $password = stripslashes($_POST["password"]); 
        // $password = ($_POST["password"]); 

        $sql = ("SELECT id, pseudo, passphrase FROM admin_users WHERE id LIKE '{$_POST["id"]}' AND pseudo LIKE '{$_POST["pseudo"]}' AND passphrase LIKE '{$_POST["passphrase"]}' ");
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau

    if (empty($user)) {  //vérifie si le resultat est vide !
         //non connecté
         echo "Id or passphrase is incorrect !";
    } else {
         $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
         header('Location:../index.php');
         
    }
    //on le redirige sur la page d'accueil du site !


        // if(mysqli_num_rows(mysqli_result::$current_field  $result1 ) == 2 )
        //     { 
        //     $_SESSION["logged_in"] = true; 
        //     $_SESSION["name"] = $email; 
        //     // header('Location:../index.php');
        // }
        // else
        // {
        //     echo 'The email or password are incorrect!';
        //     // header('Location:../index.php');
        // }

        
        
        
        
}
        



?>  