<!DOCTYPE html>



<?php

session_start();
if (isset($_SESSION['id'])) {
    echo "Session id is". $_SESSION['id'] . "<br>";
} else {
    header('location: index.php');
}




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my account</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div>
        <form action="token.php" method="post">
            <p id="div1"></p>
            <p>Enter name:</p>
            <input type="text" name="uname" id="u1">
            <input type="submit" value="OK" name="ok">

        </form>
    </div>
    <script>
            $(document).ready(function() {

                $("#div1").load("getToken.php #t1");

            });
    </script>
</body>

</html>