<!--
Nama    : Faradilla Fairuz Alsha
Kelas   : XI-RPL
Tugas   : Pemrograman Web
-->

<!-- Cek apakah sudah mengisi form atau belum -->
<?php
if(empty($_POST["name"]))
{
    header("Location: daftar.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website PPDB dengan HTML, CSS, dan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrap">
            <div class="header">
                <h2>Website Penerimaan Peserta Didik Baru dengan HTML, CSS, dan PHP</h2>
            </div>
            <div class="inner">
                <div class="navigation">
                    <h3 class="navigation-title">Menu</h3>
                    <ul>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a class="active" href="">Pendaftaran Peserta Didik Baru</a></li>
                    </ul>
                </div>
                <div class="content">
                    <h3>Data Pendaftaran Siswa Berhasil Terkirim...</h3>
                    <hr>
                    <p>Berikut adalah data yang berhasil dikirimkan ke sekolah: </p>
                    Nama Siswa: <br>
                    <strong><?php echo $_POST["name"]; ?></strong><br>
                    Nisn Siswa: <br>
                    <strong><?php echo $_POST["nisn"]; ?></strong><br>
                    Alamat Siswa: <br>
                    <strong><?php echo $_POST["alamat"]; ?></strong><br>
                    Tempat Lahir Siswa: <br>
                    <strong><?php echo $_POST["tempatlahir"]; ?></strong><br>
                    Tanggal Lahir Siswa: <br>
                    <strong><?php echo $_POST["tanggallahir"]; ?></strong><br>
                    Jenis Kelamin Siswa: <br>
                    <strong><?php echo $_POST["jeniskelamin"]; ?></strong><br>
                    Asal Sekolah Siswa: <br>
                    <strong><?php echo $_POST["asalsekolah"]; ?></strong><br>
                    Nomor Telepon Orang Tua Siswa: <br>
                    <strong><?php echo $_POST["nomorhp"]; ?></strong><br><br><br>
                    <center><a href="index.php" class="button button-cancel">Kembali</a></center>
                </div>
            </div>
            <div class="footer">
                Copyright © 2020 - 2021 Website Penerimaan Peserta Didik Baru
            </div>
        </div>
    </div>
</body>
</html>