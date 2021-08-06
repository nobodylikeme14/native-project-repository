<?php
  session_set_cookie_params(0);
  session_start();
  if(!isset($_SESSION['Nama'])){
    header("Location: ../../");
  }
  if ($_SESSION['Status_Ujian_Percobaan'] == "Sudah Ujian") {
    header("Location: ../../dashboardujian/");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT Testing - <?php echo $_SESSION['Nama_Ujian'];?></title>
    <link rel="shortcut icon" href="../../dashboardujian/assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/css/custom-style.css">
    <link href="../../dashboardujian/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../dashboardujian/assets/alert/css/sweetalert.css" rel="stylesheet">
  </head>
  <body>
    <div class="modal fade" data-backdrop="static" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modalTitle">Data Lengkap Siswa</h4>
          </div>
          <div class="modal-body">
            <div id="modalProfil">
              <table style="width:100%;" class="table table-bordered">
                <tr><td>Nama Lengkap</td><th><?php echo $_SESSION['Nama'];?></th></tr>
                <tr><td>Kelas</td><th><?php echo $_SESSION['Kelas'];?></th></tr>
                <tr><td>Jurusan</td><th><?php echo $_SESSION['Jurusan'];?></th></tr>
                <tr><td>Jenis Kelamin</td><th><?php echo $_SESSION['Jenis_Kelamin'];?></th></tr>
                <tr><td>Tanggal Tempat Lahir</td><th><?php echo $_SESSION['Tanggal_Tempat_Lahir'];?></th></tr>
                <tr><td>NIS</td><th><?php echo $_SESSION['Nis'];?></th></tr>
                <tr><td>Email</td><th><?php echo $_SESSION['Email'];?></th></tr>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar-default" id="navBar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color:white;" href="javascript:void(0);"><i class="fas fa-users"></i> CBT Testing</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="javascript:void(0);" id="dataLengkap" style="color:white;"><?php echo $_SESSION['Nama'];?> - <?php echo $_SESSION['Kelas'];?></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="javascript:void(0);" id="Logout" style="color:white;">Logout</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="header">
        <h2 class="page-header">Ujian<small> <?php echo $_SESSION['Nama_Ujian'];?></small></h2>
        <ol class="breadcrumb">
          <li><a href="../../">Home</a></li>
          <li>Ujian</li>
          <li class="active"><?php echo $_SESSION['Nama_Ujian'];?></li>
        </ol>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Peraturan Ujian <?php echo $_SESSION['Nama_Ujian'];?></h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <ol>
                <li>Santuy aja ye jawabnya, waktu ujiannya sampai 2025 kok :v</li>
                <li>Perhatiin soal soal yang loe jawab, banyak yang menjebak gan xixixixi :v</li>
                <li>Kalau dah siap jawab dan yakin ama jawaban loe, langsung tekan tombol Selesai aja di soal terakhir :v</li>
                <li>Nanti hasil ujiannya bisa loe liat langsung setelah ujian dengan menekan tombol Cetak Hasil.</li>
                <li>Good luck ok :v</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Konfirmasi Data Ujian</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <table class="table table-bordered" style="width:100%;">
                <tr><th>Nama</th><td><?php echo $_SESSION['Nama'];?></td></tr>
                <tr><th>Guru</th><td><?php echo $_SESSION['Guru'];?></td></tr>
                <tr><th>Kelas / Jurusan</th><td><?php echo $_SESSION['Kelas'];?> / <?php echo $_SESSION['Jurusan']; ?></td></tr>
                <tr><th>Nis</th><td><?php echo $_SESSION['Nis'];?></td></tr>
                <tr><th>Nama Ujian</th><td><?php echo $_SESSION['Nama_Ujian'];?></td></tr>
                <tr><th>Jumlah Soal</th><td><?php echo $_SESSION['Jumlah_Soal'];?> Soal</td></tr>
                <tr><th>Waktu Ujian</th><td><?php echo $_SESSION['Waktu'];?></td></tr>
                <tr><th>Terlambat</th><td>22 Juni 2025 14:35:00</td></tr>
                <tr><th>Token</th><td><input type="text" id="Token" autocomplete="off" class="form-control" placeholder="Masukkan Token..."></td></tr>
              </table>
            </div>
            <div class="col-md-6">
              <div class="alert alert-success" role="alert">
                Silahkan masukkan token terlebih dahulu, kemudian tekan tombol <a class="alert-link"> Mulai </a>   untuk memulai ujian. Tombol <a class="alert-link"> Mulai </a> akan muncul saat waktu ujian telah dimulai.
              </div>
              <div class="alert alert-info" role="alert" id="alertMulai">
                Ujian <?php echo $_SESSION['Nama_Ujian'];?> akan dimulai dalam : <a id="countDown"></a>
              </div>
              <div class="alert alert-danger" id="alertSelesai" role="alert"></div>
              <button type="button" class="btn btn-info" id="mulaiUjian" name="button"><i class="fas fa-edit"></i> Mulai Ujian</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center">Copyright 2020 CBT Testing - Made with &hearts; by <a href="mailto:malfauzy99@gmail.com"> M.Al Fauzy</a>.</p>
      </div>
    </footer>
    <script src="../../dashboardujian/assets/js/jquery-3.5.1.js"></script>
    <script src="../../dashboardujian/assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/font-awesome/all.js"></script>
    <script src="../../dashboardujian/assets/alert/js/sweetalert.min.js"></script>
    <script>
    //Countdown Mulai Ujian
    var countDownDate1 = new Date("June 24, 2020 18:00:00").getTime();
    var x = setInterval(function() {
      var now1 = new Date().getTime();
      var distance1 = countDownDate1 - now1;
      var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
      var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
      var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

      $('#countDown').html(days1 + "h " + hours1 + "j "
      + minutes1 + "m " + seconds1 + "d lagi.");

      if (distance1 < 0) {
        clearInterval(x);
        $('#alertMulai').html("Anda Dapat Memulai Ujian Sekarang.");
        $('#mulaiUjian').show();
      }
    }, 10);

    //Countdown Durasi Ujian
    var countDownDate2 = new Date("June 22, 2025 14:35:00").getTime();
    var d = setInterval(function() {
      var now2 = new Date().getTime();
      var distance2 = countDownDate2 - now2;
      var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
      var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
      var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);
      if (distance2 < 0) {
        clearInterval(d);
        $('#mulaiUjian').hide();$('#alertMulai').hide();
        $('#alertSelesai').show();
        $('#alertSelesai').html("Maaf, waktu ujian telah selesai. Silahkan beritahu pada admin.");
      }
    }, 10);

    $("#Logout").click(function(){
      var Nama = '<?php echo $_SESSION['Nama'];?>';
      swal({
        title: 'Hai, '+Nama+' !',
        text: 'Apakah Kamu Yakin Ingin Logout ?',
        type: 'warning',
        confirmButtonColor: '#0066ff',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
        closeOnConfirm: false
      },
      function() {
        setTimeout(function() {
          window.location.href = "../../dashboardujian/server-side-dashboard/logout.php";
        },100);
      });
    });

    $("#dataLengkap").click(function(){
      $('#formModal').modal("show");
    });

    $("#mulaiUjian").click(function(){
      var Token = $('#Token').val();
      var dataToken = '<?php echo $_SESSION['Token'];?>';
      if (Token == "") {
        swal({
          title: 'Token Belum Diisi !',
          text: 'Silahkan periksa kembali data yang anda masukkan...',
          type: 'warning',
          showConfirmButton: true
        });
        return true;
      }
      if (Token != dataToken) {
        swal({
          title: 'Token Salah !',
          text: 'Silahkan periksa kembali data yang anda masukkan...',
          type: 'error',
          showConfirmButton: true
        });
        $('#Token').val('');
        return true;
      }else{
        swal({
          title: 'Token Benar !',
          text: 'Anda dapat melaksanakan ujian sekarang...',
          type: 'success',
          confirmButtonColor: '#0066ff',
          allowOutsideClick: false,
          allowEscapeKey: false,
          animation: false,
          showCancelButton: false,
          confirmButtonText: 'Ok',
          closeOnConfirm: true
        },
        function() {
          setTimeout(function() {
            window.location.href = 'soal/?Token='+'<?php $token=$_SESSION['Token']; echo md5($token);?>';
          },100);
        });
      }
    });
    </script>
  </body>
</html>
