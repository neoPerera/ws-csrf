<!DOCTYPE html>

<?php 
    session_start();
    if(isset($_SESSION['id']))
    {
        header('location: account.php');
    }
    
    

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to my WS assignment</title>
</head>

<body>
    <h1>WELCOME</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" id="e1">
        <input type="text" name="password" id="p1">
        <input type="submit" name = "submit"value="LOGIN">
    </form>
</body>

</html>