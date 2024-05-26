<?php
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commorce first Practice</title>
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
    <div class="container-fluid p-0 mt-5">
      <h3 class="text-center">Register to Start shopping</h3>
      <!-- third child -->
      <div class="container-fluid p-0">
        <!-- Products -->
        <div class="row p-3 d-flex justify-content-center align-items-center">
          <div class="col-lg-12 col-xl-6">
            <div class="row gy-2 d-flex justify-content-center align-items-center">
             <form method="post" action="./includes/manage-user.inc.php" enctype="multipart/form-data" >

               
               <!-- email address -->
               
               <div data-mdb-input-init class="form-outline mb-4">
                 <input type="text" autocomplete="off" id="email_address" name="email_address" class="form-control" />
                 <label class="form-label mt-2" for="email_address">Email address</label>
                </div>
                
                <!-- user-name -->
                
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" autocomplete="off" id="user_ref_name" name="user_ref_name" class="form-control" />
                  <label class="form-label" for="user_ref_name">Choose a username</label>
                </div>

                  <!-- Phone Number -->
                
                 <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" autocomplete="off" id="last_name" name="phone_no" class="form-control" />
                    <label class="form-label mt-2" for="last_name">Phone number</label>
                  </div>
                
                <!-- password -->
                
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" autocomplete="off" id="user_passw0rd" name="user_passw0rd" class="form-control" />
                  <label class="form-label mt-2" for="user_passw0rd">Password</label>
                </div>

  <!-- confirm password -->

   <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" autocomplete="off" id="user_passw0rd2" name="user_passw0rd2" class="form-control" />
    <label class="form-label mt-2" for="user_passw0rd2"> Confirm Password</label>
  </div>

  <!-- user profile picture -->

   <div data-mdb-input-init class="form-outline mb-4">
    <input type="file" autocomplete="off" accept="image/jpg,image/png,image/jpeg" id="user_image" name="user_image" class="form-control" />
    <label class="form-label mt-2" for="user_image">Choose a Profile picture </label>
  </div>
  

  <!-- Submit button -->
  <input value="Sign up" onclick="clearQuery()"  type="submit" name="reg_user" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">

  <!-- Register buttons -->

  <div class="text-center">
    <p>Already have an account? <a href="log-in.php">Login</a></p>
    <p>or sign up with:</p>
    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fa fa-facebook-f"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fa fa-google"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fa fa-twitter"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fa fa-github"></i>
    </button>
  </div>
</form>
            </div>
          </div>  
        </div>
      </div>
      <div class="text-center bg-info p-3">
        <p class="m-0">@2024 All Rights Reserved Diamond</p>
      </div>
    </div>
  </body>
  <script src="js/bootstrap.min.js"></script>
   <script>
    <?php
    if(isset($_GET['result'])){?>
        alert('<?= $resultmsg ?>');
    <?php }
    ?>
    function clearQuery(){
        if (window.location.search.includes('result=')) {
            window.history.replaceState({}, document.title, window.location.pathname);
        }
      }
    </script>
</html>
