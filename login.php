<?php
include 'conn.php';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $passwrd = $_POST['password'];

    if ($email == "aaa" && $passwrd == "aaa") {
        $_SESSION['id'] = 111;
        $token = rand();
        $sql = "INSERT INTO token (id ,user,token) VAlUES (NULL, {$_SESSION['id']},{$token})";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            header('location: account.php');
        }


        
        
    }
    elseif($email == "sss" && $passwrd == "sss") {
        $_SESSION['id'] = 111;
        $token = rand();
        $_SESSION['token'] = $token;
        setcookie("tokenCookie", $token, time() + (60 * 60), "/");
        header('location: DSaccount.php');

    }
     else {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}
?>

