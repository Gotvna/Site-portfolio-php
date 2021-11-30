<?php
    require_once 'config.php';

    $sql = "UPDATE pages SET backf =:backf, paraf = :paraf, backs = :backs, imgbodyf = :imgbodyf, imgbodys = :imgbodys, backt = :backt WHERE page-id = :page-id";

    $DataUpdate = array(
        ':page-id'=>$_POST["page-id"], 
        ':backf'=>$_POST["backf"],    
        ':paraf'=>$_POST["paraf"] ,  
        ':backs'=>$_POST["backs"],
        ':paras'=>$_POST["paras"],
        ':imgbodyf'=>$_POST["imgbodyf"],
        ':imgbodys'=>$_POST["imgbodys"],
        ':backt'=>$_POST["backt"]);

    $prepare = $pdo->prepare($sql);
    $prepare->execute($DataUpdate);
?>