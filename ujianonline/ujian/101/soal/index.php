<?php
  session_set_cookie_params(0);
  session_start();
  if(!isset($_SESSION['Nama'])){
    header("Location: ../");
  }
  if ($_SESSION['Status_Ujian_Percobaan'] == "Sudah Ujian") {
    header("Location: ../");
  }
  if ($_GET['Token'] != md5($_SESSION['Token'])) {
    header("Location: ../");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT Testing - <?php echo $_SESSION['Nama_Ujian'];?></title>
    <link rel="shortcut icon" href="../../../dashboardujian/assets/img/favicon.png">
    <link rel="stylesheet" href="../../assets/css/custom-style.css">
    <link rel="stylesheet" href="../../assets/css/jquery-labelauty.css">
    <link href="../../../dashboardujian/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../../dashboardujian/assets/alert/css/sweetalert.css" rel="stylesheet">
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
              <table style="width:100%;">
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
          <li><a href="../../../">Home</a></li>
          <li>Ujian</li>
          <li class="active"><?php echo $_SESSION['Nama_Ujian'];?></li>
        </ol>
      </div>
      <div class="row">
        <div id="containerSoal1" class="col-md-12"> <!-- SOAL 1 -->
          <div class="panel-group" id="accordionSoal1" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab" id="heading1">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #1 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian1" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal1" href="#collapse1" aria-expanded="true" aria-controls="collapse1"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                <div class="panel-body">
                  <p>Benda padat yang tidak bisa dicairkan adalah...</p>
                  <form id="soal1">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Sertifikat Tanah"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Lemari"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Emas"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. D Benar"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSelanjutnya1" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal2" class="col-md-12"> <!-- SOAL 2 -->
          <div class="panel-group" id="accordionSoal2" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab" id="heading2">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #2 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian2" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal2" href="#collapse2" aria-expanded="true" aria-controls="collapse2"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
                  <p>Berikut ini yang merupakan ciri-ciri teman kamu!</p>
                  <form id="soal2">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Murid teladan"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Kalo bawa motor ngajak mati"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Ga suka makan"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Semua salah"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya2" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya2" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal3" class="col-md-12"> <!-- SOAL 3 -->
          <div class="panel-group" id="accordionSoal3" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab" id="heading3">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #3 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian3" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal3" href="#collapse3" aria-expanded="true" aria-controls="collapse3"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body">
                  <p>"Orange" artinya adalah...</p>
                  <form id="soal3">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Rasa"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Warna"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Buah"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Buyung puyuh"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya3" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya3" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal4" class="col-md-12"> <!-- SOAL 4 -->
          <div class="panel-group" id="accordionSoal4" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab" id="heading4">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #4 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian4" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal4" href="#collapse4" aria-expanded="true" aria-controls="collapse4"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading4">
                <div class="panel-body">
                  <p>Film sinetron Ganteng Ganteng Serigala pemeran utamanya adalah...</p>
                  <form id="soal4">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Olga Saputra"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Jungkook"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Aliando Syarief"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Eli Sugigi"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya4" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya4" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal5" class="col-md-12"> <!-- SOAL 5 -->
          <div class="panel-group" id="accordionSoal5" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab" id="heading5">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #5 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian5" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal5" href="#collapse5" aria-expanded="true" aria-controls="collapse5"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading5">
                <div class="panel-body">
                  <p>Bersatu kita teguh, bercerai kita...</p>
                  <form id="soal5">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Innalillahi"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Runtuh"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Menikah lagi"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Party"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya5" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya5" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal6" class="col-md-12"> <!-- SOAL 6 -->
          <div class="panel-group" id="accordionSoal6" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #6 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian6" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal6" href="#collapse6" aria-expanded="true" aria-controls="collapse6"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
                <div class="panel-body">
                  <p>Bagaimana cara kita menghindari wabah Covid-19 agar kita tidak tertular ?</p>
                  <form id="soal6">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Menjauhi keramaian dan budayakan hidup bersih"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Buang sampah seenaknya"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Berbaur dengan orang yang terkena Covid-19"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Pasrah, apapun yang terjadi"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya6" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya6" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal7" class="col-md-12"> <!-- SOAL 7 -->
          <div class="panel-group" id="accordionSoal7" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #7 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian7" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal7" href="#collapse7" aria-expanded="true" aria-controls="collapse7"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7">
                <div class="panel-body">
                  <p>Aku sebuah energi, kecil jadi kawan, besar jadi lawan. Siapakah aku ?</p>
                  <form id="soal7">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Air"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Angin"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Api"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Petir"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya7" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya7" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal8" class="col-md-12"> <!-- SOAL 8 -->
          <div class="panel-group" id="accordionSoal8" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #8 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian8" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal8" href="#collapse8" aria-expanded="true" aria-controls="collapse8"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse8" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading8">
                <div class="panel-body">
                  <p>Apa yang menjadi penyebab terjadinya gempa bumi ?</p>
                  <form id="soal8">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Tidak tahu"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Memang sudah terjadi"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Karena digoyang :D "/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Patahnya lempengan pada kerak bumi."/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya8" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya8" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal9" class="col-md-12"> <!-- SOAL 9 -->
          <div class="panel-group" id="accordionSoal9" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #9 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian9" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal9" href="#collapse9" aria-expanded="true" aria-controls="collapse9"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading9">
                <div class="panel-body">
                  <p>Makanan dan minuman pokok negara Indonesia adalah ?</p>
                  <form id="soal9">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Bakso dan Teh Manis"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Nasi dan Air Putih"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Pecel dan Kopi"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Sate dan Jus Jeruk"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya9" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelanjutnya9" class="btn btn-info" name="button">Selanjutnya <i class="fas fa-chevron-right"></i></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="containerSoal10" class="col-md-12"> <!-- SOAL 10 -->
          <div class="panel-group" id="accordionSoal10" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                <table style="width:100%;">
                  <tr>
                    <td style="text-align:left;"><span class="badge">Soal #10 / 10 Soal</span></td>
                    <td style="text-align:right;"><span id="waktuUjian10" class="badge"></span></td>
                    <td style="text-align:right;"><a role="button" data-toggle="collapse" data-parent="#accordionSoal10" href="#collapse10" aria-expanded="true" aria-controls="collapse10"><i class="fa fa-times"></i></a></td>
                  </tr>
                </table>
                </h4>
              </div>
              <div id="collapse10" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading10">
                <div class="panel-body">
                  <p>Mengapa Negara +62 dikatakan negara bucin ?</p>
                  <form id="soal10">
                    <input type="radio" class="radio-input" name="Jawaban" value="A" data-labelauty="A. Karena banyak pulaunya"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="B" data-labelauty="B. Karena suka makan bakso"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="C" data-labelauty="C. Memang udah begitu"/>
                    <input type="radio" class="radio-input" name="Jawaban" value="D" data-labelauty="D. Tidak ada jawaban yang benar :v"/>
                  </form><br>
                  <p align="center">
                    <button type="button" id="soalSebelumnya10" class="btn btn-info" name="button"><i class="fas fa-chevron-left"></i> Sebelumnya</button>
                    <button type="button" id="soalSelesai" class="btn btn-success" name="button">Selesai <i class="fas fa-stop"></i></button>
                  </p>
                </div>
              </div>
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
    <script src="../../../dashboardujian/assets/js/jquery-3.5.1.js"></script>
    <script src="../../../dashboardujian/assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/font-awesome/all.js"></script>
    <script src="../../assets/js/jquery-labelauty.js"></script>
    <script src="../../../dashboardujian/assets/alert/js/sweetalert.min.js"></script>
    <script>
    window.onbeforeunload = function(event){
      return confirm();
    };

    $(":radio").labelauty();

    $("#soalSelanjutnya1").click(function(event){
      $('#containerSoal1').hide();
      $('#containerSoal2').show();
    });
    $("#soalSebelumnya2").click(function(event){
      $('#containerSoal2').hide();
      $('#containerSoal1').show();
    });
    $("#soalSelanjutnya2").click(function(event){
      $('#containerSoal2').hide();
      $('#containerSoal3').show();
    });
    $("#soalSebelumnya3").click(function(event){
      $('#containerSoal3').hide();
      $('#containerSoal2').show();
    });
    $("#soalSelanjutnya3").click(function(event){
      $('#containerSoal3').hide();
      $('#containerSoal4').show();
    });
    $("#soalSebelumnya4").click(function(event){
      $('#containerSoal4').hide();
      $('#containerSoal3').show();
    });
    $("#soalSelanjutnya4").click(function(event){
      $('#containerSoal4').hide();
      $('#containerSoal5').show();
    });
    $("#soalSebelumnya5").click(function(event){
      $('#containerSoal5').hide();
      $('#containerSoal4').show();
    });
    $("#soalSelanjutnya5").click(function(event){
      $('#containerSoal5').hide();
      $('#containerSoal6').show();
    });
    $("#soalSebelumnya6").click(function(event){
      $('#containerSoal6').hide();
      $('#containerSoal5').show();
    });
    $("#soalSelanjutnya6").click(function(event){
      $('#containerSoal6').hide();
      $('#containerSoal7').show();
    });
    $("#soalSebelumnya7").click(function(event){
      $('#containerSoal7').hide();
      $('#containerSoal6').show();
    });
    $("#soalSelanjutnya7").click(function(event){
      $('#containerSoal7').hide();
      $('#containerSoal8').show();
    });
    $("#soalSebelumnya8").click(function(event){
      $('#containerSoal8').hide();
      $('#containerSoal7').show();
    });
    $("#soalSelanjutnya8").click(function(event){
      $('#containerSoal8').hide();
      $('#containerSoal9').show();
    });
    $("#soalSebelumnya9").click(function(event){
      $('#containerSoal9').hide();
      $('#containerSoal8').show();
    });
    $("#soalSelanjutnya9").click(function(event){
      $('#containerSoal9').hide();
      $('#containerSoal10').show();
    });
    $("#soalSebelumnya10").click(function(event){
      $('#containerSoal10').hide();
      $('#containerSoal9').show();
    });

    $("#soalSelesai").click(function(event){
      var Nama = '<?php echo $_SESSION['Nama'];?>';
      event.preventDefault();
      var jawabanSoal1 = $('#soal1').find('input:checked').attr("value");
      var jawabanSoal2 = $('#soal2').find('input:checked').attr("value");
      var jawabanSoal3 = $('#soal3').find('input:checked').attr("value");
      var jawabanSoal4 = $('#soal4').find('input:checked').attr("value");
      var jawabanSoal5 = $('#soal5').find('input:checked').attr("value");
      var jawabanSoal6 = $('#soal6').find('input:checked').attr("value");
      var jawabanSoal7 = $('#soal7').find('input:checked').attr("value");
      var jawabanSoal8 = $('#soal8').find('input:checked').attr("value");
      var jawabanSoal9 = $('#soal9').find('input:checked').attr("value");
      var jawabanSoal10 = $('#soal10').find('input:checked').attr("value");
      swal({
        title: 'Yakin Menyelesaikan Ujian ?',
        text: 'Harap Periksa Kembali Jawaban Kamu...',
        type: 'warning',
        confirmButtonColor: '#0066ff',
        animation: false,
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
        closeOnConfirm: false
      },
      function() {
        $.ajax({
          type: 'POST',
          url: '../process.php',
          data: {
            jawabanSoal1: jawabanSoal1,
            jawabanSoal2: jawabanSoal2,
            jawabanSoal3: jawabanSoal3,
            jawabanSoal4: jawabanSoal4,
            jawabanSoal5: jawabanSoal5,
            jawabanSoal6: jawabanSoal6,
            jawabanSoal7: jawabanSoal7,
            jawabanSoal8: jawabanSoal8,
            jawabanSoal9: jawabanSoal9,
            jawabanSoal10: jawabanSoal10
          },
          success: function(data) {
            window.onbeforeunload = null;
            setTimeout(function() {
                window.location.href = "../../../dashboardujian/";
            },100);
          },
          error: function(data){
            alert("Gagal Menyelesaikan Ujian !");
          }
        });
      });
    });

    //Countdown Durasi Ujian
    var countDownDate2 = new Date("June 22, 2025 14:35:00").getTime();
    var d = setInterval(function() {
      var now2 = new Date().getTime();
      var distance2 = countDownDate2 - now2;
      var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
      var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);
      $('#waktuUjian1,#waktuUjian2,#waktuUjian3,#waktuUjian4,#waktuUjian5,#waktuUjian6,#waktuUjian7,#waktuUjian8,#waktuUjian9,#waktuUjian10').html("Waktu Ujian : "+hours2 + ":" + minutes2 + ":" + seconds2);
      if (distance2 < 0) {
        clearInterval(d);
        alert("Waktu Ujian Telah Selesai !");
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
        window.onbeforeunload = null;
        setTimeout(function() {
          window.location.href = "../../../dashboardujian/server-side-dashboard/logout.php";
        },100);
      });
    });

    $("#dataLengkap").click(function(){
      $('#formModal').modal("show");
    });
    </script>
  </body>
</html>
