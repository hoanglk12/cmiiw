<?php
session_start();
if(!isset($_SESSION['user_email'])){

  echo "<script>window.open('login.php','_self')</script>";

}
else{
 ?>
<table width="795" align="center" bgcolor="pink">
  <tr align="center">
    <td colspan="4"><h2 style="text-align:center;">View All Brands Here</h2></td>
  </tr>

  <tr align="center" bgcolor="#5cf1b3">
    <th>Brand ID</th>
    <th>Brand Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>


  <?php
  include("includes/db.php");

  $get_brand = "select *from brands";

  $run_brand = mysqli_query($con, $get_brand);

  $i = 0;

  while($row_brand = mysqli_fetch_array($run_brand)){

    $brand_id = $row_brand['brand_id'];
    $brand_title = $row_brand['brand_title'];
    $i++;
    ?>

   <tr align="center">
     <td><?php echo $i ?></td>
     <td><?php echo $brand_title ?></td>
     <td><a href="index.php?edit_brand=<?php echo $brand_id; ?>"><img src="images/edit-icon.png" width="20" height="20" /></a></td>
     <td><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>"><img src="images/icon-delete.png" width="20" height="20" /></a></td>

   </tr>

   <?php
}

    ?>

</table>
<?php } ?>
