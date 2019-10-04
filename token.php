<?php
if (isset($_POST['uname'])) {


    include 'conn.php';
    session_start();

    $getToken = $_POST['token1'];
     $sql = "SELECT token from token where user = {$_SESSION['id']}";
     $result = mysqli_query($conn, $sql);
     if($result)
     {
         $row = mysqli_fetch_assoc($result);
         $token =$row['token'];


        if($token == $getToken)
        {
     
                $name = $_POST['uname'];
                echo "name changed succesfully<br/>";
                echo "new name is  $name !";
             
        }
        else{
            echo "token is invalid";
        }
    
         
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
    <a href="logout.php"><h1>LogOut</h1></a>
</body>
</html>