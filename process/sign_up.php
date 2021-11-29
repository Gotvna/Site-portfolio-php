<?php
require_once 'config.php';   

$sql = "INSERT INTO users (email, first_name, last_name, pseudo ,password) VALUES(:email, :first_name, :last_name, :pseudo, :password)";
$dataBinded=array(
    ':email' =>$_POST['email'],
    ':first_name'=>$_POST['first_name'],
    ':last_name'=>$_POST['last_name'],
    ':pseudo'=>$_POST['pseudo'],
    ':password'=>$_POST['password'],
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../index.php');//on le redirige sur la page d'accueil du site !

// $add->execute(array(':email'=>$_POST["email"],  ':first_name'=>$_POST["first_name"] ,  ':last_name'=>$_POST["last_name"], ':username'=>$_POST["username"], ':password'=>$_POST["password"], ':passwordcheck'=>$_POST["passwordcheck"]));             

//If the user already exist
if ($user){
    if ($user['pseudo'] === $pseudo){
        array_push($errors, "pseudo already exists");
    }
    if($user['email'] === $email){
        array_push($errors, "Email already exists");
    }
}

if (count($errors) == 0){
    $password = md5($password); //modifie encrypt !important
    
    $query = "INSERT INTO users (first_name, last_name, pseudo, email, password) VALUES('$first_name', '$last_name','$pseudo','$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['success'] = "You are now logged in";
    header('Location: index.php');
}


?>