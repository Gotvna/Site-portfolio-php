<?php
require_once 'config.php';   

$sql = "INSERT INTO normal_users (email, first_name, last_name, username ,password) VALUES(:email, :first_name, :last_name, :username, :password)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':first_name'=> $_POST['first_name'],
    ':last_name'=> $_POST['last_name'],
    ':username'=> $_POST['username'],
    ':password'=> $_POST['password'],
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php');//on le redirige sur la page d'accueil du site !

// $add->execute(array(':email'=>$_POST["email"],  ':first_name'=>$_POST["first_name"] ,  ':last_name'=>$_POST["last_name"], ':username'=>$_POST["username"], ':password'=>$_POST["password"], ':passwordcheck'=>$_POST["passwordcheck"]));             
?>