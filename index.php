<?php
session_start();
  include("../DiamondStore-OOP/includes/al_cl.inc.php");
  include("../DiamondStore-OOP/functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commorce Practice</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <img class="logo" src="images/banner/1_1.jpg" alt="" />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user-register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php"
                  ><i class="fa fa-shopping-cart"><sup>  <?php
                $countCart = new cartView();
                echo $countCart->cartItemCount('qty');
                ?></sup>/:<?php echo number_format($countCart->cartItemCount('price'))?> </i></a
                >
                
              </li>
            </ul>
            <form class="d-flex" method="get" action="index.php">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                name="search_query"
                aria-label="Search"
              />
              <input name="submit" class="btn btn-outline-success" type="submit" value="Search">

            </form>
          </div>
        </div>
      </nav>
      <!-- second child -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Welcome</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="log-in.php">Login</a>
          </li>
        </ul>
      </nav>
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">
        Shop at Diamond Store Quality Products Affordable Price
      </p>
      <!-- third child -->
      <div class="container-fluid p-0">
        <!-- Products -->
        <div class="row p-3 ">
          <div class="col-md-10 ">
            <div class="row gy-2">
              
            <?php
            $Products = new productView();
               if (isset($_GET['brand'])) {
                    $brand_id = $_GET['brand'];
                    $prod_dets = $Products->displaySingProduct($brand_id, "select_brandName");
               } elseif (isset($_GET['category'])) {
                    $brand_id = $_GET['category'];
                    $prod_dets = $Products->displaySingProduct($brand_id, "select_category");
               } elseif(isset($_GET['search_query'])){
                       $brand_id = $_GET['search_query'];
                       $prod_dets = $Products->displaySingProduct($brand_id, "product_key");
               }
               
               else {
                    $prod_dets = $Products->displayAllProducts();
               }

               if (empty($prod_dets)) {
                    echo "<h2 class='text-center'>No Products Available</h2>";
               } else {
                   foreach ($prod_dets as $key) {
                       renderProductCard($key);
                  }
               }
            ?>
            </div>
          </div>  
          <!-- side nav  -->
           <?php renderSidenav()  ?>
        </div>
      </div>
      <div class="text-center bg-info p-3">
        <p class="m-0">@2024 All Rights Reserved Diamond</p>
      </div>
    </div>
  </body>
  <script src="js/bootstrap.min.js"></script>
</html>
