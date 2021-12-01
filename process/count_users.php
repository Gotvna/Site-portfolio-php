<?php
    require_once 'config.php';

    $sql = "SELECT COUNT(*) as number_users FROM `users` ORDER BY id";



    $prepare = $pdo->prepare($sql);
    $prepare->execute();
?>