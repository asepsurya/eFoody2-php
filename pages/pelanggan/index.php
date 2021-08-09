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
            <h1 class="m-0"><i class="fa fa-store"></i>  Pelanggan</h1>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#input-modal"><i class="fas fa-plus"></i>  Tambah Data </button>
                        <button type="button" class="btn btn-default"><i class="far fa-file-pdf"></i> Exsport Data</button>
                        
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
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                    <th></th>
                      <th># ID</th>
                      <th>Nama Lengkap</th>
                      <th>Telepon</th>
                      
                      <th>Email</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php  
                  $no=0;        
                  $username=$_SESSION['username']; 
$myquery = "SELECT * FROM tbl_customer ";
$myresult = mysqli_query($koneksi, $myquery);
while($row = mysqli_fetch_assoc($myresult)){
  $no++;
echo'
                    <tr data-widget="expandable-table" aria-expanded="false">
                    <td>
                    <div class="btn-group ">
                       <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#edit-modal'.$row['id_customer'].'">Edit</button>
                      <a href="action/act_delete_pelanggan.php?id_pelanggan='.$row['id_customer'].'"> <button type="button" class="btn btn-default btn-sm"><i class=" nav-ico fas fa-trash"></i></button></a>
                       
                     </div>
                   </td>
                      <td>'.$row['id_customer'].'</td>
                      <td>'.$row['nm_customer'].'</td>
                      <td>'.$row['no_kontak'].'</td>
                     
                      <td>'.$row['email'].'</td>
                     
                    </tr>
                    <tr class="expandable-body">
                    <div class="card-body table-responsive p-0">
                      <td colspan="6" class="col-1">
                        
                        <div class="card card-primary card-outline">
                          <div class="card-header">
                            <h3 class="card-title"><b>Rincian Produk</b></h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body p-0">
                            <table class="table table-sm">
                              <thead>
                                <tr>
                                  <th style="width: 10px">#</th>
                                  <th style="width: 100px">Foto</th>
                                  <th style="width: 200px">Alamat Lengkap</th>
                                  
                                  <th style="width: 150px">Jenis Kategori </th>
                                  <th style="width: 100px">Foto</th>
                                  <th>Deskripsi </th>
                                </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>'.$no.'</td>
                                <td><img src="../login/img/'.$row['gambar'].'" width="100"></td>
                                <td>$supplier</td>
      
                              <td>$kategori</td>
                              <td>
                                <button type="button" class="btn btn-default" data-toggle="modal">
                                 Gambar
                               </button>
                             </td>
                             <td style="width: 100px">asda</td>
                           </tr>
                           
                         </tbody>
                       </table>
                     </div>
                     <!-- /.card-body -->
                   </div>
                   
                 </tbody>
               </td>
               
             </div>';
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
<!-- Modal -->
<div class="modal fade" id="input-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="action/act_input_pelanggan.php" method="POST">
        <div class="form-group">
          <?php
$query = mysqli_query($koneksi, "SELECT max(id_customer) as kodeTerbesar FROM tbl_customer");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "625";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>
          <label> ID </label>
          <input type="text" class="form-control form-control-border" readOnly name="id_pelanggan" placeholder="ID Pelanggan" required value="<?php echo $kodeBarang ?>">
        </div>
        <div class="form-group">
          <label> Nama Lengkap</label>
          <input type="text" class="form-control form-control-border" name="nm_pelanggan" placeholder="Nama Lengkap" required>
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
                </div><br>
                <div class="form-group">
                  <label>Level </label>
                  <select class="form-control" name="level">
                    <option value="1">01. Admin</option>
                    <option value="2">02. konsumen</option>
                  </select>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
$myquery2 = "SELECT * FROM tbl_customer";
$myresult2 = mysqli_query($koneksi, $myquery2);
while($row2 = mysqli_fetch_assoc($myresult2)){?>
<div class="modal fade" id="edit-modal<?php echo $row2['id_customer'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="action/act_edit_pelanggan.php" method="POST">
        <div class="form-group">
          <label> ID </label>
          <input type="text" class="form-control form-control-border" readOnly name="id_pelanggan" placeholder="ID Pelanggan" required value="<?php echo $row2['id_customer'] ?>">
        </div>
        <div class="form-group">
          <label> Nama Lengkap</label>
          <input type="text" class="form-control form-control-border" name="nm_pelanggan" placeholder="Nama Lengkap" required value="<?php echo $row2['nm_customer'] ?>">
        </div>
        <div class="form-group">
          <label>Alamat Lengkap</label>
          <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required><?php echo $row2['alamat_customer'] ?></textarea>
        </div>
        <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email" name="email" required value="<?php echo $row2['email'] ?>">
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control" placeholder="Nomor Telepon" name="telp" required value="<?php echo $row2['no_kontak'] ?>">
                </div><br>
                <div class="form-group">
                  <label>Level </label>
                  <select class="form-control" name="level">
                    <option value="1">01. Admin</option>
                    <option value="2">02. konsumen</option>
                  </select>
        </div>
      </div> 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
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
