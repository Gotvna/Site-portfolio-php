<?php

require_once 'config.php';

if(isset($_POST["email"], $_POST["password"])) 
    {     

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        $email = stripslashes($_POST["name"]); 
        $email = ($_POST["email"]);

        $password = stripslashes($_POST["password"]); 
        $password = ($_POST["password"]); 

        $bdd = $result1 -> query("SELECT email, password FROM normal_users WHERE email = '".$email."' AND  password = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["name"] = $email; 
        }
        else
        {
            echo 'The email or password are incorrect!';
        }
}


?>