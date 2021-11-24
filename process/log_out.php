<?php

/*
 This page is here to receive the information of login out, of a random user or an admin, and killing his instance...
*/

session_unset();

session_destroy();

header("Location: inscription.php")

?>