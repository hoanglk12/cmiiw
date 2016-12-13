<?php
session_start();
if(!isset($_SESSION['user_email'])){

  echo "<script>window.open('login.php','_self')</script>";

}
else{
 ?>
<table width="795" align="center" bgcolor="pink">
  <tr align="center">
    <td colspan="4"><h2 style="text-align:center;">View All Categories Here</h2></td>
  </tr>

  <tr align="center" bgcolor="#5cf1b3">
    <th>Category ID</th>
    <th>Category Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>


  <?php
  include("includes/db.php");

  $get_cat = "select *from categories";

  $run_cat = mysqli_query($con, $get_cat);

  $i = 0;

  while($row_cat = mysqli_fetch_array($run_cat)){

    $cat_id = $row_cat['cat_id'];
    $cat_title = $row_cat['cat_title'];
    $i++;
    ?>

   <tr align="center">
     <td><?php echo $i ?></td>
     <td><?php echo $cat_title ?></td>
     <td><a href="index.php?edit_cat=<?php echo $cat_id; ?>"><img src="images/edit-icon.png" width="20" height="20" /></a></td>
     <td><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>"><img src="images/icon-delete.png" width="20" height="20" /></a></td>

   </tr>

   <?php
}

    ?>

</table>
<?php } ?>
