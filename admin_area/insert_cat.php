<?php
session_start();
if(!isset($_SESSION['user_email'])){

  echo "<script>window.open('login.php','_self')</script>";

}
else{
 ?>
<form action="" method="post" style="padding:60px;">
  <b style="color:yellow;">Insert New Category</b>
  <input type="text" name="new_cat" required=""/>
  <input type="submit" name="add_cart" value="Add Category" />

</form>

<?php

include("includes/db.php");

if(isset($_POST['add_cart'])){

$new_cat = $_POST['new_cat'];

$insert_cat = "insert into categories(cat_title) values ('$new_cat')";

$run_cat = mysqli_query($con, $insert_cat);

if($run_cat){

  echo "<script>alert('New Category Has Been Inserted!')</script>";
  echo "<script>window.open('index.php?view_cats','_self')</script>";
}
}
 ?>
<?php } ?>
