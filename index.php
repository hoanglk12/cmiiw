 <!--Be starts at here-->
<html>
<head>
  <title>My Online Shop </title>
  <link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>
  <!--Main Container starts here-->
<div class="main_wrapper">

<!--Header starts here-->
  <div class="header_wrapper">

    <a href="index.php"><img id="logo" src="images/templatemo_logo.png" /></a>
    <img id="banner" src="images/ad_banner.jpg" />
  </div>
  <!--Header ends here-->

  <!--Navagation Bar starts-->
  <div class="menubar">
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="all_products.php">All Products</a></li>
      <li><a href="customer/my_account.php">My Account</a></li>
      <li><a href="#">Sign Up</a></li>
      <li><a href="cart.php">Shopping Cart</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>

<div id="form">
  <form method="get" action="results.php" enctype="multipart/form-data">
    <input type="text" name="user_query" placeholder="Search Product"/>
    <input type="submit" name="search" value="Search" />
</form>

</div>

  </div>
<!--Navagation Bar ends-->

<!--Content wrapper starts-->
  <div class="content_wrapper">

      <div id="sidebar">
        <div id="sidebar_title">Categories</div>

          <ul id="cats">
              <?php getCats();?>
          </ul>

          <div id="sidebar_title">Brands</div>

            <ul id="cats">

              <?php getBrands();?>


            </ul>


      </div>

      <div id="content_area">

        <?php cart(); ?>

        <div id="shopping_cart">

            <span style="float:right;font-size:18px;padding:5px;line-height:40px;">

              <?php

              if(isset($_SESSION['customer_email'])){

                echo "<b>Welcome: </b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'> Your</b>";

              }else{

                echo "<b>Welcome Guest:</b>";

              }

               ?>

            <b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?><a href="cart.php" style="color:yellow;"> Go to Cart</a>

              <?php

              if(!isset($_SESSION['customer_email'])){

                echo "<a href='checkout.php' style='color:orange;'>Login</a>";

              }else{

                echo "<a href='logout.php' style='color:orange;'>Logout</a>";

              }

               ?>

            </span>

        </div>

        <?php  $ip = getIp();?>

        <div id="products_box">

          <?php getPro(); ?>
          <?php getCatPro(); ?>
          <?php getBrandPro(); ?>

        </div>
      </div>
  </div>
<!--Content wrapper ends-->


  <div id="footer">

    <h2 style="text-align:center; padding-top:30px;">&copy; 2016 by www.goshirt.com</h2>

  </div>


</div>
  <!--Main Container ends here-->
</body>
</html>
