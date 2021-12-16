<?php

require_once './process/config.php';
require_once './requires/head.php';
$user = $_SESSION['user'];
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['admin'] == 1) {
        include_once './requires/navbar.php';
        echo "


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/style_pagebuilder.css'>
    <title>Page builder</title>
     
</head>
<body>
    
    
   
    <h1 class='center red-text'>Page Builder</h1>
    <p> Enter informations to create a new page for the project. The navbar and the footer are automaticly configured for the new page
    <div class='container'>
    <form style='padding-top: 100px;' class='black-text' action='process/creating_page.php' method='post'>
        <td><h5>Title</h5><input class='black-text' type='text' name='title' placeholder='Please insert values' value='' required></td>
        <td><h5>Background parallax 1</h5><input   class='black-text' type='text' name='backf' placeholder='Please insert values' value='' required></td>
        <td><h5>H1</h5><input class='black-text' type='text' name='h1' placeholder='Please insert values' value='' required></td>
        <td><h5>First paragraph</h5><input class='black-text' type='text' name='paraf' placeholder='Please insert values' value='' required></td>
        <td><h5>Background parallax 2</h5><input   class='black-text' type='text' name='backs' placeholder='Please insert values' value='' required></td>
        <td><h5>H2</h5><input class='black-text' type='text' name='h2' placeholder='Please insert values' value='' required></td>
        <td><h5>Second paragraph</h5><input class='black-text' type='text' name='paras' placeholder='Please insert values' value='' required></td>
        <td><h5>Img 1</h5><input   class='black-text' type='text' name='imgbodyf' placeholder='Please insert values' value='' required></td>
        <td><h5>Img 2</h5><input   class='black-text' type='text' name='imgbodys' placeholder='Please insert values' value='' required></td>
        <td><h5>Background parallax 3</h5><input   class='black-text' type='text' name='backt' placeholder='Please insert values' value='' required></td>
        <td><h5>Background for Index.php</h5><input   class='black-text' type='text' name='background' value='' required></td>
        <div class='padd row'>
        <input type='submit' class='btn' value='Create the page'></input>
        </div>
    </form>
    </div>
    <script src='./js/jQuery.js'></script>
  <script src='./js/materialize.js'></script>
  <script src='./js/script.js'></script>
</body>
</html>";

    }
}