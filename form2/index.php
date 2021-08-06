<!--
    Nama    : Faradilla Fairuz Alsha
    Kelas   : XI-RPL
-->
<?php
    session_start(); 
    if(isset($_SESSION['username'])){
        header("Location: home.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Mahasiswa Baru - UNNES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <body class="text-center">
        <form class="form-signin" action="login.php" method="post">
            <h1 class="h3 mb-5">Login Website PMB UNNES</h1>
            <?php 
                if(isset($_GET['message'])){
                    echo '<div class="alert alert-danger" role="alert">'.$_GET['message'].'</div>';
                }
            ?>
            <p class="m-0 text-left" for="username">Username</p>
            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Username" required autofocus>
            <p class="m-0 text-left" for="password">Password</p>
            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
        </form>
    </body>
</body>
</html>