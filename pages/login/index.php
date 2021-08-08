<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img alt="#" src="../../logo.png" class="img-fluid item-img w-50">
    </div>
    <div class="card-body">
  
      <form action="action/act_check" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email atau Nomor Telepon" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control form-password" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" class="form-checkbox">
              <label for="remember">
               <small>Tampilkan Password</small>
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div>
      <div class="social-auth-links text-center mt-2 mb-3">
        <Button type ="submit" class="btn btn-block btn-primary">
       Masuk
          </button>
      </form>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="forgot-password.html">Lupa Password?</a>
      </p>
      <p class="mb-0">
        <a href="register.php?pesan" class="text-center">Daftar Pengguna Baru</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <br>
  <center><a href="../../front_page/home">Kembali ke halaman Utama</a></center>
  <!-- /.card -->
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- /.login-box -->

<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
  //toast
</script>
<?php include '../../asset/alert.php' ?>
</body>
</html>
