<?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "tambah_keranjang"){?>
      <script> 
      swal("Data berhasil ditambahkan ke keranjang anda", "", "success");
      </script>
    <?php }?>
    <?php 
    if($_GET['pesan'] == "delete_keranjang"){?>
      <script> 
      swal("Data berhasil dihapus", "", "danger");
      </script>
    <?php }?>
    ?>
    <?php 
    if($_GET['pesan'] == "ubah"){?>
      <script> 
      swal("Data berhasil diubah", "", "success");
      </script>
    <?php }?>
    ?>
    <?php 
    if($_GET['pesan'] == "simpan"){?>
      <script> 
      swal("Data berhasil ubah", "", "success");
      </script>
    <?php }?>
    ?>
  <?php } ?>