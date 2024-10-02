<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Mobile Section > SumanOnline Shop</title>
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
    </head>
    <body>
        <div>
            <?php
require 'header.php';
?>
            <div class="container">
                <div class="jumbotron">
                    <h2><center>Mobiles</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/l5fnhjk0/dslr-camera/f/t/m/eos-r10-24-2-r10-canon-original-imagg42fsbgv79da.jpeg?q=70&crop=false" width="192px" alt="Canon EOS R10 Mirrorless Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Canon EOS R10 Mirrorless Camera</h3>
                                    <p>Body with RF-S 18 - 150 mm f/3.5 - 6.3 IS STM Lens Kit  (Black)</p>
                                     <p><span style="color: red;">-25% off </span> <br>Price: ₹89,990</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(29)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=29" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>

                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/dslr-camera/n/p/t/eos-r50-24-2-r50-canon-original-imagngc7syac8pfd.jpeg?q=70&crop=false" width="220px" alt="Canon EOS R50 Mirrorless Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Canon EOS R50 Mirrorless Camera</h3>
                                    <p>Body with RF - S 18 - 45 mm f/4.5 - 6.3 IS STM  (Black)</p>
                                    <p><span style="color: red;">-19% off </span> <br>Price: ₹60,990</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(30)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=30" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/dslr-camera/1/9/j/d7500-20-9-d7500-nikon-original-imah3ubrv5y2vynk.jpeg?q=70&crop=false" width="220px" alt="NIKON D7500 DSLR Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>NIKON D7500 DSLR Camera</h3>
                                    <p>Camera Body with 18-140 mm Lens  (Black)</p>
                                    <p><span style="color: red;">-26% off </span> <br>Price: ₹69,990</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(31)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=31" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://rukminim2.flixcart.com/image/416/416/k3q76a80/camera/7/9/u/sony-apsc-ilce-6600-b-in5-mirrorless-original-imafm6mtahhva36r.jpeg?q=70&crop=false" width="210px" alt="SONY Alpha ILCE-6600 APS-C Mirrorless Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SONY Alpha ILCE-6600 APS-C Mirrorless Camera</h3>
                                    <p>Body Only Featuring Eye AF and 4K movie recording  (Black)</p>
                                    <p><span style="color: green;">Special price </span><br><span style="color: red;">-51% off </span> <br>Price: ₹62,990</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(32)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=32" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgPuL9YJG5xDud-fDtCOe3kytKleb1WrCks_kgtOARwFdnnF77FyeeqENXoIqx3cQa5WptAY1QR7nnFdlBQivHt6L2nuT0BjN4m0o1TC0uuHfoDuv1IkO11Zo2eG3CVrfu1mH_OtMQM91qM-Tes0s4jDV2MT3ybxeY4JWYvM2oKD4Qkjmzm3eS3qH36Pk4m" width="160" alt="SONY Alpha ILCE-7M4 Full Frame Mirrorless Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SONY Alpha ILCE-7M4 Full Frame Mirrorless Camera</h3>
                                    <p>Camera Body Featuring Eye AF and 4K movie recording  (Black)</p>
                                    <p><span style="color: red;">-19% off </span> <br>Price: ₹1,94,490</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(33)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=33" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://rukminim2.flixcart.com/image/416/416/kw9krrk0/dslr-camera/q/l/w/-original-imag8z5wwaqtq9bz.jpeg?q=70&crop=false" width="192px" alt="SONY Alpha ILCE-7M3K Full Frame Mirrorless Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SONY Alpha ILCE-7M3K Full Frame Mirrorless Camera</h3>
                                    <p>Camera with 28-70 mm Zoom LensFeaturing Eye AF and 4K movie recording  (Black)</p>
                                    <p><span style="color: red;">-21% off </span> <br>Price: ₹1,41,490</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(34)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=34" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/dslr-camera/i/o/c/eos-r100-24-1-eos-r100-kit-canon-original-imagqeydhsxgacxp.jpeg?q=70&crop=false" width="200px" alt="Canon R100 Mirrorless Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Canon R100 Mirrorless Camera</h3>
                                    <p>Camera RF-S 18-45mm f/4.5-6.3 IS STM  (Black)</p>
                                    <p><span style="color: green;">Special price </span><br><span style="color: red;">-38% off </span> <br>Price: ₹39,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(35)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=35" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <img src="https://rukminim2.flixcart.com/image/416/416/jfbfde80/camera/n/r/n/canon-eos-eos-3000d-dslr-original-imaf3t5h9yuyc5zu.jpeg?q=70&crop=false" width="192px" alt="Canon EOS 3000D DSLR Camera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Canon EOS 3000D DSLR Camera</h3>
                                    <p>Camera 1 Body, 18 - 55 mm Lens  (Black)</p>
                                    <p><span style="color: green;">Special price </span><br><span style="color: red;">-31% off </span> <br>Price: ₹29,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(36)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=36" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://m.media-amazon.com/images/I/810r4UYHrEL._SX679_.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SWISS Stainless Steel Black Watch</h3>
                                    <p><span style="color: red;">-80% off </span> <br>Price: ₹399</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(37)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://m.media-amazon.com/images/I/91SI-aSfIcL._SX679_.jpg" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Charles Raymond Bling-ed Watch</h3>
                                     <p><span style="color: red;">-80% off </span> <br>Price: ₹6,912</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(10)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://m.media-amazon.com/images/I/71QoSMBhfVL._SX679_.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Fossil Analog White Dial Men's Watch</h3>
                                     <p><span style="color: red;">-80% off </span> <br>Price: ₹14,495</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(11)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="https://m.media-amazon.com/images/I/61InZfmdTeL._SX679_.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>DIOLLO Analog Mechanical Watch</h3>
                                     <p><span style="color: red;">-80% off </span> <br>Price: ₹7,299</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(12)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>-->
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                <p>Copyright &copy <a href="https://SumanOnline.Com">SumanOnline Store.</a>| All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
