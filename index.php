<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="shortcut icon"
      href="https://sumanonline.com/Photos/apple-touch-icon.png"
      type="fevicon"
    />
    <title>SumanOnline Store! > Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- External CSS -->

    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div>
      <?php

require 'header.php';
?>
      <div id="bannerImage">
        <div class="container">
          <center>
            <div id="bannerContent">
              <h1>We're On sell.</h1>
              <p>
                Flat 40% - 90% OFF on all premium brands. <br />Only On
                <b>SumanOnline Store</b>
              </p>
              <a href="#mainCont" class="btn btn-danger">Shop Now</a>
            </div>
          </center>
        </div>
      </div>
      <div id="mainCont">
        <h3>Electronic Devices & Computers</h3>
        <div id="cont">
          <div id="product" class="product">
            <a href="Camera.php">
            <div class="item">
              <img src="img/item/2.png" alt="Camera" />
              <h4>Camera</h4>
              <p>Modern new Technology Camera</p>
            </div>
            </a>
            <!-- <div class="item"></div>
                <div class="item"></div> -->
          </div>
          <div id="product" class="product">
          <a href="Mobile.php">
            <div class="item">
              <img src="img/item/1.png" alt="Camera" />
              <h4>Mobile</h4>
              <p>Modern new Technology Camera</p>
            </div>
          </div>
          </a>
          <div id="product" class="product">
          <a href="Laptop.php">
            <div class="item">
              <img src="img/item/3.png" alt="Camera" />
              <h4>Laptop</h4>
              <p>Modern new Technology Camera</p>
            </div>
          </div>
          </a>
        </div>
      </div>

      <div id="mainCont">
        <h3>Headphones and Earbuds </h3>
        <div id="cont">
            <div id="product" class="product">
            <a href="Headphones.php">
                <div class="item">
                    <img src="img/item/5.png" alt="Camera">
                    <h4>Headphones</h4>
                    <p>Modern new Technology Camera</p>
                </div>
                <!-- <div class="item"></div>
                <div class="item"></div> -->
            </div>
            </a>
            <div id="product" class="product">
            <a href="Earbuds.php">
            <div class="item">
                    <img src="img/item/6.png"  alt="Camera">
                    <h4>Earbuds</h4>
                    <p>Modern new Technology Camera</p>
                </div>
            </div>
            </a>
            <div id="product" class="product">
            <a href="Neckband.php">
            <div class="item">
                    <img src="img/item/7.png" alt="Camera">
                    <h4>Neckband Headphones</h4>
                    <p>Modern new Technology Camera</p>
                </div>
            </div>
            </a>
        </div>

        <div id="mainCont">
            <h3>Mobile Accessories</h3>
            <div id="cont">
                <div id="product" class="product">
                <a href="Charger.php">
                    <div class="item">
                        <img src="img/item/8.png" alt="Camera">
                        <h4>Mobile Charger</h4>
                        <p>Modern new Technology Camera</p>
                    </div>
                    </a>
                    <!-- <div class="item"></div>
                    <div class="item"></div> -->
                </div>
                <div id="product" class="product">
                <a href="Cables.php">
                <div class="item">
                        <img src="img/item/9.png"  alt="Camera">
                        <h4>Charging Cables</h4>
                        <p>Modern new Technology Camera</p>
                    </div>
                    </a>
                </div>
                <div id="product" class="product">
                <a href="Powerbanks.php">
                <div class="item">
                        <img src="img/item/10.png" alt="Camera">
                        <h4>Powerbanks</h4>
                        <p>Modern new Technology Camera</p>
                    </div>
                </div>
                </a>
            </div>
      <br /><br />
      <br />
      <footer class="footer">
        <div class="container">
          <center>
            <p>
              Copyright &copy
              <a href="https://SumanOnline.Com">SumanOnline Store </a>| All
              Rights Reserved.
            </p>
          </center>
        </div>
      </footer>
    </div>
  </body>
</html>
