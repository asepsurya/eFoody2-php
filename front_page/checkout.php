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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css"> 
    <!-- Feather Icon-->
    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="vendor/sidebar/demo.css" rel="stylesheet">
</head>
<body class="fixed-bottom-bar">
    <?php include 'asset/header.php'; ?>
    <div class="osahan-checkout">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Checkout</h4>
            </div>
        </div>
        <!-- checkout -->
        <div class="container position-relative">
            <!-- form start -->
            <form action="../payment/pembayaran/checkout-process.php" method="GET">
            <div class="py-5 row">
                <div class="col-md-8 mb-3">
                    <div>
                        <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                            <div class="osahan-cart-item-profile bg-white p-3">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 font-weight-bold">Delivery Address</h6>
                                    <div class="row">
                                        <div class="custom-control col custom-radio mb-3 position-relative border-custom-radio">
                                            <input type="radio" id="customRadioInline4" name="customRadioInline4" class="custom-control-input" >
                                            <label class="custom-control-label w-100" for="customRadioInline1">
                                               <div>
                                                  <div class="p-3 bg-white rounded shadow-sm w-100">
                                                     <div class="d-flex align-items-center mb-2">
                                                        <h6 class="mb-0">Alamat :</h6>
                                                        <p class="mb-0 badge badge-success ml-auto"><i class="icofont-check-circled"></i> Default</p>
                                                    </div>
                                                    <?php
                                                    include '../asset/koneksi.php';
                                                    $id = $_SESSION['id_customer'];
                                                    $myquery = "SELECT * FROM tbl_customer where id_customer='$id'";
                                                    $result1 = mysqli_query($koneksi, $myquery);
                                                    $row = mysqli_fetch_assoc($result1);
                                                    ?>
                                                    <p class=" text-muted m-0"><?php echo $row['alamat_customer'] ?></p>
                                                    
                                                </div>
                                                <a href="#"  data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-primary border-top">Edit</a>
                                            </div>
                                        </label>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                        <div class="osahan-card bg-white border-bottom overflow-hidden">
                            <div class="osahan-card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     <i class="feather-credit-card mr-3"></i>Informasi 
                                     <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                             </h2>
                         </div>
                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="osahan-card-body border-top p-3">
                                <div class="row">
                                
                            <div class="form-row col-md-12 ">
                                

                                <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Nama</label><input placeholder="Enter Valid through(MM/YY)" type="text" class="form-control" value="<?= $row['nm_customer'] ?>"></div>
                                <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Email</label><input placeholder="Enter Valid through(MM/YY)" type="text" class="form-control" value="<?= $row['email'] ?>"></div>
                                <div class="col-md-4 form-group"><label class="form-label font-weight-bold small">No Hp</label><input placeholder="Enter CVV Number" type="text" class="form-control" value="<?= $row['no_kontak'] ?>"></div> 
                            </div>
                        
                                 
</div>
                     </div>
                 </div>
             </div>
             <div class="osahan-card bg-white border-bottom overflow-hidden">
                <div class="osahan-card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-motorcycle mr-3"></i> Metode Pengiriman
                            <i class="feather-chevron-down ml-auto"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="osahan-card-body border-top p-3">
                        <form>
                            <div id="myRadioGroup">
                                <div class="btn-group btn-group-toggle w-100 " data-toggle="buttons">
                                    <label class="btn btn-outline-secondary">
                                       <input type="radio" name="cars" id="option1" value="1" checked> Delivey Order

                                   </label>
                                   <label class="btn btn-outline-secondary">
                                       <input type="radio" name="cars" id="option2" value="2"> Pre Order
                                   </label>
                                   <label class="btn btn-outline-secondary">
                                       <input type="radio" name="cars" id="option3" value="3"> Pemesanan Langsung 
                                   </label>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>

       </div>
   </div>
</div>
<div class="col-md-4">
    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
        
        <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
            
            <div class="d-flex flex-column">
                <h5 class="mb-0 font-weight-bold">Keranjang Belanja</h5>
                
            </div>
            
        </div>
        <div class="bg-white border-bottom py-2">
            <?php
            include '../asset/koneksi.php';
            $id = $_SESSION['id_customer'];
            $query = "SELECT * FROM tbl_keranjang_belanja where id_customer='$id'";
            $result = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_assoc($result)){
            $id_produk=$data['id_produk'];
            
            ?>
            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                <div class="media align-items-center col-lg-6">
                    <div class="mr-2 text-success">&middot;</div>
                    <?php
                    $query2 = "SELECT * FROM tbl_produk where id_produk='$id_produk'";
                    $result2 = mysqli_query($koneksi, $query2);
                    $data2 = mysqli_fetch_assoc($result2);
                    $total=mysqli_num_rows($result2);
                    ?>
                    <div class="media-body ">
                        <p class="m-0"><b><?php echo $data2['jenis_produk'] ?></b></p>
                        <small><p class="m-0">Rp. <?= number_format($data2['harga_produk'], 0, ".", ".") ?></p></small>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <!-- update -->
                    <div align="right">
                        <form action="profile_act/auto_update_qty.php" method="POST" class=" col-lg-10 ">
                            <div class="input-group input-group mb-3 col-lg-10">
                                <input type="number" class="form-control  " id="qty'<?= $data['qty'] ?>'" name="qty" value="<?php echo $data['qty'] ?>">
                                <input type="text" class="" name="id" value="<?= $id_produk ?>" hidden>
                                <div class="input-group-prepend">
                                  <button type="submit" class="btn btn-default btn-sm " ><i class="fas fa-sync-alt"></i></button>
                                  
                              </div>
                          </div>
                          
                      </form>
                  </div>
              </div>
              
          </div>
          <?php } ?>
      </div>
      
      <div class="bg-white p-3 py-3 border-bottom clearfix">
         
        <div class="mb-0 input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="feather-message-square"></i></span></div>
            <textarea placeholder="Pesan.." aria-label="With textarea" class="form-control" name="pesan"></textarea>
        </div>

        
    </div>
    
    <div class="bg-white p-3 clearfix border-bottom">
        <?php
        $id = $_SESSION['id_customer'];
        //Deklarasi
        $total= 0;
        $tot_bayar= 0;
        $ongkos=14000;
        $myquery25 = "SELECT * FROM tbl_keranjang_belanja where id_customer='$id'";
        $result5 = mysqli_query($koneksi, $myquery25);
        while($row2 = mysqli_fetch_assoc($result5)){ 
        
        //menghitung total
        $total = $row2['harga_produk'] * $row2['qty'];
        $tot_bayar += $total;
        $jumlah=$tot_bayar+$ongkos;
        $preorder=0;
        $langsung=0;
        
        
        ?>
        <?php } ?>
        
        
        <p class="mb-1"><b>Item Total</b> <span class="float-right text-dark">Rp. <?= number_format($tot_bayar,0,".",".") ?></span></p>
        <div id="1" class="desc a">
            <p class="mb-1">Delivery <span class="text-info ml-1"><i class="feather-info"></i></span><span class="float-right text-dark">Rp.<?= number_format($ongkos,0,".",".")?></span></p>
            <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">Rp. <?= number_format($jumlah,0,".",".") ?></span></h6>
            <div class="p-3">
                <hr>
                <Button type="submit" class="btn btn-success btn-block btn-lg" href="successful.html">Bayar Rp.<?= number_format($jumlah,0,".",".") ?> <i class="feather-arrow-right"></i></button>
            </div>
        </div>
        <div id="2" class="desc">
            <p class="mb-1">Pre Order <span class="text-info ml-1"><i class="feather-info"></i></span><span class="float-right text-dark">Rp.<?= number_format($preorder,0,".",".")?></span></p>
            
            <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">Rp. <?= number_format($tot_bayar,0,".",".") ?></span></h6>
            <div class="p-3">
                <hr>
                <Button type="submit" class="btn btn-success btn-block btn-lg" href="successful.html">Bayar Rp.<?= number_format($tot_bayar,0,".",".") ?> <i class="feather-arrow-right"></i></button>
            </div>
        </div>  
        <div id="3" class="desc">
            <p class="mb-1">Pemesanan Langsung <span class="text-info ml-1"><i class="feather-info"></i></span><span class="float-right text-dark">Rp.<?= number_format($langsung,0,".",".")?></span></p>
            
            <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">Rp. <?= number_format($tot_bayar,0,".",".") ?></span></h6>
            <div class="p-3">
                <hr>
                <Button type="submit" class="btn btn-success btn-block btn-lg" href="successful.html">Bayar Rp.<?= number_format($tot_bayar,0,".",".") ?> <i class="feather-arrow-right"></i></button>
            </div>
        </div>  
   <!-- End Form -->
   
        </form>         
    </div>
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
            <!-- modal delivery address -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Delivery Address</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label class="form-label">Delivery Area</label>
                                    <div class="input-group">
                                        <input placeholder="Delivery Area" type="text" class="form-control">
                                        <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-map-pin"></i></button></div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group"><label class="form-label">Complete Address</label><input placeholder="Complete Address e.g. house number, street name, landmark" type="text" class="form-control"></div>
                                <div class="col-md-12 form-group"><label class="form-label">Delivery Instructions</label><input placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall" type="text" class="form-control"></div>
                                <div class="mb-0 col-md-12 form-group">
                                    <label class="form-label">Nickname</label>
                                    <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                        <label class="btn btn-outline-secondary active">
                                          <input type="radio" name="options" id="option12" checked> Home
                                      </label>
                                      <label class="btn btn-outline-secondary">
                                          <input type="radio" name="options" id="option22"> Work
                                      </label>
                                      <label class="btn btn-outline-secondary">
                                          <input type="radio" name="options" id="option32"> Other
                                      </label>
                                  </div>
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
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="js/osahan.js"></script>
    <script>
      $(document).ready(function() {
        $("div.desc").hide();
        $("input[name$='cars']").click(function() {
            $("div.a").show();
            var test = $(this).val();
            
            $("div.desc").hide();
            $("#" + test).show();
        });
    });
</script>
</body>


</html>