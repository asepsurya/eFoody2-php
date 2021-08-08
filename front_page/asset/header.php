<?php session_start() ?>
<header class="section-header">
    <section class="header-main shadow-sm bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-1">
            <a href="/eFoody2/front_page/home" class="brand-wrap mb-0">
              <img alt="/eFoody2/front_page/home" class="img-fluid" src="img/logo_web.png">
            </a>
            <!-- brand-wrap.// -->
          </div>
          
          <div class="col-1 d-flex align-items-center m-none">
              <!--
            <div class="dropdown mr-3">
              <a class="text-dark dropdown-toggle d-flex align-items-center py-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div><i class="feather-map-pin mr-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                <div>
                  <p class="text-muted mb-0 small">Select Location</p>
                  Jawaddi Ludhiana...
                </div>
              </a>
              <div class="dropdown-menu p-0 drop-loc" aria-labelledby="navbarDropdown">
                <div class="osahan-country">
                  <div class="search_location bg-primary p-3 text-right">
                    <div class="input-group rounded shadow-sm overflow-hidden">
                      <div class="input-group-prepend">
                        <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                      </div>
                      <input type="text" class="shadow-none border-0 form-control" placeholder="Enter Your Location">
                    </div>
                  </div>
                  <div class="p-3 border-bottom">
                    <a href="home.html" class="text-decoration-none">
                      <p class="font-weight-bold text-primary m-0"><i class="feather-navigation"></i> New York, USA</p>
                    </a>
                  </div>
                  <div class="filter">
                    <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">Choose your country</h6>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio1" name="location" class="custom-control-input">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Afghanistan</label>
                    </div>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio2" name="location" class="custom-control-input" checked="">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">India</label>
                    </div>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio3" name="location" class="custom-control-input">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio3">USA</label>
                    </div>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio4" name="location" class="custom-control-input">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio4">Australia</label>
                    </div>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio5" name="location" class="custom-control-input">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio5">Japan</label>
                    </div>
                    <div class="custom-control  px-0 custom-radio">
                      <input type="radio" id="customRadio6" name="location" class="custom-control-input">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio6">China</label>
                    </div>
                  </div>
                </div>
              </div>
            </div
      -->      
          </div>
          <?php 
            if (isset($_SESSION['username'])){
              echo'
              <div class="col-10">
            <div class="d-flex align-items-center justify-content-end pr-5">
            <div class="input-group mb-4 widget-header mr-4" style="margin-top: 15px; ">
            <input type="text" class="form-control form-control-lg input_search border-right-0" id="inlineFormInputGroup" placeholder="Mau Makan Apa Hari ini...?">
            <div class="input-group-prepend">
              <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i class="feather-search"></i></div>
            </div>
          </div><a href="" class="widget-header mr-4 text-dark"data-toggle="modal" data-target="#extras" >
          <div class="icon d-flex align-items-center">
              <i class="feather-shopping-cart h6 mr-2 mb-0"></i> <span>Cart</span>
          </div>
      </a>

          <a href="/eFoody2/pages/login/index" class="widget-header mr-4 text-white btn bg-primary m-none">
          <div class="icon d-flex align-items-center">
            <i class="feather-user h6 mr-2 mb-0"></i> <span>Trending</span>
          </div>
        </a>';
    include '../asset/koneksi.php';
    $username = $_SESSION['username'];
    $query = "SELECT * FROM tbl_customer where email='$username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    $a= $data['nm_customer'];
    echo'
                <div class="dropdown mr-4 m-none">
                  <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="#" src="https://lh3.googleusercontent.com/proxy/ESfaeROUSN2Aqqw79Y2OxKBALOyQPAPjRlG3p71TVi1V_NzJw3Ikz46ShGdNZ307gSisunw3U5KjUaLbglJzN0OgmPZPydcTn9M" class="img-fluid rounded-circle header-user mr-2 header-user"> Hi, '.$a.'
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="profile.html">My account</a>
                    <a class="dropdown-item" href="faq.html">Delivery support</a>
                    <a class="dropdown-item" href="contact-us.html">Contant us</a>
                    <a class="dropdown-item" href="terms.html">Term of use</a>
                    <a class="dropdown-item" href="privacy.html">Privacy policy</a>
                    <a class="dropdown-item" href="/eFoody2/pages/login/logout">Logout</a>
                  </div>
                </div>
                
               <a class="toggle" style="margin-top: 5px; " href="#">
                  <span></span>
                </a>
                
                </div>
                </div>
                <!-- signin -->
                 <!-- offers -->
                  <!-- col.// --> ';
            }else{
          ?> 

          <div class="col-10">
            <div class="d-flex align-items-center justify-content-end pr-5">
              <!-- search -->
            <div class="input-group mb-4 widget-header mr-4" style="margin-top: 20px; ">
          <input type="text" class="form-control form-control-lg input_search border-right-0" id="inlineFormInputGroup" placeholder="Mau Makan Apa Hari ini...?">
          <div class="input-group-prepend">
            <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i class="feather-search"></i></div>
          </div>
        </div>
              <a href="/eFoody2/pages/login/register" class="widget-header mr-4 text-dark">
                <div class="icon d-flex align-items-center">
                  <i class="feather-user h6 mr-2 mb-0"></i> <span>Daftar</span>
                </div>
              </a>
               <a href="/eFoody2/pages/login/index" class="widget-header mr-4 text-white btn bg-primary m-none">
                <div class="icon d-flex align-items-center">
                  <i class="feather-user h6 mr-2 mb-0"></i> <span>Masuk</span>
                </div>
              </a>
             
            </div>
            <?php } ?>
           
            <!-- widgets-wrap.// -->
          </div>
          <!-- col.// -->
        </div>
        <!-- row.// -->
      </div>
      <!-- container.// -->
    </section>
    <!-- header-main .// -->
  </header>
  <?php include 'asset/keranjang.php'; ?>