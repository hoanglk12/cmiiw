
<?php require 'shared/header.php'; ?>

<main class="site-content">



<section id="cart_items">
    <div class="container">
      <div class="table-responsive cart_info">
      <form action="" method="post" enctype="multipart/form-data">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              
              <td class="remove" style="padding: 20px">Remove</td>
              <td class="products">Item</td>
              <td class="description"></td>
              <td class="quantity">Quantity</td>
              <td class="price">Price</td>

            </tr>
          </thead>

          <?php
            $total = 0;

            global $con;

            $ip = getIp();

            $sel_price = "select * from cart where ip_add = '$ip'";

            $run_price = mysqli_query($con, $sel_price);

            while($p_price = mysqli_fetch_array($run_price)){

              $pro_id = $p_price['p_id'];

              $pro_price = "select * from products where product_id='$pro_id'";

              $run_pro_price = mysqli_query($con, $pro_price);

              while($pp_price = mysqli_fetch_array($run_pro_price)){

                $product_price = array($pp_price['product_price']);

                $product_title = $pp_price['product_title'];

                $product_image = $pp_price['product_image'];

                $single_price = $pp_price['product_price'];

                $values = array_sum($product_price);

                $total += $values;

              ?>


          <tbody>



            <tr>
              <td class="cart_delete"><input type="checkbox"  style="margin: 19px 17px 0"    name="remove[]" value="<?php echo $pro_id; ?>"/></td>
              <td class="cart_products"><img src="admin_area/product_images/<?php echo $product_image;?>" width="110" height="110"></td>
              <td class="cart_description"><?php echo $product_title; ?></td>
              <td class="cart_quantity"><input type="text" size="3" name="qty" value="<?php echo $_SESSION['qty']; ?>"/></td>

              <?php
                if(isset($_POST['update_cart'])){

                  $qty = $_POST['qty'];

                  $update_qty = "update cart set qty='$qty'";

                  $run_qty = mysqli_query($con, $update_qty);

                  $_SESSION['qty'] = $qty;

                  $total = $total*$qty;

                }
               ?>


              <td class="cart_price"><p><?php echo "$" . $single_price; ?></p></td>
            </tr>

            <?php
          }

        }
             ?>

             <tr align="right">
               <td colspan="4"><b style="color: orange">Total: </b></td>
               <td><?php echo "$" . $total;?></td>
             </tr>

             

          </table>
          <div class="col-md-8">
          </div>
          <div class="col-md-4">
               <a><input type="submit" name="update_cart" value="Update Cart" /></a>
               <a><input type="submit" name="continue" value="Continue Shopping" /></a>
               <a><button><a href="checkout.php" style="text-decoration:none;color:black;">Checkout</a></button></a>
             </div>

        </form>

        <?php


          global $con;

          $ip = getIp();

          if(isset($_POST['update_cart'])){

            foreach($_POST['remove'] as $remove_id){

              $delete_product  = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";

              $run_delete = mysqli_query($con, $delete_product);

              if($run_delete){

                echo "<script>window.open('cart.php','_self')</script>";
              }

            }

}

          if(isset($_POST['continue'])){

            echo  "<script>window.open('index.php','_self')</script>";
          }


         ?>

        </tbody>

  </section> <!--/#cart_items-->

</main>

  <?php require 'shared/footer.php'; ?>