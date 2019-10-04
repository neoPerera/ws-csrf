<?php
if (isset($_POST['uname'])) {

    session_start();

    $getToken = $_POST['token1'];


    $token = $_COOKIE['tokenCookie'];
    if ($token == $getToken) {
        $name = $_POST['uname'];
        echo "name changed succesfully<br/>";
        echo "new name is  $name !<br>";
        echo "token: " . $getToken;
    }
    else {
        echo "token value is invalid";
    }
} else {
    header("location: account.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="DSlogout.php">
        <h1>LogOut</h1>
    </a>
</body>

</html>