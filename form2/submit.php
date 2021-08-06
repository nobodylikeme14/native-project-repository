<!--
    Nama    : Faradilla Fairuz Alsha
    Kelas   : XI-RPL
-->
<?php
    session_start(); 
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }elseif(empty($_POST["nama"])){
        header("Location: pendaftaran.php");
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
                    <a class="navbar-brand text-white" href="#">PMB - UNNES</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</span></a>
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
            <div class="col-lg-6 col-md-12 mx-auto my-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h2 class="card-title text-center text-success my-5">Anda Berhasil Terdaftar !</h2>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-uppercase">Nama Lengkap</p>
                            </div>
                            <div class="col-1"> : </div>
                            <div class="col">
                                <p class="text-uppercase"><strong><?php echo $_POST['nama'] ?></strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-uppercase">Tempat Lahir</p>
                            </div>
                            <div class="col-1"> : </div>
                            <div class="col">
                                <p class="text-uppercase"><strong><?php echo $_POST['tempatlahir'] ?></strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-uppercase">Tanggal Lahir</p>
                            </div>
                            <div class="col-1"> : </div>
                            <div class="col">
                                <p class="text-uppercase"><strong>
                                    <?php echo $_POST['tanggallahir']." ".$_POST['bulanlahir']." ".$_POST['tahunlahir'] ?>
                                </strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-uppercase">Umur</p>
                            </div>
                            <div class="col-1"> : </div>
                            <div class="col">
                                <p class="text-uppercase"><strong><?php echo $_POST['umur'] ?> Tahun</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-uppercase">Fakultas</p>
                            </div>
                            <div class="col-1"> : </div>
                            <div class="col">
                                <p class="text-uppercase"><strong><?php echo $_POST['fakultas'] ?></strong></p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                                <a class="btn btn-success btn-lg text-center" href="index.php" role="button">OK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>