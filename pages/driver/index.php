<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php session_start() ?>
  <?php
  if (empty($_SESSION["username"])) {
  # code...
  header("Location:../login/index.php?pesan=invalid");
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Starter</title>
<!-- summernote -->
<link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
<!-- dropzonejs -->
<link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include '../../asset/navbar.php' ?>
    <?php include '../../asset/koneksi.php' ?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
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
              <h1 class="m-0"><i class="fas fa-motorcycle"></i> Database Driver </h1>
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
          <th style="width: 10px">#</th>
          <th>ID Driver</th>
          <th>Nama Driver</th>
          <th>Alamat</th>
          <th>No kontak</th>
          <th></th>
      </tr>
  </thead>
  <tbody>
    <?php
    $no=0;
    $query = "SELECT * FROM tbl_driver ";
    $result = mysqli_query($koneksi, $query);
    while($data = mysqli_fetch_assoc($result)){ $no++;
    
    echo'
    <tr data-widget="expandable-table" aria-expanded="false">
      <td><div class="btn-group ">
          <button type="button" class="btn btn-default btn-sm btn-flat" data-toggle="modal" data-target="#modal-edit"> Edit </button>
          <a href="action/act_delete_produk.php?id_produk='.$data['id_driver'].'"><button type="button" class="btn btn-default btn-sm btn-flat" ><i class="far fa-trash-alt"></i></button></a>
          
      </div></td>
      <td>'.$data['id_driver'].'</td>
      <td>'.$data['nama'].'</td>
      <td>'.$data['alamat'].'</td>
      <td>'.$data['no_telp'].'</td>
      <td></td>
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
                  <th style="width: 100px">Tanggal Input</th>
                  <th style="width: 200px">Merek Motor</th>
                  
                  <th style="width: 150px">Plat Nomor </th>
                  <th style="width: 100px">Foto</th>
                  <th>status</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>'.$no.'</td>
                <td>'.$data['tanggal'].'. </td>
                <td>'.$data['merek_motor'].'</td>
                <td>'.$data['plat_nomor'].'</td>
                
                <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#a">
                     Gambar
                 </button>
             </td>
             <td style="width: 100px"></td>
         </tr>
         
     </tbody>
 </table>
</div>
<!-- /.card-body -->
</div>

</tbody>
</td>

</div>
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
      <form action="action/act_input_driver.php" method="POST">
        <div class="form-group">
          <?php
          $query = mysqli_query($koneksi, "SELECT max(id_driver) as kodeTerbesar FROM tbl_driver");
          $data = mysqli_fetch_array($query);
          $kodeBarang = $data['kodeTerbesar'];
          $urutan = (int) substr($kodeBarang, 3, 3);
          $urutan++;
          $huruf = "drv";
          $kodeBarang = $huruf . sprintf("%03s", $urutan);
          ?>
          <label> ID </label>
          <input type="text" class="form-control form-control-border" readOnly name="id_driver" placeholder="ID Pelanggan" required value="<?php echo $kodeBarang ?>">
      </div>
      <div class="form-group">
          <label> Nama Lengkap</label>
          <input type="text" class="form-control form-control-border" name="nm_driver" placeholder="Nama Lengkap" required>
      </div>
      <div class="form-group">
          <label>Alamat Lengkap</label>
          <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required></textarea>
      </div>
      <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="number" class="form-control" placeholder="Nomor Telepon" name="telp" required>
    </div><br>
    
    <label>Nomor Plat Motor</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Z</span>
    </div>
    <input type="text" class="form-control" placeholder="Z 554112 LA" name="no_plat" required>
</div>
<div class="form-group">
  <label> Merek Motor</label>
  <input type="text" class="form-control form-control-border" name="merek" placeholder="merek" required>
</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
</form>
</div>
</div>
</div>
</div>
<!-- /.modal -->
<!-- modal gambar -->
<!-- Modal -->
<?php
$query = "SELECT * FROM tbl_produk ";
$result = mysqli_query($koneksi, $query);
while($data = mysqli_fetch_assoc($result)){
?>
<div class="modal fade" id="a<?php echo $data['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preview </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
   
    <center><img alt="gambar" src="upload/<?php echo $data['gambar'] ?>" width="450"></center>
    
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<?php  }?>
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
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<script src="../../plugins/toastr/toastr.min.js"></script>
<?php include '../../asset/alert.php' ?>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
  })
    

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
  });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
    }
})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
},
function (start, end) {
  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
}
)

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
  })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
  })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
  })

})
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
})

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
})

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
})

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
})

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
})

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
}
document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
}
  // DropzoneJS Demo Code End
</script>
<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }       
}
}
</script>

</body>
</html>
