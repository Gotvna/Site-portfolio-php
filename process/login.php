<?php



try{
    $bdd = new PDO("mysql:host=localhost;dbname=users", "root", "");
}
catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
    
}

if(isset($_POST["email"], $_POST["password"])) 
    {     

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        $email = stripslashes($_POST["name"]); 
        $email = mysqli_real_escape_string($_POST["email"]);

        $password = stripslashes($_POST["password"]); 
        $password = mysqli_real_escape_string($_POST["password"]); 

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