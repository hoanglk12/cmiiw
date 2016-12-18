<?php require 'shared/header.php'; ?>


<main class="site-content">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="blog-post-area">
						<h2 class="title text-center">
							My Account
						</h2>

						<ul id="cats">
							<div class ='ava' >
								<?php 
								$user = $_SESSION['customer_email'];

								$get_img = "SELECT * FROM customers WHERE customer_email = '$user'";

								$run_img = mysqli_query($con, $get_img);

								$row_img = mysqli_fetch_array($run_img);

								$c_image = $row_img['customer_image'];

								$c_name = $row_img['customer_name'];

								echo " 
								<img src='customer_images/$c_image' width = '200' height = '200' style = '
								margin-bottom: 20px;
								border: 2px solid orange;
								border-radius: 10px;
								'/>"
								;

								?>
							</div>
							<li><a href="my_account.php?my_orders">My Orders</a></li>
							<li><a href="my_account.php?edit_account">Edit Account</a></li>
							<li><a href="my_account.php?change_pass">Change PassWord</a></li>
							<li><a href="my_account.php?delete_account">Delete Account</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div class="blog-post-area">
						<h2 class="title text-center">
							Welcome <?php echo $c_name; ?>
						</h2>

						<div>
							<?php
								if(isset($_GET['edit_account'])) 
								include("edit_account.php");
								if(isset($_GET['change_pass'])) 
								include("change_pass.php");
								if(isset($_GET['delete_account'])) 
								include("delete_account.php");
							?>	

						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php require 'shared/footer.php'; ?>