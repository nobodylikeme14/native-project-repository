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
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="pendaftaran.php">Pendaftaran</span></a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <a class="text-white" href="logout.php">Logout</a>
                        </span>
                    </div>
                </nav>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="container-fluid">
                    <h2 class="my-3">Form Pendaftaran Mahasiswa</h2>
                    <hr>
                    <form action="submit.php" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-uppercase"><strong>Nama Lengkap</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" autocomplete="off" name="nama" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-uppercase"><strong>Tempat Lahir</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" autocomplete="off" name="tempatlahir" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label text-uppercase"><strong>Tanggal Lahir</strong></label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-control" name="tanggallahir" required>
                                                <option disabled selected value>-- Tanggal --</option>
                                                <?php 
                                                    for ($i=1; $i <= 31; $i++) { 
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-control" name="bulanlahir" required>
                                                <option disabled selected value>-- Bulan --</option>
                                                <option>Januari</option>
                                                <option>Februari</option>
                                                <option>Maret</option>
                                                <option>April</option>
                                                <option>Mei</option>
                                                <option>Juni</option>
                                                <option>Juli</option>
                                                <option>Agustus</option>
                                                <option>September</option>
                                                <option>Oktober</option>
                                                <option>November</option>
                                                <option>Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <select class="form-control" name="tahunlahir" required>
                                                <option disabled selected value>-- Tahun --</option>
                                                <?php 
                                                    for ($i=1900; $i <= 2010; $i++) { 
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-uppercase"><strong>Umur</strong></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" autocomplete="off" name="umur" placeholder="Umur" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label text-uppercase"><strong>Fakultas</strong></label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select class="form-control" name="fakultas" required>
                                        <option disabled selected value>-- Fakultas --</option>
                                        <option>Fakultas Ilmu Pendidikan</option>
                                        <option>Fakultas Tehnik</option>
                                        <option>Fakultas Bahasa dan Seni</option>
                                        <option>Fakultas Ilmu Keolahragaan</option>
                                        <option>Fakultas Ilmu Sosial</option>
                                        <option>Fakultas Ekonomo</option>
                                        <option>Fakultas Matematika</option>
                                        <option>Fakultas Ilmu Pengetahuan Alam</option>
                                        <option>Fakultas Hukum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label text-uppercase"><strong>Nomor Telepon</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" autocomplete="off" name="nomortelepon" placeholder="Nomor Telepon" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <button type="reset" name="reset" class="btn btn-danger">Clear</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" name="reset" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>