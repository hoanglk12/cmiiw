<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>This is admin area</title>
    <link rel="stylesheet" href="styles/login_style.css" media="all" />
    <link rel="stylesheet" href="styles/font_awesome.css" media="all" />
    <link rel="stylesheet" href="styles/font-awesome.min.css" media="all" />
  </head>
  <body>
  <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<div class="login">

<h2 style="margin: 3% 30%; font-family:'Oswald', sans-serif;"> Admin Login </h2>

  <form action="login.php" method="post">
    <input type="text" class="text" name="email" required="">
     <span>email</span>
     <br>
     <br>
     <input type="password" class="text" name="password" required="">
    <span>password</span>
    <br>
    <button class="signin" type="submit" name="login">Login</button>
    <hr>
    <a href="#">Forgot Password?</a>
  </form>
  </div>
  </body>
</html>
<?php

include("includes/db.php");

	if(isset($_POST['login'])){

		$email = mysql_real_escape_string($_POST['email']);
		$pass = mysql_real_escape_string($_POST['password']);

	$sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";

	$run_user = mysqli_query($con, $sel_user);

	 $check_user = mysqli_num_rows($run_user);

	if($check_user==1){

	$_SESSION['user_email']=$email;

	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";

	}
	else {

	echo "<script>alert('Password or Email is wrong, try again!')</script>";

	}


	}
	?>
