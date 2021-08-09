<?php session_start() ?>
<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
<style>
  .autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

<header class="section-header sticky-top">
    <section class="header-main shadow-sm bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-2">
            <a href="/eFoody2/front_page/home" class="brand-wrap mb-0">
            <img src="../logo.png" alt="eFoody" width="150">
            </a>
            <!-- brand-wrap.// -->
          </div>
          
          
          <?php 
            if (isset($_SESSION['username'])){
              echo'
              <div class="col-2 align-items-center m-none">
          <div class="dropdown mr-3">
              <a class="text-dark dropdown-toggle d-flex align-items-center py-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div><i class="feather-map-pin mr-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                <div>
                  <p class="text-muted mb-0 small">Lokasi saat ini</p>
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
                  <div class="filter">
                    <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom"> Rumah</h6>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio1" name="location" class="custom-control-input">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Jl. Krendang Raya No.21, RT.7/RW.12, Krendang,
                      Kec. Tambora, Kota Jakarta Barat,</label>
                    </div>
                    <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom"> Kantor</h6>
                    <div class="custom-control  border-bottom px-0 custom-radio">
                      <input type="radio" id="customRadio2" name="location" class="custom-control-input" checked="">
                      <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">Jl. Krendang Raya No.21, RT.7/RW.12, Krendang, Kec. Tambora, Kota Jakarta Barat,</label>
                    </div>
                    
                  </div>
                </div>
              </div>
</div>
            
        
          </div>
              <div class="col-8">
              <form autocomplete="off" action="/action_page.php">
            <div class="d-flex align-items-center justify-content-end pr-5">
              <!-- search -->  
            <div class="input-group mb-4 widget-header mr-4" style="margin-top: 20px; ">
          <input type="text" class="form-control form-control-lg input_search border-right-0"  placeholder="Mau Makan Apa Hari ini...?" id="myInput">
          <div class="input-group-prepend">
            <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i class="feather-search"></i></div>
          </div>
        </div>
            </form>
          <a href="" class="widget-header mr-4 text-dark"data-toggle="modal" data-target="#extras" >
          <div class="icon d-flex align-items-center">
              <i class="feather-shopping-cart h6 mr-2 mb-0"></i>
          </div>
      </a>

       ';
    include '../asset/koneksi.php';
    $username = $_SESSION['username'];
    $query = "SELECT * FROM tbl_customer where email='$username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    $a= $data['nm_customer'];
    echo'
                <div class="dropdown mr-4 m-none">
                  <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="#" src="../pages/login/img/'.$data['gambar'].'" class="img-fluid rounded-circle header-user mr-2 header-user"> Hi, '.$a.'
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="profile.php">My account</a>
                    <a class="dropdown-item" href="faq.html">Delivery support</a>
                    <a class="dropdown-item" href="contact-us.html">Contant us</a>
                    <a class="dropdown-item" href="terms.html">Term of use</a>
                    <a class="dropdown-item" href="privacy.html">Privacy policy</a>
                    <a class="dropdown-item" href="/eFoody2/pages/login/logout">Logout</a>
                  </div>
                </div>
                
              
                
                </div>
                </div>
                <!-- signin -->
                 <!-- offers -->
                  <!-- col.// --> ';
            }else{
          ?> 

          <div class="col-10">
          <form autocomplete="off" action="/action_page.php">
            <div class="d-flex align-items-center justify-content-end pr-5">
              <!-- search -->  
            <div class="input-group mb-4 widget-header mr-4" style="margin-top: 20px; ">
          <input type="text" class="form-control form-control-lg input_search border-right-0"  placeholder="Mau Makan Apa Hari ini...?" id="myInput">
          <div class="input-group-prepend">
            <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i class="feather-search"></i></div>
          </div>
        </div>
            </form>
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
  
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var data = <?php include 'data.php' ?>


/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), data);

</script>
