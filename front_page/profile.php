<!DOCTYPE html>
<html lang="en">

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
    <link href="css/upload.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="vendor/sidebar/demo.css" rel="stylesheet">
    
</head>

<body class="fixed-bottom-bar">
    <?php include 'asset/header.php'; 
    include '../asset/koneksi.php'; ?>
    <?php
    if (empty($_SESSION["username"])) {
    # code...
    header("Location:../login/index.php?pesan=invalid");
}
?>
<div class="osahan-profile">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Profile</h4>
        </div>
    </div>
    <?php
    $username=$_SESSION['username'];
    $query = "SELECT * FROM tbl_customer where email='$username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    ?>
    <!-- profile -->
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="profile.html" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                               <a href="" data-toggle="modal" data-target="#edit-modal<?php echo $data['id_customer'] ?>"> <img alt="#" src="../pages/login/img/<?php echo $data['gambar'] ?>" class="rounded-circle" width="50" height="50"></a>
                           </div>
                           <div class="right">
                            <h6 class="mb-1 font-weight-bold"><?php echo $data['nm_customer'] ?><i class="feather-check-circle text-success"></i></h6>
                            <p class="text-muted m-0 small"><?php echo $data['email'] ?></p>
                        </div>
                    </div>
                </a>
                <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                    <p class="m-0">Accounts Credits</p>
                    <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                </div>
                <!-- profile-details -->
                <div class="bg-white profile-details">
                    
                    <a data-toggle="modal" data-target="#exampleModal" class="d-flex w-100 align-items-center border-bottom p-3">
                        <div class="left mr-3">
                            <h6 class="font-weight-bold mb-1 text-dark">Ubah Alamat</h6>
                            <p class="small text-muted m-0">Add or remove a delivery address</p>
                        </div>
                        <div class="right ml-auto">
                            <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                        </div>
                    </a>
                    <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal" data-target="#inviteModal">
                        <div class="left mr-3">
                            <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                            <p class="small text-primary m-0">Get $10.00 FREE</p>
                        </div>
                        <div class="right ml-auto">
                            <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                        </div>
                    </a>
                    <a href="my_order.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                        <div class="left mr-3">
                            <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Pesanan Saya</h6>
                        </div>
                        <div class="right ml-auto">
                            <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                        </div>
                    </a>
                    <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                        <div class="left mr-3">
                            <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Favorit</h6>
                        </div>
                        <div class="right ml-auto">
                            <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                        </div>
                    </a>
                   
                </div>
            </div>
        </div>
        <div class="col-md-8 mb-3">
            <div class="rounded shadow-sm p-4 bg-white">
                <h5 class="mb-4">My account</h5>
                <div id="edit_profile">
                    <div>
                        <?php $id_customer=$_SESSION['id_customer']; ?>
                        <form action="profile_act/act_update_pelanggan.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputName1d" value="<?php echo $data['nm_customer'] ?>" name="nama">
                                <input type="text" class="form-control" id="exampleInputName1d" hidden value="<?php echo $id_customer ?>" name="id_pelanggan">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputNumber1">Nomor Telepon</label>
                                <input type="number" class="form-control" id="exampleInputNumber1" value="<?php echo $data['no_kontak'] ?>" name="no_kontak">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $data['email'] ?>" name="email">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                    <div class="additional">
                        <div class="change_password my-3">
                            <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Change Password 
                              <i class="feather-arrow-right ml-auto"></i></a>
                          </div>
                          <div class="deactivate_account">
                            <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate Account 
                              <i class="feather-arrow-right ml-auto"></i></a>
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
        <div class="col">
            <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
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
        <div class="col selected">
            <a href="profile.html" class="text-danger small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-user"></i></p>
                Profile
            </a>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<footer class="section-footer border-top bg-dark">
    <div class="container">
        <section class="footer-top padding-y py-5">
            <div class="row pt-3">
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
            <!-- payment modal -->
            <div class="modal fade" id="paycard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Credit/Debit Card</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        <h6 class="m-0">Add new card</h6>
                        <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa Card / Rupay )</span></p>
                        <form>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="form-label font-weight-bold small">Card number</label>
                                    <div class="input-group">
                                        <input placeholder="Card number" type="number" class="form-control">
                                        <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-credit-card"></i></button></div>
                                    </div>
                                </div>
                                <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Valid through(MM/YY)</label><input placeholder="Enter Valid through(MM/YY)" type="number" class="form-control"></div>
                                <div class="col-md-4 form-group"><label class="form-label font-weight-bold small">CVV</label><input placeholder="Enter CVV Number" type="number" class="form-control"></div>
                                <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Name on card</label><input placeholder="Enter Card number" type="text" class="form-control"></div>
                                <div class="col-md-12 form-group mb-0">
                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="custom-checkbox1" class="custom-control-input"><label title="" type="checkbox" for="custom-checkbox1" class="custom-control-label small pt-1">Securely save this card for a faster checkout next time.</label></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer p-0 border-0">
                        <div class="col-6 m-0 p-0">
                            <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-6 m-0 p-0">
                            <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- address modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Alamat Pengiriman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="profile_act/act_update_alamat.php" method="POST" >
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label">Alamat</label>
                                    <div class="form-group">
                                        <input type="text" name="id_pelanggan" value="<?php echo $_SESSION['id_customer'] ?>" hidden >
                                         <textarea class="form-control" name="alamat" rows="5"><?php echo $data['alamat_customer'] ?></textarea>
                                    </div>
                                   
                            </div>                      
                      </div>
                  
              </div>
              <div class="modal-footer p-0 border-0">
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                </div>
                <div class="col-6 m-0 p-0">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan Perubahan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Invite Modal-->

<div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title font-weight-bold text-dark">Invite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body py-0">
            <button class="btn btn-light text-primary btn-sm"><i class="feather-plus"></i></button>
            <span class="ml-2 smal text-primary">Send an invite to a friend</span>
            <p class="mt-3 small">Invited friends (2)</p>
            <div class="d-flex align-items-center mb-3">
                <div class="mr-3"><img alt="#" src="img/user1.jpg" class="img-fluid rounded-circle"></div>
                <div>
                    <p class="small font-weight-bold text-dark mb-0">Kate Simpson</p>
                    <P class="mb-0 small">katesimpson@outbook.com</P>
                </div>
            </div>
            <div class="d-flex align-items-center mb-3">
                <div class="mr-3"><img alt="#" src="img/user2.png" class="img-fluid rounded-circle"></div>
                <div>
                    <p class="small font-weight-bold text-dark mb-0">Andrew Smith</p>
                    <P class="mb-0 small">andrewsmith@ui8.com</P>
                </div>
            </div>
        </div>
        <div class="modal-footer border-0">
        </div>
    </div>
</div>
</div>
<?php
$username = $_SESSION['username'];
$query = "SELECT * FROM tbl_customer where email='$username'";
$result = mysqli_query($koneksi, $query);
while($data = mysqli_fetch_assoc($result)){
?>
<!-- extras modal -->
<div class="modal fade" id="edit-modal<?php echo $data['id_customer']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Ubah Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          
            <form action="profile_act/act_update.php" method="POST" class="upload" enctype="multipart/form-data">
            <input type="text" hidden name="id" value="<?php echo $data['id_customer']; ?>" >
               <input type="file" multiple  class="upload" name="foto">
               <p>Drag your files here or click in this area.</p>
           

       </div>
       <div class="modal-footer p-0 border-0">
        <div class="col-6 m-0 p-0">
            <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
        </div>
        <div class="col-6 m-0 p-0">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php } ?>
<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- slick Slider JS-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<!-- Sidebar JS-->
<script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
<!-- Custom scripts for all pages-->
<script type="text/javascript" src="js/osahan.js"></script>
<script type="text/javascript" src="js/upload.js"></script>
<script src='https://unpkg.com/eva-icons'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
</body>

</html>