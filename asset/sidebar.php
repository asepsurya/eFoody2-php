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
          <img src="/eFoody2/pages/login/img/'.$data['gambar'].'" class="img-circle elevation-2" alt="User Image">
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
               <li class="nav-header">Kunjungi Halaman Depan</li>
               <li class="nav-item">
            <a href="/eFoody2/front_page/home" class="nav-link" target="_blank" >
              <i class="nav-icon fab fa-staylinked"></i>
              <p>
                Websiteku
              </p>
            </a>
          </li>
          <li class="nav-header">Main Menu</li>
               <li class="nav-item">
            <a href="/eFoody2/pages/starter" class="nav-link">
           
              <i class="nav-icon fas fa-tachometer-alt"></i>
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
                <a href="/eFoody2/pages/kategori/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Produk</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/eFoody2/pages/supplier/index" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Transaksi <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/eFoody2/pages/pelanggan/index" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Database Pelanggan
              </p>
            </a>
          </li>

          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan Toko
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/eFoody2/pages/data_produk/index" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alamat Toko</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/eFoody2/pages/iframe/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Database</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Main Menu</li>
          <li class="nav-item">
                <a href="/eFoody2/pages/kategori/index" class="nav-link">
                  <i class="far fa fa-book nav-icon"></i>
                  <p>Laporan Transaksi</p>
                </a>
              </li>
              
              
              
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
</div>
  