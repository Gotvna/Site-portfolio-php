<?php
require_once 'config.php';

$sql = "UPDATE pages SET 
    title = :title,
    backf =:backf, 
    h1 = :h1,
    paraf = :paraf, 
    backs = :backs,
    paras = :paras,
    h2 = :h2, 
    imgbodyf = :imgbodyf, 
    imgbodys = :imgbodys, 
    backt = :backt, 
    background = :background
    WHERE pageid = :pageid
    ";

$DataUpdate = array(
    ':pageid' => $_POST["pageid"],
    ':title' => $_POST["title"],
    ':backf' => $_POST["backf"],
    ':h1' => $_POST["h1"],
    ':paraf' => $_POST["paraf"],
    ':backs' => $_POST["backs"],
    ':paras' => $_POST["paras"],
    ':h2' => $_POST["h2"],
    ':imgbodyf' => $_POST["imgbodyf"],
    ':imgbodys' => $_POST["imgbodys"],
    ':backt' => $_POST["backt"],
    ':background' => $_POST["background"]
);


$prepare = $pdo->prepare($sql);
$prepare->execute($DataUpdate);
header('Location: ../index.php');
