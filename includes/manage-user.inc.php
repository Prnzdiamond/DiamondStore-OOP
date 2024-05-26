<?php

session_start();
include("../includes/al_cl.inc.php");
$manageUser = new userCtrl();

if(isset($_POST['log_in_user'])){
  $imSource = $_SERVER['HTTP_REFERER'];
  echo true;
    $orSource = $_SESSION['orSource'];
    $pass = $_POST['user_passw0rd'];
    $user_ref = $_POST['user_ref'];


      $result = $manageUser->loginUser($user_ref, $pass);
      if($result !== 'Login successful'){
        header('location:'.$imSource.'?result='.$result);
        exit();
      }else{
        if(isset($_POST['source'])){
          header('location:../checkout.php');
        }
        else{
          header('location:'.$orSource.'?result='.$result);
        }
        exit();

      }
    }

if(isset($_POST['reg_user'])){
    $imSource = $_SERVER['HTTP_REFERER'];
    $email = $_POST['email_address'];
    $user_name = $_POST['user_ref_name'];
    $phone = $_POST['phone_no'];
    $pass = $_POST['user_passw0rd'];
    $conPass = $_POST['user_passw0rd2'];
    $image = $_FILES['user_image'];
     $orSource = $_SESSION['orSource'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('location:'.$imSource.'?result=invalid email ');
        unset($imSource);
        exit();
    }
   
    if (!empty($phone) and !ctype_digit($phone)) {
        header('Location:'.$imSource.'?result=Invalid phone number');
        exit();
    }

    if($conPass !== $pass){
      header('location:'.$imSource.'?result=Password mismatch');
      exit();
    }
      $result =  $manageUser->RegUser($email, $user_name, $pass, $image, $phone);
      if($result !== 'User registered successfully'){
            header('location:'.$imSource.'?result='.$result);
            exit();
      }
      else{
        header('location:../log-in.php?result='.$result);
        exit();
      }
    




}

   
