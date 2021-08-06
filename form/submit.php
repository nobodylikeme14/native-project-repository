<!--
    Nama    : Faradilla Fairuz Alsha
    Kelas   : XI-RPL  
-->
<?php
if(empty($_POST["nama"]))
{
    header("Location: daftar.php");
}
?>
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
        <center><h2>Pendaftaran Berhasil</h2>
        <img src="twitter.png" width="50" alt="logo">
        <h2 class="info1">Akun Berhasil Didaftarkan !</h2></center>
        <center><p class="info2">Harap jangan beritahu data akun anda pada orang lain !</p></center>
        <h3>Data Akun Anda</h3>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><strong><?php echo $_POST['nama']; ?></strong></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><strong><?php echo $_POST['email']; ?></strong></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><strong><?php echo $_POST['nomortelepon']; ?></strong></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><strong><?php echo $_POST['password']; ?></strong></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><strong><?php echo $_POST['tanggallahir']; ?></strong></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><strong><?php echo $_POST['jeniskelamin']; ?></strong></td>
            </tr>
        </table><br><br>
        <div class="action">
            <center><a class="common" href="index.php">Login</a></center>
        </div>
    </div>
</body>
</html>