<!DOCTYPE html>



<?php

session_start();
if (isset($_SESSION['id'])) {
    # code...
    echo $_SESSION['id'] . "<br>";
    echo $_SESSION['token'];
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
    <form action="DStoken.php" method="post">
        
        <p>token: <input type="text" name="token1" id="tokenArea"></p>
       
        <p>enter name:<input type="text" name="uname" id="u1"></p>
        <input type="submit" value="OK" name="ok">




    </form>

    <script>
        

        var name = "tokenCookie=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                document.getElementById("tokenArea").value = c.substring(name.length, c.length);
            }
        }
       
    </script>


</body>

</html>