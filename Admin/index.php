<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diamond-store Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Libraries Stylesheet -->
    <link href="./css/owl.carousel.min.css" rel="stylesheet">
    <link href="./css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
          <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-shopping-cart me-2"></i>Diamond Store</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-danger rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart me-2"></i>Products</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?products=all" class="dropdown-item">View Products  <i class="fa fa-eye mx-4"> </i></a>
                            <a href="?products=add-new" class="dropdown-item">Add new Products <i class="fa fa-receipt mx-3"> </i></a>
                            <a href="element.html" class="dropdown-item">Edit Products <i class="fa fa-eye mx-5"> </i></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-receipt me-2"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0">
                             <a href="element.html" class="dropdown-item">All Orders</a>
                            <a href="button.html" class="dropdown-item">Confirmed Orders</a>
                            <a href="typography.html" class="dropdown-item">Pending Orders</a>
                            <a href="element.html" class="dropdown-item">Online Orders</a>
                             <a href="element.html" class="dropdown-item">Offline Orders</a>
                              <a href="element.html" class="dropdown-item">Refund Orders</a>
                             
                              <a href="element.html" class="dropdown-item">Confirm pending offline  Orders</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">View Categories</a>
                            <a href="typography.html" class="dropdown-item">Edit Items in Categories</a>
                            <a href="element.html" class="dropdown-item">View items in Categories</a>
                             <a href="element.html" class="dropdown-item">Edit Categories</a>
                        </div>
                    </div>
                   <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Brands</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">View Brands</a>
                            <a href="typography.html" class="dropdown-item">Edit Items in Brands</a>
                            <a href="element.html" class="dropdown-item">View items in Brands</a>
                             <a href="element.html" class="dropdown-item">Edit Brands</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Customers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">View All Customers</a>
                            <a href="signup.html" class="dropdown-item">View Customers who Ordered Recently</a>
                            <a href="404.html" class="dropdown-item">View Verified Customers</a>
                            <a href="blank.html" class="dropdown-item">View Unverified Customers</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown not">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex ">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row h2-text">
                                   <div class="bg-light text-center rounded p-4">
                                         <div class="d-flex align-items-center justify-content-between mb-4">
                                             <h6 class="mb-0">Products</h6>
                                             <a href="">Show All</a>
                                         </div>
                                         <div class="table-responsive">
                                             <table class="table text-start align-middle table-bordered table-hover mb-0">
                                                 <thead>
                                                     <tr class="text-dark">
                                                         <th scope="col">S/N</th>
                                                         <th scope="col">image</th>
                                                         <th scope="col">Name</th>
                                                         <th scope="col">Price</th>
                                                         <th scope="col">Keywords</th>
                                                         <th scope="col" class="col-btn">Action</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <tr>
                                                        <td><?php echo $sn?></td>
                                                         <td> <img src="" alt="product_image"> </td>
                                                         <td><?php echo htmlentities($prod_name)?></td>
                                                         <td><?php echo htmlentities(number_format($prod_price))?></td>
                                                         <td><?php echo htmlentities($product_key)?></td>
                                                         <td class="table-btn"><a class="btn table-btns btn-primary w-30" href="?<?php echo htmlentities($prod_id)?>"><i class="fa fa-edit"></i></a> <a class="btn table-btns  btn-primary w-30" href="??<?php echo htmlentities($prod_id)?>"><i class="fa fa-trash"></i></a></td>
                                                     </tr>
                                                 </tbody>
                                            </table>
                                        </div>
                                    </div>

                </div>

                <!-- Recent Sales End -->
               
            </div>
            <!-- Widgets Start -->
            <!-- <div class="container-fluid widgets pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Notifications</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Diamond Store</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://htmlcodex.com">Agboifoh Oseahumen </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    <script src="../js/bootstrap.bundle.min.js"></script>
   
    <!-- <script src="js/main.js"></script> -->
</body>

</html>