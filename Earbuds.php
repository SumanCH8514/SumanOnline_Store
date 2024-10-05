<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Earbuds Section > SumanOnline Shop</title>
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
                    <h2><center>Earbuds</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/p/r/z/enco-buds-2-oppo-original-imagh9frfp7gxdb3.jpeg?q=70&crop=false" width="100px" alt="OPPO Enco Buds 2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>OPPO Enco Buds 2</h3>
                                    <p>with 28 hours Battery life & Deep Noise Cancellation Bluetooth  (Midnight, True Wireless)</p>
                                     <p><span style="color: red;">-67% off </span> <br>Price: ₹1,299</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(45)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=45" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/c/6/a/-original-imahyrha4unythg4.jpeg?q=70&crop=false" width="183px" alt="boAt Immortal 161 ">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Immortal 161 </h3>
                                    <p>Beast Mode(40ms Low Latency), 40 HRS Playback & 13mm Drivers Bluetooth  (Black Sabre, True Wireless)</p>
                                    <p><span style="color: red;">-74% off </span> <br>Price: ₹899</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(46)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=46" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/f/y/f/-original-imahy3uqgtzmdsge.jpeg?q=70&crop=false" width="180px" alt="realme Buds T110">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>realme Buds T110</h3>
                                    <p>AI ENC for calls, upto 38 hours of Playback and Fast Charging Bluetooth  (Punk Black, True Wireless)</p>
                                    <p><span style="color: red;">-64% off </span> <br>Price: ₹1,299</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(47)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=47" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/v/f/m/-original-imagz5z4cknamu9d.jpeg?q=70&crop=false" width="130px" alt="boAt Airdopes Supreme Cancelling">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Supreme buds</h3>
                                    <p>w/ 4 Mics AI ENx Tech, 50 HRS Playback,Multi Point Connectivity Bluetooth  (Classic Black, True Wireless)</p>
                                    <p><span style="color: red;">-85% off </span> <br>Price: ₹999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(48)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=48" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/h/e/h/buds-3-e509a-oneplus-original-imagwynyzms78bsg.jpeg?q=70&crop=false" width="100px" alt="OnePlus Buds 3 TWS">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>OnePlus Buds 3 TWS</h3>
                                    <p>in Ear Earbuds with Sliding Volume Control and 49dB ANC Bluetooth Gaming  (Metallic Gray IN, True Wireless)</p>
                                    <p><span style="color: red;">-33% off </span> <br>Price: ₹4,499</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(49)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=49" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/v/y/o/-original-imagt3vwuweuwk9v.jpeg?q=70&crop=false" width="160px" alt="realme Buds T300">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>realme Buds T300</h3>
                                    <p>with 12.4mm Driver, 30dB ANC, 360 Spatial Audio and 40 hours Playback Bluetooth  (Stylish Black, True Wireless)</p>
                                    <p><span style="color: red;">-58% off </span> <br>Price: ₹1,699</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(50)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=50" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/1/y/s/-original-imagt5cwr7bpuzzt.jpeg?q=70&crop=false" width="152px" alt="Boult W20">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Boult W20</h3>
                                    <p>with Zen ENC Mic, 35H Battery Life, Low Latency Gaming, Made in India, 5.3v Bluetooth  (Pine Green, True Wireless)</p>
                                    <p><span style="color: red;">-68% off </span> <br>Price: ₹799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(51)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=51" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/o/z/8/-original-imagtr2n2wzggxuh.jpeg?q=70&crop=false" width="153px" alt="Boult Z40 Pro">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Boult Z40 Pro</h3>
                                    <p>with 100H Battery, Quad Mic ENC, Scratch Proof, Rubber Grip Design, 5.3v Bluetooth  (Jungle, True Wireless)</p>
                                    <p><span style="color: red;">-79% off </span> <br>Price: ₹1,199</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(52)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=52" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/6.png" alt="Suman Buds NQ">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Suman Buds NQ</h3>
                                    <p>Comes with 28 hours Battery life & Deep Noise Cancellation Bluetooth  (multi-Color, True Wireless)</p>
                                     <p><span style="color: red;">-67% off </span> <br>Price: ₹1,799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(53)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=53" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
}
}
?>

                                </div>
                            </center>
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
