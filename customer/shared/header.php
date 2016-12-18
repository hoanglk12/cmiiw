
<?php
session_start();
include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CMIIW Shop - Your choose</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/fileinput.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       

</head><!--/head-->

<body class="site">
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 01677762712</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> cmiiwshop@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="logo pull-left">
                                <a href="../index.php"><img src="images/templatemo_logo.png" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><?php

                                      if(isset($_SESSION['customer_email'])){

                                        echo "<a href='../customer/my_account.php'><i class='fa fa-user'></i>" . $_SESSION['customer_email'] . "</a>";

                                    }else{

                                        echo "<a href='../customer/my_account.php'><i class='fa fa-user'></i>Account</a>";

                                    }

                                    ?></li>
                                    <li><a href="../checkout.php"><i class="fa fa-crosshairs"></i> Checkout(<?php total_price(); ?>)</a></li>
                                    <li><a href="../cart.php"><i class="fa fa-shopping-cart"></i> Cart(<?php total_items(); ?>)</a></li>
                                    <li><?php

                                      if(isset($_SESSION['customer_email'])){

                                        echo "<a href='logout.php'> <i class='fa fa-lock'></i>Logout</a>";


                                    }else{

                                        echo "<a href='checkout.php'> <i class='fa fa-lock'></i>Login</a>";

                                    }

                                    ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="../index.php"" class="active">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="../all_products.php">Products</a></li>
                                            <li><a href="../cart.php">Cart</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Categories<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li> <?php getCats();?></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Brand<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><?php getBrands();?></li>
                                        </ul>
                                    </li> 
                                    <!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>  -->

                                    <li><a href="contact-us.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            


                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

