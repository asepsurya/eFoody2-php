<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php session_start() ?>
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
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="display: block;">
          <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th style="width: 100px"></th>
                      <th style="width: 10px">#</th>
                      <th>Jenis Kategori </th>
                      <th style="width: 200px">ID</th>
                      <th style="width: 100px">Icon SVG</th>
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
                        <div class="btn-group " role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-primary btn-sm"><i class="nav-ico fas fa-edit" data-toggle="modal" data-target="#edit'.$data['id_kategori'].'"></i></button>
                         <a href="action/act_delete_produk.php?id_kategori='.$data['id_kategori'].'"> <button type="button" class="btn btn-danger btn-sm"><i class=" nav-ico fas fa-trash"></i></button></a>
                          
                        </div></th>
                      <td>'.$no.'</td>
                      <td>'.$data['jenis_kategori'].'</td>
                      <td>'.$data['id_kategori'].'</td>
                      <td><center><img src="../../front_page/img/'.$data['gambar'].'" width="50"></center></td>
                    </tr>
                    <tr>';
                    } ?>
                     
                  </tbody>
                </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: block;">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
  <div class="modal-dialog modal-sm" role="document">
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
            <input type="text" class="form-control" name="id_kategori"  value="<?php echo $row['id_kategori'] ?>">
          </div>
          <div class="form-group">
            <label> Jenis Kategori </label>
            <input type="text" class="form-control" name="jenis_kategori" value="<?php echo $row['jenis_kategori'] ?>">
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