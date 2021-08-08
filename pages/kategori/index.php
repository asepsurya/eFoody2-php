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
            <h1 class="m-0"><i class=" fa fa-boxes"></i> Kategori Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
    <!-- Main content -->
    <div class="content">
    <div class="card card-primary card-outline">
              <div class="card-header">
               <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button></h3>
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
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 10px"></th>
                      <th style="width: 10px">#</th>
                      <th>Jenis Kategori </th>
                      <th></th>
                      <th>Icon SVG</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no=0;
                    $query = "SELECT * FROM tbl_kategori ORDER BY id_kategori DESC";
                    $result = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_assoc($result)){ $no++;
                        echo'
                    <tr>
                        <td>
                        <div class="btn-group ">
                          <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#edit'.$data['id_kategori'].'">Edit</button>
                         <a href="action/act_delete_produk.php?id_kategori='.$data['id_kategori'].'"> <button type="button" class="btn btn-default btn-sm"><i class=" nav-ico fas fa-trash"></i></button></a>
                          
                        </div></td>
                      <td>'.$data['id_kategori'].'</td>
                      <td>'.$data['jenis_kategori'].'</td>
                      <td></td>
                      <td><img src="../../front_page/img/'.$data['gambar'].'" width="20"></td>
                    </tr>
                    <tr>';
                    } ?>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
                  </div>
         </div> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Baru </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="action/act_input_kategori.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label> ID Kategori </label>
            <input type="text" class="form-control form-control-border" name="id_kategori" required>
          </div>
          <div class="form-group">
            <label> Jenis Kategori </label>
            <input type="text" class="form-control form-control-border" name="jenis_kategori" required>
          </div>
            <div class="form-group">
            <label> Icon </label>
            <div class="custom-file">
                      <input type="file" class="form-control custom-file-input" id="customFile" name="foto">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>    
            </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" class="btn btn-primary btn-block" >Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<?php           
$myquery = "SELECT * FROM tbl_kategori ORDER BY id_kategori DESC";
$myresult = mysqli_query($koneksi, $myquery);
while($row = mysqli_fetch_assoc($myresult)){
?>
<div class="modal fade" id="edit<?php echo $row['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="action/act_update_kategori.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label> ID Kategori </label>
            <input type="text" class="form-control form-control-border" name="id_kategori"  value="<?php echo $row['id_kategori'] ?>">
          </div>
          <div class="form-group">
            <label> Jenis Kategori </label>
            <input type="text" class="form-control form-control-border" name="jenis_kategori" value="<?php echo $row['jenis_kategori'] ?>">
          </div>
            <div class="form-group">
            <label> Icon </label>
            <input type="file" class="form-control" name="foto">    
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block" >Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
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
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<?php include '../../asset/alert.php' ?>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
