<!DOCTYPE html>
<html lang="en">
<?php include '../asset/koneksi.php';  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Askbootstrap">
  <meta name="author" content="Askbootstrap">
  <link rel="icon" type="image/png" href="img/fav.png">
  <title>Swiggiweb - Online Food Ordering Website Template</title>
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
  <!-- Feather Icon-->
  <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Sidebar CSS -->
  <link href="vendor/sidebar/demo.css" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="fixed-bottom-bar">
  <?php include 'asset/header.php'; ?>
  
  <div class="osahan-home-page">
    <div class="bg-primary p-3 d-none">
      <div class="text-white">
        <div class="title d-flex align-items-center">
          <a class="toggle" href="#">
            <span></span>
          </a>
          <h4 class="font-weight-bold m-0 pl-5">Browse</h4>
          <a class="text-white font-weight-bold ml-auto" data-toggle="modal" data-target="#exampleModal" href="#">Filter</a>
        </div>
      </div>
      <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
        <div class="input-group-prepend">
          <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
        </div>
        <input type="text" class="shadow-none border-0 form-control" placeholder="Search for restaurants or dishes">
      </div>
    </div>
    <!-- Filters -->
    <div class="container">
      <div class="cat-slider">
        <?php
        $query = "SELECT * FROM tbl_kategori ";
        $result = mysqli_query($koneksi, $query);
        while($data = mysqli_fetch_assoc($result)){
        echo'
        <div class="cat-item px-1 py-3">
          <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="search.php?id_kategori='.$data['id_kategori'].'">
            <img alt="#" src="img/'.$data['gambar'].'" class="img-fluid mb-2">
            <p class="m-0 small">'.$data['jenis_kategori'].'</p>
          </a>
        </div>';
      }
      ?>
      
    </div>
  </div>
  <!-- offer sectio slider -->
  <div class="bg-white">
    <div class="container">
      <div class="offer-slider">
        <div class="cat-item px-1 py-3">
          <a class="d-block text-center shadow-sm" href="trending.html">
            <img alt="#" src="img/pro1.jpg" class="img-fluid rounded">
          </a>
        </div>
        <div class="cat-item px-1 py-3">
          <a class="d-block text-center shadow-sm" href="trending.html">
            <img alt="#" src="img/pro2.jpg" class="img-fluid rounded">
          </a>
        </div>
        <div class="cat-item px-1 py-3">
          <a class="d-block text-center shadow-sm" href="trending.html">
            <img alt="#" src="img/pro3.jpg" class="img-fluid rounded">
          </a>
        </div>
        <div class="cat-item px-1 py-3">
          <a class="d-block text-center shadow-sm" href="trending.html">
            <img alt="#" src="img/pro4.jpg" class="img-fluid rounded">
          </a>
        </div>
        <div class="cat-item px-1 py-3">
          <a class="d-block text-center shadow-sm" href="trending.html">
            <img alt="#" src="img/pro2.jpg" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    


<center><img src="img/a.jpg" width="500" class="img-fluid item-img w-100 rounded overflow-hidden" >  </center>

<!-- Most popular -->
<div class="py-3 title d-flex align-items-center">
  <h5 class="m-0">Rekomendasi</h5>
  <a class="font-weight-bold ml-auto" href="most_popular.html">26 places <i class="feather-chevrons-right"></i></a>
</div>
<!-- Most popular -->
<div class="most_popular">
  <div class="row">
    <?php
    $query = "SELECT tbl_produk.*,tbl_kategori.jenis_kategori FROM tbl_produk,tbl_kategori where tbl_produk.id_kategori = tbl_kategori.id_kategori Limit 8";
    $result = mysqli_query($koneksi, $query);
    while($data = mysqli_fetch_assoc($result)){
        
    ?>
    <div class="col-md-3 pb-3">
      <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
        <div class="list-card-image">
          <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
          <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
          <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
          <a href="restaurant.html">
            <img alt="#" src="../pages/data_produk/upload/<?php echo $data['gambar']; ?>" class="img-fluid item-img w-100">
          </a>
        </div>
        <div class="p-3 position-relative">
          <div class="list-card-body">
            <h6 class="mb-1"><a data-toggle="modal" data-target="#detile" class="text-black"><?php echo $data['jenis_produk'] ?>
            </a>
        </h6>
          <p class="text-gray mb-1 small"><?php echo $data['jenis_kategori'] ?></p>
          
          <p class="text-gray mb-1 rating">
          </p>
          <ul class="rating-stars list-unstyled">
            <li>
              <i class="feather-star star_active"></i>
              <i class="feather-star star_active"></i>
              <i class="feather-star star_active"></i>
              <i class="feather-star "></i>
              <i class="feather-star"></i>
            </li>
          </ul>
          <p></p>
        </div>
        <div class="list-card-badge">
        <b>Rp. <?= number_format($data['harga_produk'],0,".",".")  ?> </b><span class="badge badge-danger">IDR</span> 
        </div><br>
        <?php 
        $tanggal_transaksi = date("d-m-Y") ;
        if (empty($_SESSION['username'])){
          echo'
          <a href="../pages/login/index"><button type="button" class="btn btn-success btn-block btn-flat">Pesan</button></a>';
        }else{
          echo'
          <a href="home_act/add_cart.php?tanggal='.$tanggal_transaksi.'&id_customer='.$_SESSION['id_customer'].'&id_produk='.$data['id_produk'].'&nama_produk='.$data['jenis_produk'].'&harga='.$data['harga_produk'].'"><button type="button" class="btn btn-success btn-block btn-flat">Pesan</button></a>';
        }
        ?>
        </div>
      
    </div>
  </div>
  <?php } ?>
</div>
</div>
<!-- Most sales -->
<div class="pt-2 pb-3 title d-flex align-items-center">
  <h5 class="m-0">Most sales</h5>
  <a class="font-weight-bold ml-auto" href="#">26 places <i class="feather-chevrons-right"></i></a>
</div>
<!-- Most sales -->
<div class="most_sale">
  <div class="row mb-3">
    <div class="col-md-4 mb-3">
      <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
        <div class="list-card-image">
          <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
          <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
          <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
          <a href="restaurant.html">
            <img alt="#" src="img/sales1.png" class="img-fluid item-img w-100">
          </a>
        </div>
        <div class="p-3 position-relative">
          <div class="list-card-body">
            <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
            </a>
          </h6>
          <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
          <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
        </div>
        <div class="list-card-badge">
          <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
      <div class="list-card-image">
        <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
        <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
        <a href="restaurant.html">
          <img alt="#" src="img/sales2.png" class="img-fluid item-img w-100">
        </a>
      </div>
      <div class="p-3 position-relative">
        <div class="list-card-body">
          <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Cuisine</a></h6>
          <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
          <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
        </div>
        <div class="list-card-badge">
          <span class="badge badge-success">OFFER</span> <small>65% off</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
      <div class="list-card-image">
        <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
        <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
        <a href="restaurant.html">
          <img alt="#" src="img/sales3.png" class="img-fluid item-img w-100">
        </a>
      </div>
      <div class="p-3 position-relative">
        <div class="list-card-body">
          <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
          </a>
        </h6>
        <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
      </div>
      <div class="list-card-badge">
        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
  <div class="row">
    <div class="col selected">
      <a href="home.html" class="text-danger small font-weight-bold text-decoration-none">
        <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
        Home
      </a>
    </div>
    <div class="col">
      <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
        <p class="h4 m-0"><i class="feather-map-pin"></i></p>
        Trending
      </a>
    </div>
    <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
      <div class="bg-danger rounded-circle mt-n0 shadow">
        <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
          <i class="feather-shopping-cart"></i>
        </a>
      </div>
    </div>
    <div class="col">
      <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
        <p class="h4 m-0"><i class="feather-heart"></i></p>
        Favorites
      </a>
    </div>
    <div class="col">
      <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
        <p class="h4 m-0"><i class="feather-user"></i></p>
        Profile
      </a>
    </div>
  </div>
</div>
<!-- footer -->
<footer class="section-footer border-top bg-dark">
  <div class="container">
    <section class="footer-top padding-y py-5">
      <div class="row">
        <aside class="col-md-4 footer-about">
          <article class="d-flex pb-3">
            <div><img alt="#" src="img/logo_web.png" class="logo-footer mr-3"></div>
            <div>
              <h6 class="title text-white">About Us</h6>
              <p class="text-muted">Some short text about company like You might remember the Dell computer commercials in which a youth reports.</p>
              <div class="d-flex align-items-center">
                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Facebook" target="_blank" href="#"><i class="feather-facebook"></i></a>
                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Instagram" target="_blank" href="#"><i class="feather-instagram"></i></a>
                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Youtube" target="_blank" href="#"><i class="feather-youtube"></i></a>
                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Twitter" target="_blank" href="#"><i class="feather-twitter"></i></a>
              </div>
            </div>
          </article>
        </aside>
        <aside class="col-sm-3 col-md-2 text-white">
          <h6 class="title">Error Pages</h6>
          <ul class="list-unstyled hov_footer">
            <li> <a href="not-found.html" class="text-muted">Not found</a></li>
            <li> <a href="maintence.html" class="text-muted">Maintence</a></li>
            <li> <a href="coming-soon.html" class="text-muted">Coming Soon</a></li>
          </ul>
        </aside>
        <aside class="col-sm-3 col-md-2 text-white">
          <h6 class="title">Services</h6>
          <ul class="list-unstyled hov_footer">
            <li> <a href="faq.html" class="text-muted">Delivery Support</a></li>
            <li> <a href="contact-us.html" class="text-muted">Contact Us</a></li>
            <li> <a href="terms.html" class="text-muted">Terms of use</a></li>
            <li> <a href="privacy.html" class="text-muted">Privacy policy</a></li>
          </ul>
        </aside>
        <aside class="col-sm-3  col-md-2 text-white">
          <h6 class="title">For users</h6>
          <ul class="list-unstyled hov_footer">
            <li> <a href="login.html" class="text-muted"> User Login </a></li>
            <li> <a href="signup.html" class="text-muted"> User register </a></li>
            <li> <a href="forgot_password.html" class="text-muted"> Forgot Password </a></li>
            <li> <a href="profile.html" class="text-muted"> Account Setting </a></li>
          </ul>
        </aside>
        <aside class="col-sm-3  col-md-2 text-white">
          <h6 class="title">More Pages</h6>
          <ul class="list-unstyled hov_footer">
            <li> <a href="trending.html" class="text-muted"> Trending </a></li>
            <li> <a href="most_popular.html" class="text-muted"> Most popular </a></li>
            <li> <a href="restaurant.html" class="text-muted"> Restaurant Details </a></li>
            <li> <a href="favorites.html" class="text-muted"> Favorites </a></li>
          </ul>
        </aside>
      </div>
      <!-- row.// -->
    </section>
    <!-- footer-top.// -->
    <section class="footer-center border-top padding-y py-5">
      <h6 class="title text-white">Countries</h6>
      <div class="row">
        <aside class="col-sm-2 col-md-2 text-white">
          <ul class="list-unstyled hov_footer">
            <li> <a href="#" class="text-muted">India</a></li>
            <li> <a href="#" class="text-muted">Indonesia</a></li>
            <li> <a href="#" class="text-muted">Ireland</a></li>
            <li> <a href="#" class="text-muted">Italy</a></li>
            <li> <a href="#" class="text-muted">Lebanon</a></li>
          </ul>
        </aside>
        <aside class="col-sm-2 col-md-2 text-white">
          <ul class="list-unstyled hov_footer">
            <li> <a href="#" class="text-muted">Malaysia</a></li>
            <li> <a href="#" class="text-muted">New Zealand</a></li>
            <li> <a href="#" class="text-muted">Philippines</a></li>
            <li> <a href="#" class="text-muted">Poland</a></li>
            <li> <a href="#" class="text-muted">Portugal</a></li>
          </ul>
        </aside>
        <aside class="col-sm-2 col-md-2 text-white">
          <ul class="list-unstyled hov_footer">
            <li> <a href="#" class="text-muted">Australia</a></li>
            <li> <a href="#" class="text-muted">Brasil</a></li>
            <li> <a href="#" class="text-muted">Canada</a></li>
            <li> <a href="#" class="text-muted">Chile</a></li>
            <li> <a href="#" class="text-muted">Czech Republic</a></li>
          </ul>
        </aside>
        <aside class="col-sm-2 col-md-2 text-white">
          <ul class="list-unstyled hov_footer">
            <li> <a href="#" class="text-muted">Turkey</a></li>
            <li> <a href="#" class="text-muted">UAE</a></li>
            <li> <a href="#" class="text-muted">United Kingdom</a></li>
            <li> <a href="#" class="text-muted">United States</a></li>
            <li> <a href="#" class="text-muted">Sri Lanka</a></li>
          </ul>
        </aside>
        <aside class="col-sm-2 col-md-2 text-white">
          <ul class="list-unstyled hov_footer">
            <li> <a href="#" class="text-muted">Qatar</a></li>
            <li> <a href="#" class="text-muted">Singapore</a></li>
            <li> <a href="#" class="text-muted">Slovakia</a></li>
            <li> <a href="#" class="text-muted">South Africa</a></li>
            <li> <a href="#" class="text-muted">Green Land</a></li>
          </ul>
        </aside>
        <aside class="col-sm-2 col-md-2 text-white">
          <ul class="list-unstyled hov_footer">
            <li> <a href="#" class="text-muted">Pakistan</a></li>
            <li> <a href="#" class="text-muted">Bangladesh</a></li>
            <li> <a href="#" class="text-muted">Bhutaan</a></li>
            <li> <a href="#" class="text-muted">Nepal</a></li>
          </ul>
        </aside>
      </div>
      <!-- row.// -->
    </section>
  </div>
  <!-- //container -->
  <section class="footer-copyright border-top py-3 bg-light">
    <div class="container d-flex align-items-center">
      <p class="mb-0"> © 2020 Company All rights reserved </p>
      <p class="text-muted mb-0 ml-auto d-flex align-items-center">
        <a href="#" class="d-block"><img alt="#" src="img/appstore.png" height="40"></a>
        <a href="#" class="d-block ml-3"><img alt="#" src="img/playmarket.png" height="40"></a>
      </p>
    </div>
  </section>
</footer>
<nav id="main-nav">
  <ul class="second-nav">
    <li><a href="home.html"><i class="feather-home mr-2"></i> Homepage</a></li>
    <li><a href="my_order.html"><i class="feather-list mr-2"></i> My Orders</a></li>
    <li>
      <a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
      <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="signup.html">Register</a></li>
        <li><a href="forgot_password.html">Forgot Password</a></li>
        <li><a href="verification.html">Verification</a></li>
        <li><a href="location.html">Location</a></li>
      </ul>
    </li>
    <li><a href="favorites.html"><i class="feather-heart mr-2"></i> Favorites</a></li>
    <li><a href="trending.html"><i class="feather-trending-up mr-2"></i> Trending</a></li>
    <li><a href="most_popular.html"><i class="feather-award mr-2"></i> Most Popular</a></li>
    <li><a href="restaurant.html"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a></li>
    <li><a href="checkout.html"><i class="feather-list mr-2"></i> Checkout</a></li>
    <li><a href="successful.html"><i class="feather-check-circle mr-2"></i> Successful</a></li>
    <li><a href="map.html"><i class="feather-map-pin mr-2"></i> Live Map</a></li>
    <li>
      <a href="#"><i class="feather-user mr-2"></i> Profile</a>
      <ul>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="favorites.html">Delivery support</a></li>
        <li><a href="contact-us.html">Contact Us</a></li>
        <li><a href="terms.html">Terms of use</a></li>
        <li><a href="privacy.html">Privacy & Policy</a></li>
      </ul>
    </li>
    <li>
      <a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
      <ul>
        <li><a href="not-found.html">Not Found</a>
          <li><a href="maintence.html"> Maintence</a>
            <li><a href="coming-soon.html">Coming Soon</a>
            </ul>
          </li>
          <li>
            <a href="#"><i class="feather-link mr-2"></i> Navigation Link Example</a>
            <ul>
              <li>
                <a href="#">Link Example 1</a>
                <ul>
                  <li>
                    <a href="#">Link Example 1.1</a>
                    <ul>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Link Example 1.2</a>
                    <ul>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Link Example 2</a></li>
              <li><a href="#">Link Example 3</a></li>
              <li><a href="#">Link Example 4</a></li>
              <li data-nav-custom-content>
                <div class="custom-message">
                  You can add any custom content to your navigation items. This text is just an example.
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="bottom-nav">
          <li class="email">
            <a class="text-danger" href="home.html">
              <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
              Home
            </a>
          </li>
          <li class="github">
            <a href="faq.html">
              <p class="h5 m-0"><i class="feather-message-circle"></i></p>
              FAQ
            </a>
          </li>
          <li class="ko-fi">
            <a href="contact-us.html">
              <p class="h5 m-0"><i class="feather-phone"></i></p>
              Help
            </a>
          </li>
        </ul>
      </nav>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Filter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body p-0">
              <div class="osahan-filter">
                <div class="filter">
                  <!-- SORT BY -->
                  <div class="p-3 bg-light border-bottom">
                    <h6 class="m-0">SORT BY</h6>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-radio">
                    <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked>
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio1f">Top Rated</label>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-radio">
                    <input type="radio" id="customRadio2f" name="location" class="custom-control-input">
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio2f">Nearest Me</label>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-radio">
                    <input type="radio" id="customRadio3f" name="location" class="custom-control-input">
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio3f">Cost High to Low</label>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-radio">
                    <input type="radio" id="customRadio4f" name="location" class="custom-control-input">
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio4f">Cost Low to High</label>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-radio">
                    <input type="radio" id="customRadio5f" name="location" class="custom-control-input">
                    <label class="custom-control-label py-3 w-100 px-3" for="customRadio5f">Most Popular</label>
                  </div>
                  <!-- Filter -->
                  <div class="p-3 bg-light border-bottom">
                    <h6 class="m-0">FILTER</h6>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked>
                    <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                    <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
                  </div>
                  <div class="custom-control border-bottom px-0  custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                    <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol Served</label>
                  </div>
                  <!-- Filter -->
                  <div class="p-3 bg-light border-bottom">
                    <h6 class="m-0">ADDITIONAL FILTERS</h6>
                  </div>
                  <div class="px-3 pt-3">
                    <input type="range" class="custom-range" min="0" max="100" name="minmax">
                    <div class="form-row">
                      <div class="form-group col-6">
                        <label>Min</label>
                        <input class="form-control" placeholder="$0" type="number">
                      </div>
                      <div class="form-group text-right col-6">
                        <label>Max</label>
                        <input class="form-control" placeholder="$1,0000" type="number">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer p-0 border-0">
              <div class="col-6 m-0 p-0">
                <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
              </div>
              <div class="col-6 m-0 p-0">
                <button type="button" class="btn btn-primary btn-lg btn-block">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->

<div class="modal fade" id="detile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detile Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Pesan</button>
      </div>
    </div>
  </div>
</div>
     
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
      <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <!-- Sidebar JS-->
      <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script type="text/javascript" src="js/osahan.js"></script>
      <script src="plugins/toastr/toastr.min.js"></script>
      <?php include '../asset/alert.php' ?>
      <?php include 'alert.php' ?>
        
    </body>

    </html>