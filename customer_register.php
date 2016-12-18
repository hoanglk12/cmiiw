
<?php require 'shared/header.php'; ?>

<main class="site-content">
<div class="row">
<div class="col-sm-4 col-sm-offset-1">
<div class="signup-form">
<h2>Create an account</h2>
        <form method="POST" action="customer_register.php">
            <input type="text" name="c_name" placeholder="Customer name" required=""/>
            <input type="email" name="c_email" placeholder="Customer mail" required=""/>
            <input type="password" name="c_pass" placeholder="Customer password" required=""/> 
                <select name="c_country">
                  <option>Select a Country</option>
                  <option>Australia</option>
                  <option>India</option>
                  <option>Korea</option>
                  <option>Japan</option>
                  <option>Philippines</option>
                  <option>United States</option>
                  <option>United Kingdom</option>
                  <option>Thailand</option>
                  <option>VietNam</option>
                </select>

            <input type="text" name="c_city" placeholder="Customer city" required=""/> 
            <input type="text" name="c_contact" placeholder="Customer phone" required=""/> 
            <input type="text" name="c_address" placeholder="Customer address" required=""/>
            <input type="file" name="c_image" required=""/ style="background-color: transparent;">
            <button name="register" type="submit" class="btn btn-default">Create Account</button>
        </form>
      </div>
      </div>
      </div>


<?php

if(isset($_POST['register'])){

$ip = getIp();

$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_pass = $_POST['c_pass'];
$c_image = $_FILES['c_image']['name'];
$c_image_tmp = $_FILES['c_image']['tmp_name'];
$c_country = $_POST['c_country'];
$c_city = $_POST['c_city'];
$c_contact = $_POST['c_contact'];
$c_address = $_POST['c_address'];

move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

$insert_c = "insert into customers (customer_ip, customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image)
values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";

$run_c = mysqli_query($con, $insert_c);

$sel_cart = "select * from cart where ip_add='$ip'";

$run_cart = mysqli_query($con, $sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart == 0){

  $_SESSION['customer_email'] = $c_email;
  echo "<script>alert('Registeration successful!')</script>";
  echo "<script>window.open('customer/my_account.php','_self')</script>";
}else{

  $_SESSION['customer_email'] = $c_email;
  echo "<script>alert('Registeration successful!')</script>";
  echo "<script>window.open('checkout.php','_self')</script>";

}

}

 ?>


 </main>
<?php require 'shared/footer.php'; ?>