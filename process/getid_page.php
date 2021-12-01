<?php 

 if (isset($_GET['pageid'])){
     $id = $_GET['pageid'];
     $query = $pdo->prepare("SELECT pageid FROM tables WHERE pageid='$pageid'");
     $query->execute();
    
 }

?>