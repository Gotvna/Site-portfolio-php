<?php
    require_once 'config.php';

    $sql = "UPDATE users SET first_name =:first_name, last_name = :last_name, pseudo = :pseudo WHERE id = :id";

    $DataUpdate = array(
        ':id'=>$_POST["id"], 
        ':first_name'=>$_POST["first_name"],    
        ':last_name'=>$_POST["last_name"] ,  
        ':pseudo'=>$_POST["pseudo"]);

    $prepare = $pdo->prepare($sql);
    $prepare->execute($DataUpdate);
?>