<div class="signup-form">
<h2>Update your account</h2>

<?php
                
                include("includes/db.php");

                $user = $_SESSION['customer_email'];

                $get_customer = "select * from customers where customer_email = '$user'";

                $run_customer = mysqli_query($con, $get_customer);

                $row_customer = mysqli_fetch_array($run_customer);

                $c_id = $row_customer['customer_id'];

                $name = $row_customer['customer_name'];
                $email = $row_customer['customer_email'];
                $pass = $row_customer['customer_pass'];
                $country = $row_customer['customer_country'];
                $city = $row_customer['customer_city'];
                $contact = $row_customer['customer_contact'];
                $address = $row_customer['customer_address'];
                $image = $row_customer['customer_image'];
 ?>





        <form method="POST" action="" enctype="multipart/form-data">
            <input type="text" name="c_name" placeholder="Customer name" value="<?php echo $name; ?>" required/>
            <input type="email" name="c_email" placeholder="Customer mail" value="<?php echo $email; ?>" required/>
            <input type="text" name="c_pass" placeholder="Customer password" value="<?php echo $pass; ?>" disabled> 
                <select name="c_country" disabled>

                  <option><?php echo $country; ?></option>
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

            <input type="text" name="c_city" placeholder="Customer city" value="<?php echo $city; ?>" /> 
            <input type="text" name="c_contact" placeholder="Customer phone" value="<?php echo $contact; ?>" /> 
            <input type="text" name="c_address" placeholder="Customer address" value="<?php echo $address; ?>" />
            <input type="file" value="<?php echo $image; ?>" name="c_image" ><img src="customer_images/<?php echo $image; ?>" width="100" height="100" style="
    margin-bottom: 20px;"/>
            <button name="update" type="submit" class="btn btn-default">Update</button>

        </form>
      </div>

<?php

if(isset($_POST['update'])){

$ip = getIp();

$customer_id = $c_id;

$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_pass = $_POST['c_pass'];
$c_image = $_FILES['c_image']['name'];
$c_image_tmp = $_FILES['c_image']['tmp_name'];
$c_city = $_POST['c_city']; 
$c_contact = $_POST['c_contact'];
$c_address = $_POST['c_address'];

move_uploaded_file($c_image_tmp,"customer_images/$c_image");

$update_c = "update customers set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass', customer_city='$c_city', customer_contact='$c_contact', customer_address='$c_address', customer_image='$c_image' where customer_id = '$customer_id'";

$run_update = mysqli_query($con, $update_c);

if($run_update){

echo "<script>alert('Your account successfully Updated')</script>";
echo "<script>window.open('my_account.php','_self')</script>";
}

}

 ?>