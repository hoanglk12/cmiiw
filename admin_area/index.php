<?php

session_start();
if(!isset($_SESSION['user_email'])){

  echo "<script>window.open('login.php','_self')</script>";

}
else{

 ?>
<html>
<head>
  <title>This is Admin Panel</title>
  <link rel="stylesheet" href="styles/style.css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>

    <div class="main_wrapper">

      <div id="header"></div>
      <div id="left">
        
        <h2 style="color:yellow; text-align:center;font-family: 'Lato', sans-serif;"><?php echo @$_GET['logged_in']; ?></h2>
        <?php

        if(isset($_GET['insert_product'])){
          include("insert_product.php");
        }

        if(isset($_GET['view_products'])){
          include("view_products.php");

        }

        if(isset($_GET['edit_pro'])){

          include("edit_pro.php");
        }

        if(isset($_GET['insert_cat'])){

          include("insert_cat.php");
        }

        if(isset($_GET['view_cats'])){

          include("view_cats.php");
        }

        if(isset($_GET['edit_cat'])){

          include("edit_cat.php");
        }

        if(isset($_GET['insert_brand'])){

          include("insert_brand.php");
        }

        if(isset($_GET['view_brands'])){

          include("view_brands.php");
        }

        if(isset($_GET['edit_brand'])){

          include("edit_brand.php");
        }

        if(isset($_GET['view_customers'])){

          include("view_customers.php");
        }
         ?>
      </div>
      <div id="right">
        <h3 style="text-align:center; color:yellow;">Manage Content</h3>

          <a href="index.php?insert_product">Insert New Product</a>
          <a href="index.php?view_products">View All Products</a>
          <a href="index.php?insert_cat">Insert New Category</a>
          <a href="index.php?view_cats">View All Categories</a>
          <a href="index.php?insert_brand">Insert New Brand</a>
          <a href="index.php?view_brands">View All Brands</a>
          <a href="index.php?view_customers">View Customers</a>
          <!-- <a href="index.php?iview_orders">View Orders</a>
          <a href="index.php?view_payments">View Payments</a> -->
          <a href="logout.php">Admin Logout</a>
      </div>
    </div>

  </body>
</html>
<?php } ?>