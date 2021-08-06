<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT Testing by M.Al Fauzy</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/custom-styles.css" rel="stylesheet">
    <link href="assets/css/datatables.css" rel="stylesheet">
    <link href="assets/alert/css/sweetalert.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
          <button type="button" style="background-color:#F36A5A;" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><strong><i class="icon fa fa-users"></i> CBT Test</strong></a>
          <div id="sideNav" href="">
            <i class="fa fa-bars icon"></i>
          </div>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" style="color:black;" data-toggle="dropdown" href="javascript:void(0);" aria-expanded="false">
              Hai, <?php echo $_SESSION['Nama'];?> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="javascript:void(0);" id="profilSiswa"><i class="fa fa-user fa-fw"></i> Profil Siswa</a></li>
              <li><a href="javascript:void(0);" id="gantiPassword"><i class="fa fa-gear fa-fw"></i> Ganti Password</a></li>
              <li class="divider"></li>
              <li><a id="Logout" href="javascript:void(0);"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <a class="active-menu" href=""><i class="fa fa-dashboard"></i> Dashboard List Ujian</a>
            </li>
          </ul>
        </div>
      </nav>
		  <div id="page-wrapper">
		      <div class="header">
            <h1 class="page-header">
              Dashboard Ujian<small>Selamat Datang, <?php echo $_SESSION['Nama'];?></small>
            </h1>
						<ol class="breadcrumb">
              <li>Home</li>
              <li class="active">Dashboard List Ujian</li>
            </ol>
          </div>
          <div id="page-inner">
            <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="board">
                  <div class="panel panel-primary">
                    <div class="number">
                      <h3>
                        <h3 style="font-size:23px;">Kelas</h3>
                        <p style="font-size:15px;"><?php echo $_SESSION['Kelas'];?></p>
                      </h3>
                    </div>
                    <div class="icon">
                      <i class="fa fa-building-o fa-5x red"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="board">
                  <div class="panel panel-primary">
                    <div class="number">
                      <h3>
                        <h3 style="font-size:23px;">Jurusan</h3>
                        <p style="font-size:15px;"><?php echo $_SESSION['Jurusan'];?></p>
                      </h3>
                    </div>
                    <div class="icon">
                      <i class="fa fa-sitemap fa-5x green"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="board">
                  <div class="panel panel-primary">
                    <div class="number">
                      <h3>
                        <h3 style="font-size:23px;">Tanggal & Jam</h3>
                        <table><tr>
                          <td><p style="font-size:15px;" id="hariTanggal"></p></td>
                          <td width="5"></td>
                          <td><p style="font-size:15px;" id="Jam"></p></td>
                        </tr></table>
                      </h3>
                    </div>
                    <div class="icon">
                      <i class="fa fa-calendar fa-5x blue"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <p align="right"><button class="btn btn-default btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-times"></i></button>
                <div class="collapse" id="collapseExample">
                  <div class="well">
                    <button type="button" class="btn btn-info btn-sm" id="reloadTable" name="button"><i class="fa fa-refresh"></i> Refresh Tabel</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="list-ujian-container"></div>
              </div>
            </div>
          <footer class="footer">
            <p>Copyright 2020 CBT Testing - Made with &hearts; by <a href="mailto:malfauzy99@gmail.com"> M.Al Fauzy.</a> Template by: <a href="http://webthemez.com">WebThemez.com</a></p>
          </footer>
        </div>
      </div>
    </div>
    <div class="modal fade" data-backdrop="static" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modalTitle"></h4>
          </div>
          <div class="modal-body">
            <div id="alert" style="display:none;" class="alert" role="alert"></div>
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
            <div id="modalGantiPassword">
              <div class="form-group">
                <label for="password1">Password Baru</label>
                <input type="password" class="form-control" id="password1" placeholder="Password Baru...">
                <div id="alert-password1"></div>
              </div>
              <div class="form-group">
                <label for="password2">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="password2" placeholder="Konfirmasi Password Baru...">
                <div id="alert-password2"></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-success" id="ubahPassword"> Ubah Password</button>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/datatables.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
    <script src="assets/alert/js/sweetalert.min.js"></script>
    <script src="assets/alert/js/qunit-1.18.0.js"></script>
    <script type="text/javascript">
      $(function(){
        window.setTimeout("tanggal()", 600000);
        startTime();
        tanggal();
        listUjian();
      });

      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        $("#Jam").html(h + ":" + m + ":" + s);
        var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
      }

      function tanggal() {
        $('#hariTanggal').load("server-side-dashboard/tanggal.php");
      }

      function listUjian() {
        $('#list-ujian-container').load("server-side-dashboard/tabel-list-ujian.php");
      }

      $(document).on("click", "#reloadTable", function() {
        listUjian();
      });

      $(document).on("click", "#profilSiswa", function() {
        $('#formModal').find('#modalTitle').html("Profil Siswa");
        $('#formModal').find('#modalGantiPassword').hide();
        $('#formModal').find('#modalProfil').show();
        $('#ubahPassword').hide();
        $('#formModal').modal("show");
      });

      $(document).on("click", "#gantiPassword", function() {
        $('#formModal').find('#modalTitle').html("Ganti Password Akun");
        $('#formModal').find('#modalGantiPassword').show();
        $('#formModal').find('#modalProfil').hide();
        $('#formModal').find('input').val('');
        $('#ubahPassword').show();
        $('#formModal').modal("show");
      });

      $(document).on("click", "#ubahPassword", function() {
        var Password1 = $('#password1').val();
        var Password2 = $('#password2').val();
        if (Password1 == "" && Password2 == "") {
          $("#alert-password1").html("Password Baru Belum Diisi !");
          $("#alert-password2").html("Konfirmasi Password Baru Belum Diisi !");
          $("#alert-password1").show(500,function(){
            setTimeout(function() {
              $("#alert-password1").hide(500);
            },2000);
          });
          $("#alert-password2").show(500,function(){
            setTimeout(function() {
              $("#alert-password2").hide(500);
            },2000);
          });
          return true;
        }
        if (Password1 == "") {
          $("#alert-password1").html("Password Baru Belum Diisi !");
          $("#alert-password1").show(500,function(){
            setTimeout(function() {
              $("#alert-password1").hide(500);
            },2000);
          });
          return true;
        }
        if (Password2 == "") {
          $("#alert-password2").html("Konfirmasi Password Baru Belum Diisi !");
          $("#alert-password2").show(500,function(){
            setTimeout(function() {
              $("#alert-password2").hide(500);
            },2000);
          });
          return true;
        }
        if (Password1 != Password2) {
          $("#alert").removeClass();
          $("#alert").addClass("alert alert-danger");
          $("#alert").html("Maaf, Password Tidak Sama !");
          $("#alert").show(500,function(){
            setTimeout(function() {
              $("#alert").hide(500);
            },2000);
          });
        }else{
        $.ajax({
          url: 'server-side-dashboard/update-password.php',
          type: 'POST',
          data: {
            Password1: Password1
          },
          dataType: 'JSON',
          success: function(data){
            $("#alert").removeClass();
            $("#alert").addClass(data.info[0]);
            $("#alert").html(data.info[1]);
            $("#alert").show(500,function(){
              setTimeout(function() {
                $("#alert").hide(500);
                $("#formModal").modal("hide");
              },2000);
            });
          }
        });
        }
      });

      $(document).on("click", "#Logout", function() {
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
            window.location.href = "server-side-dashboard/logout.php";
          },100);
        });
      });
    </script>
  </body>
</html>
