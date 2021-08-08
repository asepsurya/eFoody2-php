<?php if(isset($_GET['pesan'])){ ?>
<?php if($_GET['pesan'] == 'login_berhasil'){ ?>
    <script>
      toastr.success('Login Berhasil..')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'sudah_ada'){ ?>
    <script>
      toastr.warning('Data sudah Ada ! ')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'gagal_login'){ ?>
    <script>
      toastr.error('Login Gagal..!! Mohon Periksa kembali data Anda...!')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'invalid'){ ?>
    <script>
      toastr.error('Anda Harus Login Terlebih Dahulu...')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'tidaksama'){ ?>
    <script>
      toastr.warning('Password yang anda inputkan tidak sama..')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'tambah'){ ?>
    <script>
      toastr.success('Data Berhasil Disimpan')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'tambah_gagal'){ ?>
    <script>
      toastr.error('Data gagal di Simpan')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'ubah'){ ?>
    <script>
      toastr.success('Data berhasil diubah')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'ubah_gagal'){ ?>
    <script>
      toastr.error('Data gagal diubah')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'hapus'){ ?>
    <script>
      toastr.success('Data Berhasil dihapus.')
    </script>
  <?php } ?>
  <?php if($_GET['pesan'] == 'hapus_gagal'){ ?>
    <script>
      toastr.error('Data Gagal di hapus')
    </script>
  <?php } }?>