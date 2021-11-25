<?php


try{
    $bdd = new PDO("mysql:host=localhost;dbname=users", "root", "");
}
catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
            
}
        

        
        $add = $bdd->prepare("INSERT INTO normal_users (email, first_name, last_name, password) VALUES(:email, :first_name, :last_name, :password)");
        $add->execute(array(':email'=>$_POST["email"],  ":first_name"=>$_POST["first_name"] ,  ':last_name'=>$_POST["last_name"], ':password'=>$_POST["password"]));  

?>