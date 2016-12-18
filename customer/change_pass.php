

<div class="signup-form">
<h2>Change Your Password</h2>
<form action ="" method ="post">
<input type="password" name ="current_pass" placeholder="Enter Current Password" required> 
<input type="password" name ="new_pass" placeholder="Enter New Password" required> 
<input type="password" name ="new_pass_again" placeholder="Enter New Password Again" required>
<button name="change_pass" type="submit" class="btn btn-default">Change</button>
</form>
</div>

<?php 

include("includes/db.php");


	if(isset($_POST['change_pass'])){

		$user = $_SESSION['customer_email'];


		$current_pass = $_POST['current_pass'];
		$new_pass = $_POST['new_pass'];
		$new_again = $_POST['new_pass_again'];


		$sel_pass = "select * from customers where customer_pass='$current_pass' AND customer_email='$user'";

		$run_pass = mysqli_query($con, $sel_pass);

		$check_pass = mysqli_num_rows($run_pass);

		if($check_pass==0){

			echo "<script>alert('Your Current Password is wrong!')</script>";

		}

		if($new_pass!=$new_again){

			echo "<script>alert('New password do not match!')</script>";
			exit();

		}

		else{

			$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$user'";

			$run_update = mysqli_query($con, $update_pass);

			echo "<script>alert('Your password was updated succesfully!')</script>";
			echo "<script>window.open('my_account.php','_self')</script>";
		}
	}


 ?>
