<?php 

if (isset($_GET['pageid'])) {
     $id = $_GET['pageid'];
     $query = $pdo->prepare("SELECT pageid FROM pages WHERE pageid='$pageid'");
     $query->execute();
    
}

?>