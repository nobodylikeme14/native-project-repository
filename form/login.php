<?php
session_start();
$message = "Email atau Password Anda Salah !";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "faradilla.alsha@gmail.com" && $password == "Faradilla04"){
        $_SESSION['email'] = $email;
        header("Location: home.php");
    }else{
        header("Location: index.php?message=".$message);
    }
}
?>