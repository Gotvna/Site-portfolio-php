<?php
    require_once 'config.php';

    $sql = "INSERT INTO `admin_users` (`title`, `backf`, `h1`, `paraf`, `backs`, `paras`, `h2`,`imgbodyf`,`imgbodys`,`backt`,`background`,
                                ) VALUES(:title,:backf,:h1,:paraf,:backs,:paras,:h2, :imgbodyf, :imgbodys, :backt, :background, 

        )
     
    
    ";

 
    $DataUpdate = array(
         
        ':title'=>$_POST["title"], 
        ':backf'=>$_POST["backf"],    
        ':h1'=>$_POST["h1"], 
        ':paraf'=>$_POST["paraf"] ,  
        ':backs'=>$_POST["backs"],
        ':paras'=>$_POST["paras"],
        ':h2'=>$_POST["h2"],
        ':imgbodyf'=>$_POST["imgbodyf"],
        ':imgbodys'=>$_POST["imgbodys"],
        ':backt'=>$_POST["backt"],
        ':background'=>$_POST["background"],
    );


    $prepare = $pdo->prepare($sql);
    $prepare->execute($DataUpdate);
?>