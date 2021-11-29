<?php
require_once 'config.php';   

$sql = "INSERT INTO normal_users (email, first_name, last_name, username ,password) VALUES(:email, :first_name, :last_name, :username, :password)";
$dataBinded=array(
    ':email' =>$_POST['email'],
    ':first_name'=>$_POST['first_name'],
    ':last_name'=>$_POST['last_name'],
    ':username'=>$_POST['username'],
    ':password'=>$_POST['password'],
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../index.php');//on le redirige sur la page d'accueil du site !

// $add->execute(array(':email'=>$_POST["email"],  ':first_name'=>$_POST["first_name"] ,  ':last_name'=>$_POST["last_name"], ':username'=>$_POST["username"], ':password'=>$_POST["password"], ':passwordcheck'=>$_POST["passwordcheck"]));             

//If the user already exist
if ($user){
    if ($user['username'] === $username){
        array_push($errors, "Username already exists");
    }
    if($user['email'] === $email){
        array_push($errors, "Email already exists");
    }
}

if (count($errors) == 0){
    $password = md5($password); //modifie encrypt !important
    
    $query = "INSERT INTO users (first_name, last_name, username, email, password) VALUES('$first_name', '$last_name','$username','$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
}


?>