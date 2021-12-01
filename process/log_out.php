<?php

/*
 This page is here to receive the information of login out, of a random user or an admin, and killing his instance...
*/
require_once 'config.php';

session_unset();

session_destroy();

header("Location: ../index.php")

?>