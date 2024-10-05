<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Cable Section > SumanOnline Shop</title>
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
                    <h2><center>Cables & More</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/data-cable/usb-type-c-cable/9/c/3/oem-65w-10w-6-5a-vooc-warp-dash-supervooc-superdart-charger-original-imah52f2rw3f6gzz.jpeg?q=70&crop=false" width="160px"  alt="Flipkart SmartBuy USB Type C Cable">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Flipkart SmartBuy USB Type C Cable</h3>
                                    <p>8 A 1 m Silver Wrap OEM 65W-10W/6.5A CHARGER</p>
                                     <p><span style="color: red;">-81% off </span> <br>Price: ₹199</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(70)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=70" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/data-cable/lightning-cable/h/2/9/konnect-view-27w-type-c-to-8-pin-fast-charging-cable-with-data-original-imah4v3grqfxggyh.jpeg?q=70&crop=false" width="170px" alt="Portronics Lightning Cable 3 A 1.2 m">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Portronics Lightning Cable 3 A 1.2 m</h3>
                                    <p>Konnect View 27W Type C to 8 PIN Fast Charging Cable with Data Sync</p>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹449</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(71)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=71" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/keekmfk0/data-cable/usb-type-c-cable/h/y/e/boat-type-c-a320-original-imafv2qhqzks4hbj.jpeg?q=70&crop=false" width="92px" alt="boAt USB Type C Cable 3 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt USB Type C Cable 3 A</h3>
                                    <p>Type C Cable 3 A 1.5 m A320  (Compatible with Mobiles, Tablets & any other device, Black)</p>
                                    <p><span style="color: red;">-91% off </span> <br>Price: ₹99</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(72)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=72" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/data-cable/e/j/l/-original-imagtq7ap2jtzgqg.jpeg?q=70&crop=false" width="167px"  alt="boAt USB Type C Cable">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt USB Type C Cable</h3>
                                    <p>Type C Cable 1.5 m C300  (Compatible with Mobile, Tablet, Black)</p>
                                    <p><span style="color: red;">-85% off </span> <br>Price: ₹149</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(73)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=73" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/data-cable/lightning-cable/q/s/3/deuce-usb-500-stress-resistant-sturdy-2-in-1-micro-portronics-original-imah4v3hytts9tvy.jpeg?q=70&crop=false" width="187px" alt="Portronics Lightning Cable 3 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Portronics Lightning Cable 3 A</h3>
                                    <p>1.2 m Deuce USB 500 Stress Resistant,Sturdy 2-in-1 Micro</p>
                                    <p><span style="color: red;">-71% off </span> <br>Price: ₹199</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(74)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=74" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/data-cable/lan-cable/n/c/3/m-lan-cable-cat6-cat-6-ethernet-cable-network-cable-internet-original-imah57rgtcyd8cz5.jpeg?q=70&crop=false" width="160px" alt="hybite LAN Cable 30 m Meter ">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>hybite LAN Cable 30 m Meter</h3>
                                    <p>High Speed CAT6/Cat 6 Ethernet Cable Network Cable RJ45 LAN Wire High Speed Patch</p>
                                    <p><span style="color: red;">-76% off </span> <br>Price: ₹645</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(75)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=75" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/data-cable/hdmi-cable/0/6/w/4k-hdmi-cable-high-speed-hdmi-2-0-nylon-braided-cable-4k-60hz-original-imahyq2jaznn2q5r.jpeg?q=70&crop=false" width="140px" alt="Bestor HDMI Cable 3 m">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bestor HDMI Cable 3 m</h3>
                                    <p>4K HDMI Cable, High Speed HDMI 2.0 Nylon Braided Cable, 4K@60Hz, Ultra HD, 2K, 1080P</p>
                                    <p><span style="color: red;">-31% off </span> <br>Price: ₹609</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(76)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=76" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/tv-out-cable/usb-3-0-male-to-male-cable/1/d/t/type-a-male-to-type-a-male-cable-for-data-transfer-hard-drive-original-imaghez9ku7rb5k8.jpeg?q=70&crop=false" width="160px" alt="STORITE Reversible USB 2.0 2 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>STORITE Reversible USB 2.0 2 A</h3>
                                    <p>1.5 m USB 3.0 Type A Male to Type A Male Cable  (Compatible with Computers, laptops)</p>
                                    <p><span style="color: red;">-71% off </span> <br>Price: ₹ 289</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(77)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=77" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
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
