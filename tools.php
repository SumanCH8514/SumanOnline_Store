<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Product > SumanOnline Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="shortcut icon" href="https://sumanonline.com/Photos/apple-touch-icon.png" type="fevicon">
        <style>
            #btttn {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                align-items: center;  /* Changed from justify-items to align-items */
                margin: auto;
                width: 100%;  /* Changed from 60% to 100% for responsiveness */
                padding: 20px;  /* Added padding for better spacing */
                flex-wrap: wrap;  /* Added to wrap buttons on smaller screens */
                }
                @media (max-width: 768px) {
  #btttn {
    flex-direction: column;
    justify-content: space-around;
  }
}

@media (480px) {
  #btttn {
    flex-direction: column;
    justify-content: center;
  }
  #btttn button {
    width: 100%;
    margin-bottom: 10px;
  }
}


        </style>

    </head>
    <body>
        <div>
            <?php
require 'header.php';
?>
            <!-- <div class="container">
                <div class="jumbotron">
                    <h2><center>SumanOnline Store!</center></h2>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div> -->
            <br><br><br>
            <div id="btttn">
  <button type="button" class="btn btn-default btn-lg btn-small">
    <a href="add_product_view.php" class="text-light" style="text-decoration:none">View Product from Database</a>
  </button><br>
  <button type="button" class="btn btn-primary btn-lg btn-small">
    <a href="add_product.php" class="text-light" style="text-decoration:none; color: white;">Add Product To Database</a>
  </button><br>
  <button type="button" class="btn btn-default btn-lg btn-small">
    <a href="" class="text-light" style="text-decoration:none">Admin Panel</a>
  </button><br>
  <button type="button" class="btn btn-primary btn-lg btn-small">
    <a href="" class="text-light" style="text-decoration:none; color: white;">Reset Password</a>
  </button><br>
  <button type="button" class="btn btn-default btn-lg btn-small">
    <a href="" class="text-light" style="text-decoration:none">Project Credits</a>
  </button><br>
  <button type="button" class="btn btn-primary btn-lg btn-small">
    <a href="" class="text-light" style="text-decoration:none; color: white;">Change Password</a>
  </button><br>
</div>

            <br><br><br><br><br><br>
            <?php
require 'footer.php';
?>
        </div>
    </body>
</html>
