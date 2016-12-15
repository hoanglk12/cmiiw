
<?php
session_start();
include("functions/functions.php");
?>
<?php require 'shared/header.php'; ?>

<main class="site-content">
    <section id="slider">
            <!-- Carousel -->
            <div id="shop-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#shop-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#shop-carousel" data-slide-to="1"></li>
                    <li data-target="#shop-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <b><h1>WELCOME TO OUR CMIIW SHOP</h1></b>
                                <p>DON'T THINK JUST LET IT FLOW</p>
                                <button type="button" class="btn btn-default get"><b>Join with us</b></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption">
                                    <div class="col-sm-6 col-md-6">
                                        <b><h1>WITH US</h1></b>
                                        <p>Patience, attentiveness, knowledge, communication, time, calming, listening, caring.</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <b><h1>WITH YOU</h1></b>
                                        <p>Easy to use, fast, convenient, interests, trading, participated in the annual event.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <b><h1>ONE DAY ONE KNOWLEDGE</h1></b>
                                    <p>You don't know how to dress right? Don't worry, let's us make for you.</p>
                                    <button type="button" class="btn btn-default get"><b>Join with us</b></button>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#shop-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#shop-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#shop-carousel -->
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
          <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
          </div><!--/shipping-->
          
        </div>
      </div>
      <?php cart(); ?>
      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Features Items</h2>
          <?php getPro(); ?>
          <?php getCatPro(); ?>
          <?php getBrandPro(); ?>
        </div>
      </div><!--features_items-->
    </div>
  </div>
</section>
</main>
<?php require 'shared/footer.php'; ?>