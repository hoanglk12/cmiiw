<?php require 'shared/header.php'; ?>

<main class="site-content">
<div class="container">

  <?php
          if(isset($_GET['pro_id'])){

          $product_id = $_GET['pro_id'];

          $get_pro = "select *from products where product_id = '$product_id'";

          $run_pro = mysqli_query($con, $get_pro);

          while($row_pro = mysqli_fetch_array($run_pro)){

            $pro_id = $row_pro['product_id'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];
            $pro_desc = $row_pro['product_desc'];

            echo "
                  <div class='col-sm-9'>
          <div class='product-details'><!--product-details-->
            <div class='col-sm-5'>
              <div class='view-product'>
                <img src='admin_area/product_images/$pro_image' alt='' />
              </div>
            </div>
            <div class='col-sm-7'>
              <div class='product-information'><!--/product-information-->
                <h2>$pro_title</h2>
                <span>
                  <span>$ $pro_price</span>
                  <label>Quantity:</label>
                  <input type='text' value='1' />
                  <a href='index.php?pro_id=$pro_id'>
                    <button type='button' class='btn btn-fefault cart'>
                      <i class='fa fa-shopping-cart'></i>Add to cart
                    </button>
                  </a>
            
                </span>
                <p><b>Describe:</b></p>
                <p>$pro_desc</p>
              </div><!--/product-information-->
            </div>
          </div><!--/product-details-->

</div>
            ";

          }

        }

?>

</div>
</main>
<?php require 'shared/footer.php'; ?>
