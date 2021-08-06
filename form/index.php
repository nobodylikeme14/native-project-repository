<!--
    Nama    : Faradilla Fairuz Alsha
    Kelas   : XI-RPL  
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Pendaftaran Twitter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="twitter.png">
</head>
<body>
    <div class="form">
        <center><h2>Login Akun Twitter</h2>
        <img src="twitter.png" width="50" alt="logo"></center>
        <h2>Login</h2>
        <?php 
            if(isset($_GET['message'])){
                echo '<p class="info2">'.$_GET['message'];;
            }
        ?>
        <form action="login.php" method="post">
        <p class="label">Email</p>
        <input type="email" name="email" autocomplete="off" required>
        <p class="label">Password</p>
        <input type="password" name="password" autocomplete="off" required>
        <br>
        <div class="action">
            <input type="submit" class="success" value="Login" name="submit">
            <a class="common" href="daftar.php">Daftar</a>
        </div>
        </form>
    </div>
</body>
</html>
</body>
</html>