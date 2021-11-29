<?php 
require_once 'config.php';
 if (isset($_GET['id'])){
     $id = $_GET['id'];
     $query = $pdo->prepare("DELETE FROM users WHERE id='$id'");
     $query->execute();

     echo 'deleted user';
     header("Location : ../member_list.php");
 }
 else{
     echo'no id found';
     header("Location : ../member_list.php");
 }



?>