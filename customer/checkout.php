
<?php require 'shared/header.php'; ?>



<main class="site-content">


        <?php  $ip = getIp();?>

        <div id="products_box">

          <?php

          if(!isset($_SESSION['customer_email'])){

            include("customer_login.php");

          }
          else{

            include ("payment.php");

          }

           ?>
        </div>

  
</main>
<?php require 'shared/footer.php' ?>
