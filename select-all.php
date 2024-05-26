<?php
  include("../DiamondStore-OOP/includes/al_cl.inc.php");
  include("../DiamondStore-OOP/functions/functions.php");
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>E-commorce  Practice</title>
    <link
      href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'
      rel='stylesheet'
      integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'
      crossorigin='anonymous'
    />
     <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
        <!-- <link rel='stylesheet' href='css/font-awesome.min.css'> -->
        <!-- <link rel='stylesheet' href='css/fontawesome-stars.css'> -->
        <!-- <link rel='stylesheet' href='css/meanmenu.css'>-->
        <link rel='stylesheet' href='css/owl.carousel.min.css'>
        <link rel='stylesheet' href='css/slick.css'>
        <!-- <link rel='stylesheet' href='css/animate.css'> -->
        <!-- <link rel='stylesheet' href='css/jquery-ui.min.css'> -->
        <link rel='stylesheet' href='css/venobox.css'>
        <!-- <link rel='stylesheet' href='css/nice-select.css'>
        <link rel='stylesheet' href='css/magnific-popup.css'>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/helper.css'> -->
        <link rel='stylesheet' href='css/style.css'>
        <!-- <link rel='stylesheet' href='css/responsive.css'> -->
        <script src='js/vendor/modernizr-2.8.3.min.js'></script>
    <link rel='stylesheet' href='css/font-awesome.min.css' />
    <link rel='stylesheet' href='css/bootstrap.min.css' />
    <link rel='stylesheet' href='style.css' />
  </head>
  <body>
    <div class='container-fluid p-0'>
      <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid'>
          <img class='logo' src='images/banner/1_1.jpg' alt='' />
          <button
            class='navbar-toggler'
            type='button'
            data-bs-toggle='collapse'
            data-bs-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent'
            aria-expanded='false'
            aria-label='Toggle navigation'
          >
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
              <li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='products.php'>Products</a>
              </li>
              <li class='nav-item'>
                <a class="nav-link" href="user-register.php">Register</a>

              </li>
              <li class='nav-item'>
                <a class='nav-link' href='#'>Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php"
                  ><i class="fa fa-shopping-cart"><sup</sup>/:  </i></a
                >
              </li>
            </ul>
            <form class='d-flex' method='get' action='index.php'>
              <input
                class='form-control me-2'
                type='search'
                placeholder='Search'
                name='search_query'
                aria-label='Search'
              />
              <input name='submit' class='btn btn-outline-success' type='submit' value='Search'>

            </form>
          </div>
        </div>
      </nav>
      <!-- second child -->
      <nav class='navbar navbar-expand-lg navbar-dark bg-secondary'>
        <ul class='navbar-nav me-auto'>
            <li class="nav-item">
            <a class="nav-link" href="#">Guest</a>
          </li>
           <li class="nav-item">
                <a class="nav-link" href="log-in.php">Login</a>
          </li>
        </ul>
      </nav>
      <!-- third child -->
      <div class='container-fluid p-0'>
        <!-- Products -->
        <div class='row p-3 mt-5 '>
         <div class='col-md-10'>
            <?php
              if(isset($_GET['product_id'])){
                $prod_id = $_GET['product_id'];
                $prod_dets = new productView();
                $prod_dets = $prod_dets->displaySingProduct($prod_id,'product_id');
                foreach($prod_dets as $key){
                  renderProductDets($key);
                }
              }
            ?> 
          <section class='product-area li-laptop-product pt-30 pb-50'>
             <div class='container'>
                 <div class='row'>
                     <!-- Begin Li's Section Area -->
                     <div class='col-lg-12'>
                         <div class='li-section-title'>
                             <h2>
                                 <span>Some other products in the same category:</span>
                             </h2>
                         </div>
                         <div class='row'>
                             <div class='product-active owl-carousel'>
                              <?php
                               $cat =  $_GET['cat'];
                               $prod = new productView();
                               $prod_dets = $prod->displaySingProduct($cat,'select_category');
                               foreach($prod_dets as $key){
                                renderCatprod($key);
                               }
                              ?>
                             </div>
                         </div>
                     </div>
                     <!-- Li's Section Area End Here -->
                 </div>
             </div>
         </section>
         </div>
          <!-- side nav  -->
             <?php renderSidenav()  ?>
        </div>
      </div>
      <div class='text-center bg-info p-3'>
        <p class='m-0'>@2024 All Rights Reserved Diamond</p>
      </div>
    </div>
  </body>
        <script src='js/vendor/jquery-1.12.4.min.js'></script>
        <script src='js/vendor/popper.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/ajax-mail.js'></script>
        <script src='js/jquery.meanmenu.min.js'></script>
        <script src='js/wow.min.js'></script>
        <script src='js/slick.min.js'></script>
        <script src='js/owl.carousel.min.js'></script>
        <script src='js/jquery.magnific-popup.min.js'></script>
        <script src='js/isotope.pkgd.min.js'></script>
        <script src='js/imagesloaded.pkgd.min.js'></script>
        <script src='js/jquery.mixitup.min.js'></script>
        <script src='js/jquery.countdown.min.js'></script>
        <script src='js/jquery.counterup.min.js'></script>
        <script src='js/waypoints.min.js'></script>
        <script src='js/jquery.barrating.min.js'></script>
        <script src='js/jquery-ui.min.js'></script>
        <script src='js/venobox.min.js'></script>
        <script src='js/jquery.nice-select.min.js'></script>
        <script src='js/scrollUp.min.js'></script>
        <script src='js/main.js'></script>
  <script src='js/bootstrap.min.js'></script>
</html>
