<?php
include 'conn.php';
session_start();
$sql = "DELETE FROM token WHERE user={$_SESSION['id']};";
$result = mysqli_query($conn, $sql);
if ($result) {
    session_destroy();
    header('location: index.php');
}
else
{
    header('location: account.php');
}


?>