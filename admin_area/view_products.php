<?php
if(!isset($_SESSION['user_email'])){

  echo "<script>window.open('login.php','_self')</script>";

}
else{
?>
<table width="795" align="center" bgcolor="pink">
  <tr align="center">
    <td colspan="4"><h2 style="text-align:center;">View All Products Here</h2></td>
  </tr>
  <tr align="center" bgcolor="#5cf1b3">
    <th>S.N</th>
    <th>Title</th>
    <th>Image</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>


  <?php
  include("includes/db.php");

  $get_pro = "select *from products";

  $run_pro = mysqli_query($con, $get_pro);

  $i = 0;

  while($row_pro = mysqli_fetch_array($run_pro)){

    $pro_id = $row_pro['product_id'];
    $pro_title = $row_pro['product_title'];
    $pro_image = $row_pro['product_image'];
    $pro_price = $row_pro['product_price'];
    $i++;
    ?>

   <tr align="center">
     <td><?php echo $i ?></td>
     <td><?php echo $pro_title ?></td>
     <td><img src="product_images/<?php echo $pro_image ?>"width="50" height="50"></td>
     <td><?php echo "$" . $pro_price ?></td>
     <td><a href="index.php?edit_pro=<?php echo $pro_id; ?>"><img src="images/edit-icon.png" width="20" height="20" /></a></td>
     <td><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>"><img src="images/icon-delete.png" width="20" height="20" /></a></td>

   </tr>

   <?php
}

    ?>

</table>
<?php  }?>
