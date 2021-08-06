<!--
Nama    : Faradilla Fairuz Alsha
Kelas   : XI-RPL
Tugas   : Pemrograman Web
-->
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
                    <h3>Form Penerimaan Peserta Didik Baru</h3>
                    <hr>
                    <form action="submit.php" method="post">
                        <table>
                            <tr>
                                <th width="260">Nama Siswa</th>
                                <th><input type="text" name="name" required></th>
                            </tr>
                            <tr>
                                <th>Nisn Siswa</th>
                                <th><input type="number" name="nisn" required></th>
                            </tr>
                            <tr>
                                <th>Alamat Siswa</th>
                                <th><textarea name="alamat" rows="3" required></textarea></th>
                            </tr>
                            <tr>
                                <th>Tempat Lahir Siswa</th>
                                <th><input type="text" name="tempatlahir" required></th>
                            </tr>
                            <tr>
                                <th>Tanggal Siswa</th>
                                <th><input type="date" name="tanggallahir" required></th>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin Siswa</th>
                                <th>
                                    <input type="radio" name="jeniskelamin" value="Laki - Laki" required>
                                    <label>Laki - Laki</label>
                                    <input type="radio" name="jeniskelamin" value="Perempuan" required>
                                    <label>Perempuan</label>
                                </th>
                            </tr>
                            <tr>
                                <th>Asal Sekolah Siswa</th>
                                <th><input type="text" name="asalsekolah" required></th>
                            </tr>
                            <tr>
                                <th>Nomor Telepon Orang Tua</th>
                                <th><input type="number" name="nomorhp" required></th>
                            </tr>
                        </table>
                        <center><input type="reset" value="reset" class="button button-cancel"></input> <input type="submit" value="Kirim" class="button button-yes"></input></center>
                    </form>
                </div>
            </div>
            <div class="footer">
                Copyright © 2020 - 2021 Website Penerimaan Peserta Didik Baru
            </div>
        </div>
    </div>
</body>
</html>