 <!-- Sidebar -->
 
 <div class="sidebar">
   <?php
   
    include 'koneksi.php';
    $username = $_SESSION['username'];
    $query = "SELECT * FROM tbl_customer where email='$username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
      echo'
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://amzsummits.com/wp-content/uploads/2019/05/Ferry-Vermeulen.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">'.$data['nm_customer'].'</a>
        </div>
      </div>';
 ?>
      <!-- SidebarSearch Form -->
      <div id="topheader">
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="/eFoody2/pages/starter" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Data Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/eFoody2/pages/data_produk/index" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management Stok</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Data Supplier
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Data Driver
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Database Pelanggan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
</div>
    <!-- /.sidebar -->
    <script> 
    $( '#topheader .sidebar .nav-item' ).on( 'click', function () {
	$( '#topheader .sidebar .nav-item' ).find( 'nav-link.active nav-item.menu-close' ).removeClass( 'active menu-close' );
	$( this ).parent( 'nav-link nav-item' ).addClass( 'active menu-close' );
});
</script>