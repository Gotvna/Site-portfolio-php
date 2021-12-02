<?php 
require_once 'config.php';



$pageid = $_GET['pageid'];
      $sql = ("DELETE FROM pages WHERE pageid = '$pageid'");
      $pre = $pdo->prepare($sql); 
      $pre->execute();
      header('Location:../index.php');
  


?>
