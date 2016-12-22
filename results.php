<?php require 'shared/header.php'; ?>


<main class="site-content">
<section>
  <div class="container">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
        </ol>
      </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
          <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
          </div><!--/shipping-->

        </div>
      </div>

      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Search Results</h2>
          <?php
          if(isset($_GET['search'])){
          $search_query = $_GET['user_query'];
          $get_pro = "select *from products where product_keywords like '%$search_query%'";
          $run_pro = mysqli_query($con, $get_pro);
          $counts_result = mysqli_num_rows($run_pro);
          if($counts_result == 0 || $search_query == null || $search_query == " "){
            echo "<h2 style='padding:20px;'>No results found!</h2>";
          }
          else{

          while($row_pro = mysqli_fetch_array($run_pro)){
            $pro_id = $row_pro['product_id'];
            $pro_cat = $row_pro['product_cat'];
            $pro_brand = $row_pro['product_brand'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];
            echo "
            <div class='col-sm-4'>
              <div class='product-image-wrapper'>
                <div class='single-products'>
                  <div class='productinfo text-center'>
                    <img src='admin_area/product_images/$pro_image'/>
                    <h2>$ $pro_price</h2>
                    <p>$pro_title</p>
                    <a href='details.php?pro_id=$pro_id' class='btn btn-default add-to-cart'>Details</a>
                    <a href='index.php?add_cart=$pro_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                  </div>
                </div>
              </div>
            </div>
            ";
            }
          }
        }
?>
        </div>
      </div><!--features_items-->
    </div>
  </div>
</section>


</main>
<?php require 'shared/footer.php'; ?>
