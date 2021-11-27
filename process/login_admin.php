<?php



require_once 'config.php';

if(isset($_POST["id"], $_POST["passphrase"])) 
    {     

        $id = $_POST["id"]; 
        $passphrase = $_POST["passphrase"]; 

        $id = stripslashes($_POST["name"]); 
        $id = mysqli_real_escape_string($_POST["id"]);

        $passphrase = stripslashes($_POST["passphrase"]); 
        $passphrase = mysqli_real_escape_string($_POST["passphrase"]); 

        $bdd = $result1 -> query("SELECT id, passphrase FROM admin WHERE id = '".$id."' AND  password = '".$passphrase."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $id; 
        }
        else
        {
            echo 'The id or passphrase are incorrect!';
        }
}


?>