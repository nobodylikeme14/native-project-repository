<?php 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="twitter.png">
</head>
<body>
    <div class="form">
        <h2>Selamat Datang, <?php echo $_SESSION['email'] ?>.</h2>
        <h2>Anda berhasil login.</h2>
        <a class="logout" href="logout.php">Keluar</a>
    </div>
</body>
</html>