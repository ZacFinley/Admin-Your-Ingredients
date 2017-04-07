<?php
include '../inc/header.php';
?>

<!-- MAIN BODY -->
  <div class = "container">
    <div class = "maincontent">
      <!--Header-->
      <!-- 1 Row stretching 12 Grid Block -->
      <div class="row visible-on" style="text-align:center;">
        <div class="col-lg-12"><h1>The Ingredients Shop</h1></div>
      </div>

      &nbsp; &nbsp;

      <!-- 2nd Row -->
      <div class="row visible-on">
        <!-- 1st Column stretching 6 Grid Blocks -->
        <div class="col-lg-6">
          <h3 style="text-align:center;">Ingredients</h3>
          &nbsp; &nbsp;
          <div class = "message">
          <p> Welcome to The Ingredients Shop home website.</p>
          <p> Here at The Ingredients Shop we make it our mission
            to supply our customers with the BEST ingredients we can find.</p>
          <p>Especially if you are looking for Cardomom, Sorrel, or Yams...</p>
          &nbsp; &nbsp;
          <p>Because that's honestly the only ingredients we supply. But DANG are
            these some good yams. Our focus is on keeping it simple, but supplying
            the best product possible in midst of that simplicity.</p>
          </div>
        </div>

        <!-- 2nd Column, contains carousel -->

        <div class="col-lg-5">
          <h3></h3>

          <!---Carousel
          I just copied the w3school demo, feel free to edit -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <!-- image on carousel doubles as link to ingredients page-->
                <a href="../lib/ingredient.php?=Cardamom">
                  <img src="../assets/image/Cardomom.jpg" alt="Cardomom">
                </a>
                <div class="carousel-caption">
                  <!-- Title's double as links to page of ingredient -->
                  <h3><a href="../lib/ingredient.php?=Cardamom">Cardamom</a></h3>
                  <p>Tasty Cardamom</p>
                  <!-- adding source for image -->
                  <p>Image Source : <a href="http://www.stylecraze.com/articles/health-benefits-of-cardamom/#gref"
                    target="_blank">
                    Stylecraze</a></p>
                </div>
              </div>

              <div class="item">
                <a href="../lib/ingredient.php?=Sorrel">
                <img src="../assets/image/sorrel.jpg" alt="Sorrel">
                </a>
                <div class="carousel-caption">
                  <h3><a href="../lib/ingredient.php?=Sorrel">Sorrel</a></h3>
                  <p>Yummy Sorrel</p>
                  <p>Image Source : <a href="http://www.moderndaygilligan.com/2010/12/sweet_sorrel.html"
                    target = "_blank">Modern Day Gilligan</a></p>
                </div>
              </div>

              <div class="item">
                <a href="../lib/ingredient.php?=Yams">
                  <img src="../assets/image/yam.jpg" alt="Flower">
                </a>
                <div class="carousel-caption">
                  <h3><a href="../lib/ingredient.php?=Yams">Yam</a></h3>
                  <p>Delicious Yams</p>
                  <p>Image Source : <a href="https://top5ofanything.com/list/7e762cf1/Yam-Producing-Countries"
                    target="_blank">Top 5 of Anything</a></p>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

        </div>
      </div>
    </div>

    <!-- 3rd Row -->
    <!-- I added this third row because I can't think
    of a better way to add padding to the bottom of the maincontent
    instide the sqare white div block -->

    <div class="row visible-on">
      <div class="col-lg-6"><p>            </p></div>
    </div>

  </div>

  <?php include '../inc/footer.php'; ?>