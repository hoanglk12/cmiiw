<?php require 'shared/header.php'; ?>

<section>
  <div class="container">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">
            <?php 

             global $con;

  $get_brands = "select * from brands";

  $run_brands = mysqli_query($con, $get_brands);

  while ($row_brands = mysqli_fetch_array($run_brands)){

     
      if($brand_id == $row_brands['brand_id'] ){ break; }
echo "$brand_title ";

  }

          
    ?>
      
    </li>
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
          <h2 class="title text-center">Features Items</h2>
          <?php getCatPro(); ?>
          <?php getBrandPro(); ?>
        </div>
      </div><!--features_items-->
    </div>
  </div>
</section>

<?php require 'shared/footer.php'; ?>