<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Overhead Headphones Section > SumanOnline Shop</title>
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
                    <h2><center>Overhead Headphones</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/4/i/8/-original-imagrh3tgjpjkay5.jpeg?q=70&crop=false" width="192px" alt="JBL Tune 770NC Active Noise Cancelling">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>JBL Tune 770NC Active Noise Cancelling</h3>
                                    <p>70Hr Playtime, Fast Pair & Multi Connect Bluetooth  (Blue, On the Ear)</p>
                                     <p><span style="color: red;">-51% off </span> <br>Price: ₹5,499</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(37)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=37" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/ksw4ccw0/headphone/w/g/r/rockerz-450-boat-original-imag6cqqh49wjfy5.jpeg?q=70&crop=false" width="192px" alt="boAt Rockerz 450 w/ 40mm Drivers">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Rockerz 450 w/ 40mm Drivers</h3>
                                    <p>15 HRS Playback, Soft Padded Earcups Bluetooth  (Luscious Black, On the Ear)</p>
                                    <p><span style="color: red;">-62% off </span> <br>Price: ₹1,498</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(38)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=38" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/kz4gh3k0/headphone/c/v/r/-original-imagb7bmhdgghzxq.jpeg?q=70&crop=false" width="210px" alt="boAt Nirvanaa 751 ANC Hybrid">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Nirvanaa 751 ANC Hybrid Active Noise Cancellation</h3>
                                    <p>Active Noise Cancellation Bluetooth  (Bold Blue, On the Ear)</p>
                                    <p><span style="color: red;">-64% off </span> <br>Price: ₹2,798</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(39)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=39" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/y/e/g/-original-imagrh3th8hhnvf4.jpeg?q=70&crop=false" width="192px" alt="BL Tune 770NC Active Noise Cancelling">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>JBL Tune 770NC Active Noise Cancelling</h3>
                                    <p>70Hr Playtime, Fast Pair & Multi Connect Bluetooth Gaming  (Black, On the Ear)</p>
                                    <p><span style="color: red;">-45% off </span> <br>Price: ₹5,497</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(40)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=40" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/i/x/x/wh-ch510-sony-original-imagz5r5qqrsfteq.jpeg?q=70&crop=false" width="192px" alt="SONY WH-CH520 with 50 Hrs Playtime">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SONY WH-CH520 with 50 Hrs Playtime</h3>
                                    <p>DSEE Upscale, Multipoint Connection/Dual Pairing Bluetooth (Black, On the Ear)</p>
                                    <p><span style="color: red;">-33% off </span> <br>Price: ₹3,988</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(41)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=41" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/i/u/q/-original-imah4axkreh3thcg.jpeg?q=70&crop=false" width="192px" alt="Boult Q 70Hrs Battery, ENC Mic, 40mm Boosted Drivers">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Boult Q ENC Mic</h3>
                                    <p> 70 Hrs Playtime, 40mm Boosted Drivers, 4 EQ Modes, Supreme Bass, 5.4v Bluetooth & Wired (Beige, On the Ear)</p>
                                    <p><span style="color: red;">-70% off </span> <br>Price: ₹1,799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(42)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=42" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/ki3gknk0/headphone/0/y/t/cassette-wireless-skullcandy-original-imafxyhjqffbgf75.jpeg?q=70&crop=false" width="192px" alt="Skullcandy Cassette Wireless Headphones">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Skullcandy Cassette Wireless Headphones</h3>
                                    <p>22 Hr Battery,Microphone,works with iPhone Android Bluetooth  (Black, On the Ear, On the Ear)</p>
                                    <p><span style="color: red;">-75% off </span> <br>Price: ₹1,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(43)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=43" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/z/f/q/zeb-duke-2-wireless-headphone-with-mic-32-h-playback-call-original-imagg43rmeradmg4.jpeg?q=70&crop=false" width="100px" alt="ZEBRONICS Zeb-Duke 2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>ZEBRONICS Zeb-Duke 2</h3>
                                    <p>with 60h Backup, BT v5.4, Gaming Mode, ENC, Deep Bass, Dual Pairing Bluetooth  (Blue, On the Ear)</p>
                                    <p><span style="color: red;">-59% off </span> <br>Price: ₹899</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(44)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=44" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
