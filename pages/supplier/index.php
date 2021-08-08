<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php session_start() ?>
<?php
  if (empty($_SESSION["username"])) {
   # code...
   header("Location:../login/index.php?pesan=invalid");
  }
 ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include '../../asset/navbar.php' ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light"> <center><img src="../../logo_white.png" alt="AdminLTE Logo" width="150"></span> </center>
    </a>
    <?php include '../../asset/sidebar.php' ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fa fa-store"></i>  Supplier</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">tarter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <div class="card card-primary card-outline">
              <div class="card-header">
              <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i>  Tambah Data </button>
                        <button type="button" class="btn btn-default"><i class="far fa-file-pdf"></i> Exsport Data</button>
                        <button type="button" class="btn btn-default">Right</button>
                      </div>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th></th>
                      <th># ID</th>
                      <th>Nama Supplier</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>@Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php      
                  $no=0;     
$myquery = "SELECT * FROM tbl_supplier";
$myresult = mysqli_query($koneksi, $myquery);
while($row = mysqli_fetch_assoc($myresult)){$no++;
echo'
                    <tr>
                    <td>'.$no.'</td>
                      <td>'.$row['id_supplier'].'</td>
                      <td>'.$row['nama_supplier'].'</td>
                      <td>'.$row['no_telp_supplier'].'</td>
                      <td>'.$row['alamat'].'</td>
                      <td>'.$row['email'].'</td>
                      <td>
                      <div class="btn-group ">
                      <div class="btn-group ">
                      <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-edit'.$row['id_supplier'].'">Edit</button>
                     <a href="action/act_delete_supplier.php?id_supplier='.$row['id_supplier'].'"> <button type="button" class="btn btn-default btn-sm"><i class=" nav-ico fas fa-trash"></i></button></a>
                    </div>
                      </div>
                      </td>
                    </tr>';
 } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
$query12 = mysqli_query($koneksi, "SELECT max(id_supplier) as kodeTerbesar FROM tbl_supplier");
$data12= mysqli_fetch_array($query12);
$kodeBarang = $data12['kodeTerbesar'];

$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++; 
$huruf = "25";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
 
?>
      <div class="modal-body">
      <form action="action/act_input_supplier.php" method="POST">
        <div class="form-group">
          <label> ID Supplier </label>
          <input type="text" class="form-control form-control-border" readOnly name="id_supplier" placeholder="ID Supplier" required value="<?php echo $kodeBarang ?>">
        </div>
        <div class="form-group">
          <label> Nama Supplier</label>
          <input type="text" class="form-control form-control-border" name="nm_supplier" placeholder="Nama Supplier" required>
        </div>
        <div class="form-group">
          <label>Alamat Lengkap</label>
          <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required></textarea>
        </div>
        <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control" placeholder="Nomor Telepon" name="telp" required>
                </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $myquery2 = "SELECT * FROM tbl_supplier";
$myresult2 = mysqli_query($koneksi, $myquery2);
while($data = mysqli_fetch_assoc($myresult2)){ ?>
<!-- Modal -->
<div class="modal fade" id="modal-edit<?php echo $data['id_supplier'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="action/act_update_supplier.php" method="POST">
        <div class="form-group">
          <label> ID Supplier </label>
          <input type="text" class="form-control form-control-border" readOnly name="id_supplier" placeholder="ID Supplier" required value="<?php echo $data['id_supplier'] ?>">
        </div>
        <div class="form-group">
          <label> Nama Supplier</label>
          <input type="text" class="form-control form-control-border" name="nm_supplier" placeholder="Nama Supplier" required value="<?php echo $data['nama_supplier'] ?>">
        </div>
        <div class="form-group">
          <label>Alamat Lengkap</label>
          <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required><?php echo $data['alamat'] ?></textarea>
        </div>
        <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email" name="email" required value="<?php echo $data['email'] ?>">
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control" placeholder="Nomor Telepon" name="telp" required value="<?php echo $data['no_telp_supplier'] ?>">
                </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Save changes</button>
        </form>

      </div>
    </div>
  </div>
</div>
<?php } ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>
<?php include '../../asset/alert.php' ?>
</body>
</html>
