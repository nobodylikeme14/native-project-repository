<?php
  session_set_cookie_params(0);
  session_start();
  if(isset($_SESSION['Nama'])){
    header("Location: dashboardujian/");
  }else{}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Ujian Online</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="dashboardujian/assets/img/favicon.png" rel="shortcut icon">
  </head>
    <body class="bg-dark">
      <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
          <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Ujian Online</h3></div>
                    <div class="card-body">
                      <form>
                        <div id="alert" style="display:none;" class="alert" role="alert"></div>
                        <div class="form-group">
                          <label class="small mb-1" for="inputEmail">Email</label>
                          <input class="form-control" id="inputEmail" type="email" placeholder="Masukkan Email...">
                          <div id="alert-email" class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="inputPassword">Password</label>
                          <input class="form-control" id="inputPassword" type="password" placeholder="Masukkan Password...">
                          <div id="alert-password" class="invalid-feedback"></div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <p align="right"><button type="button" class="btn btn-primary" id="Login"><i class="fas fa-sign-in-alt"></i> Login</button></p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
      <script src="assets/js/font-awesome.js" charset="utf-8"></script>
      <script src="assets/js/jquery-3.5.1.js" charset="utf-8"></script>
      <script type="text/javascript">
          $(document).on("click","#Login", function(){
            var Email = $("#inputEmail").val();
            var Password = $("#inputPassword").val();
            if (Email == "" && Password == "") {
              $("#alert-email").html("Email Belum Diisi !");
              $("#alert-password").html("Password Belum Diisi !");
              $("#alert-email").show(500,function(){
                setTimeout(function() {
                  $("#alert-email").hide(500);
                },1000);
              });
              $("#alert-password").show(500,function(){
                setTimeout(function() {
                  $("#alert-password").hide(500);
                },1000);
              });
              return true;
            }else{ $("#alert-email").hide(500); $("#alert-password").hide(500); }
            if (Email == "") {
              $("#alert-email").html("Email Belum Diisi !");
              $("#alert-email").show(500,function(){
                setTimeout(function() {
                  $("#alert-email").hide(500);
                },1000);
              });
              return true;
            }else{ $("#alert-email").hide(500); }
            if(Password == ""){
              $("#alert-password").html("Password Belum Diisi !");
              $("#alert-password").show(500,function(){
                setTimeout(function() {
                  $("#alert-password").hide(500);
                },1000);
              });
              return true;
            }else{ $("#alert-password").hide(500); }
            $.ajax({
              url: 'process/auth.php',
              type: 'POST',
              dataType: 'JSON',
              data: {
                Email: Email,
                Password: Password
              },
              success: function(data) {
                $("#alert").removeClass();
                $("#alert").addClass(data.info[0]);
                $("#alert").show(500,function(){
                  setTimeout(function() {
                    $("#alert").hide(500);
                  },3000);
                });
                $("#alert").html(data.info[1]);
                setTimeout(function() {
                  window.location.href = data.info[2];
                },800);
              }
            });
          });
        </script>
    </body>
</html>
