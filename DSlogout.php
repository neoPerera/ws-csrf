<?php

session_start();

    session_destroy();
    setcookie("tokenCookie", "", time() - 1, "/");
    header('location: index.php');
    


?>