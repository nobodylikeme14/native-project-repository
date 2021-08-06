<!--
    Nama    : Faradilla Fairuz Alsha
    Kelas   : XI-RPL
-->
<?php
    session_start(); 
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Mahasiswa Baru - UNNES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand text-white" href="home.php">PMB - UNNES</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="home.php">Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pendaftaran.php">Pendaftaran</span></a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <a class="text-white" href="logout.php">Logout</a>
                        </span>
                    </div>
                </nav>
            </div>
            <div class="col-12">
                <div class="jumbotron">
                    <h1 class="display-4">Selamat Datang !</h1>
                    <p class="lead mt-5 mb-5">
                        Pendaftaran Mahasiswa Baru Universitas Negeri Semarang Tahun Ajaran 2021 - 2022 akan dibuka dari tanggal 
                        1 Maret 2021 sampai dengan tanggal 1 Juni 2021. Silahkan klik tombol dibawah untuk
                        mendaftarkan diri anda sebagai Mahasiswa Universitas Negeri Semarang.
                    </p>
                    <p class="lead">
                        <a class="btn btn-info btn-lg" href="pendaftaran.php" role="button">Daftar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>