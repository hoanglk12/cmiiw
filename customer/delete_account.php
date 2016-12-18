<div class="signup-form">
<h2 style="color: red; text-align: center"><b>Do you really want to DELETE your account???</b></h2>
<form action ="" method ="post">


<input name="yes" type="submit" class="btn btn-danger" value="Yes"/>
<input name="no" type="submit" class="btn btn-success" value="No"/>

</form>
</div>

<?php 

include("includes/db.php");
	
	$user = $_SESSION['customer_email'];

	if(isset($_POST['yes'])){

		$delete_customer = "delete frm customer where customer_email='$user'";
		$run_customer = mysqli_query($con, $delete_customer);

		echo "<script>alert('We are really sorr, your account has been deleted!)</script>";
		echo "<script>window.open('../index.php','_self')</script>";
	}

	if(isset($_POST['no'])){
		
		echo "<script>window.open('my_account.php','_self')</script>";
	}

	

 ?>