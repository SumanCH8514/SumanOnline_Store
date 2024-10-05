<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Charger Section > SumanOnline Shop</title>
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
            .caption h3{
                font-size: 1.8rem;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
require 'header.php';
?>
            <div class="container">
                <div class="jumbotron">
                    <h2><center>Mobile Chargers</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/battery-charger/e/i/e/ep-t2510n-samsung-original-imahf3t8fqttbmyx.jpeg?q=70&crop=false" width="200px" alt="SAMSUNG 25 W GaN 3 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SAMSUNG 25 W GaN 3 A</h3>
                                    <p>SAMSUNG 25 W GaN 3 A Wall Charger for Mobile (White)</p>
                                     <p><span style="color: red;">-41% off </span> <br>Price: ₹999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(62)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=62" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                        <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/battery-charger/3/8/e/ep-t2510n-samsung-original-imahf3t7btmh733s.jpeg?q=70&crop=false" width="200px" alt="SAMSUNG 25 W GaN 3 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SAMSUNG 25 W GaN 3 A</h3>
                                    <p>SAMSUNG 25 W GaN 3 A Wall Charger for Mobile (Black)</p>
                                     <p><span style="color: red;">-41% off </span> <br>Price: ₹999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(63)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=63" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/shopsy-battery-charger/6/h/a/yes-no-80w-for-one-plus-12-12r-11-10-9-8-pro-charger-supervooc-original-imah48tzspdmgsaf.jpeg?q=70&crop=false" width="125px" alt="HOMEMO 80 W SuperVOOC 6 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HOMEMO 80 W SVOOC 6 A</h3>
                                    <p>Wall Charger for Mobile with Detachable Cable (White, Red, Cable Included)</p>
                                    <p><span style="color: red;">-64% off </span> <br>Price: ₹1,299</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(64)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=64" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/kdoup3k0/battery-charger/r/q/b/boat-wcd-qc3a-with-type-c-cable-original-imafugptqajqhm7r.jpeg?q=70&crop=false" width="110px" alt="boAt 18W Power WCD QC3A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt 18W Power WCD QC3A</h3>
                                    <p>boAt 18W Power WCD QC3A Charger combo (Type C )  (White, Cable Included)</p>
                                    <p><span style="color: red;">-65% off </span> <br>Price: ₹ 349</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(65)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=65" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/battery-charger/e/e/v/-original-imagqjh6vnuhhyfv.jpeg?q=70&crop=false" width="127px" alt="Mi 10 W Supercharge 2 A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mi 10 W Supercharge 2 A</h3>
                                    <p>Mi 10 W Supercharge 2 A Wall Charger for Mobile with Detachable Cable (Black, Cable Included)</p>
                                    <p><span style="color: red;">-33% off </span> <br>Price: ₹4,499</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(66)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=66" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/battery-charger/w/y/x/-original-imagwcbp7gdh9q5q.jpeg?q=70&crop=false" width="140px" alt="Apple 20W ,USB-C">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Apple 20W USB-C</h3>
                                    <p>Apple 20W ,USB-C Power Charging Adapter for iPhone, iPad & AirPods  (White)</p>
                                    <p><span style="color: red;">-58% off </span> <br>Price: ₹1,499</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(67)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=67" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/battery-charger/g/e/h/-original-imaggwxekxuasfqk.jpeg?q=70&crop=false" width="152px" alt="Mi 22.5 W Quick Charge 3 A Wall Charger for Mobile with Detachable Cable  (White, Cable Included)">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mi 22.5 W Quick Charge</h3>
                                    <p>with Zen ENC Mic, 35H Battery Life, Low Latency Gaming, Made in India, 5.3v Bluetooth  (Pine Green, True Wireless)</p>
                                    <p><span style="color: red;">-40% off </span> <br>Price: ₹ 599</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(68)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=68" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="">
                            <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/battery-charger/a/u/a/25w-super-fast-charger-for-samsung-galaxy-f15-5g-fast-charger-original-imah4jdnfgmkqusp.jpeg?q=70&crop=false" width="175px" alt="RoarX 25 W Quick Charge ">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>RoarX 25 W Quick Charge </h3>
                                    <p>3 A Wall Charger for Mobile  (White, Superfast Charger For Samsung Galaxy F15 5g Fast Charger Adapter)</p>
                                    <p><span style="color: red;">-79% off </span> <br>Price: ₹ 344</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(69)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=69" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
    if (check_if_added_to_cart(45)) {
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
