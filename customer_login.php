<?php
include("includes/db.php");

 ?>
 <main class="site-content">
<div class="row">
    <div class="col-sm-4 col-sm-offset-1">
    <div class="login-form"><!--login form-->
        <h2>Login to your account</h2>
        <form method="POST" action="">
          <input type="text" name="email" placeholder="Enter your email" />
          <input type="password" name="pass" placeholder="Enter your password" />
          <button name="login" type="submit" class="btn btn-default" value="Login">Login</button>
        </form>   
        </div>
        </div>
        <div class="col-sm-1">
          <h2 class="or"><a href="customer_register.php">Register?</a></h2>
      <!--/login form-->
  <?php

  if(isset($_POST['login'])){

    $c_email = $_POST['email'];
    $c_pass = $_POST['pass'];

    $sel_c = "select * from customers where customer_pass = '$c_pass' AND customer_email = '$c_email'";

    $run_c = mysqli_query($con, $sel_c);

    $check_customer = mysqli_num_rows($run_c);

    if($check_customer == 0){

      echo "<script>alert('Password or Email incorrect. Please try again!')</script>";
      exit();
    }

    $ip = getIp();

    $sel_cart = "select * from cart where ip_add='$ip'";

    $run_cart = mysqli_query($con, $sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer>0 AND $check_cart == 0){

      $_SESSION['customer_email'] = $c_email;
      echo "<script>alert('You logged in successfully!')</script>";
      echo "<script>window.open('index.php','_self')</script>";

    }else{

      $_SESSION['customer_email'] = $c_email;
      echo "<script>alert('You logged in successfully!')</script>";
      echo "<script>window.open('checkout.php','_self')</script>";

    }

  }

   ?>
</div>
</main>