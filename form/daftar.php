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
        <center><h2>Pendaftaran Akun Twitter</h2>
        <img src="twitter.png" width="50" alt="logo"></center>
        <h2>Buat akun</h2>
        <form action="submit.php" method="post">
        <p class="label">Nama Lengkap</p>
        <input type="text" name="nama" autocomplete="off" required>

        <p class="label">Email</p>
        <input type="email" name="email" autocomplete="off" required>

        <p class="label">Nomor Telepon</p>
        <input type="text" name="nomortelepon" autocomplete="off" required>

        <p class="label">Password</p>
        <input type="password" name="password" autocomplete="off" required>

        <p class="label">Tanggal Lahir</p>
        <input type="date" name="tanggallahir" autocomplete="off" required>

        <p class="label">Jenis Kelamin</p>
        <input type="radio" name="jeniskelamin" value="Laki - Laki" required> Laki - Laki
        <input type="radio" name="jeniskelamin" value="Perempuan" required> Perempuan
        <br>
        <div class="action">
            <a href="index.php" class="common">Login</a>
            <input type="submit" class="success" name="Daftar" value="Daftar">
        </div>
        </form>
    </div>
</body>
</html>