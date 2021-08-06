<?php
session_start();
$message = "Email atau Password Anda Salah !";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "faradillafairuzalsha" && $password == "faradilla04"){
        $_SESSION['username'] = $username;
        header("Location: home.php");
    }else{
        header("Location: index.php?message=".$message);
    }
}else{
    header('Location: index.php');
}
?>