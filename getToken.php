<?php
 include 'conn.php';
session_start();
 $sql = "SELECT token from token where user = {$_SESSION['id']}";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
     $row = mysqli_fetch_assoc($result);
     $token =$row['token'];

     
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
    <input type="text" name="token1" id="t1" value="<?php echo $token?>">
</body>
</html>