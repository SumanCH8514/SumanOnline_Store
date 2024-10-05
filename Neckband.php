<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Neckband Section > SumanOnline Shop</title>
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
        <!-- <style>
            .thumbnail img{
                filter: drop-shadow(10px 10px 20px rgba(0, 0, 0, 0.5));


            }
        </style> -->
    </head>
    <body>
        <div>
            <?php
require 'header.php';
?>
            <div class="container">
                <div class="jumbotron">
                    <h2><center>Neckband</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/l4ei1e80/headphone/b/j/w/bullets-wireless-z2-oneplus-original-imagfaww7ga6nshz.jpeg?q=70&crop=false" width="170px" alt="OnePlus Bullets 2">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>OnePlus Bullets Z2</h3>
                                    <p>OnePlus Bullets Wireless Z2 Bluetooth (Acoustic Red, In the Ear)</p>
                                     <p><span style="color: red;">-43% off </span> <br>Price: ₹1,299</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(54)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=54" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/r/r/4/-original-imaguggqedr3ypyx.jpeg?q=70&crop=false" width="183px" alt="boAt Rockerz 110">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Rockerz 110</h3>
                                    <p>boAt Rockerz 110 with 40 HRS Playback, ENx Technology, Beast Mode & ASAP Charge Bluetooth (Active black, In the Ear)</p>
                                    <p><span style="color: red;">-64% off </span> <br>Price: ₹799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(55)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=55" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/7/a/8/bullets-wireless-z2-oneplus-original-imagpgskyzj6zhte.jpeg?q=70&crop=false" width="190px" alt="OnePlus E305A">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>OnePlus E305A</h3>
                                    <p>OnePlus E305A / E305B Bluetooth  (Jazz Green, In the Ear)</p>
                                    <p><span style="color: red;">-48% off </span> <br>Price: ₹1,299</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(56)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=56" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/t/4/p/-original-imagrddw8rpjwfag.jpeg?q=70&crop=false" width="165px" alt="realme Buds 3">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>realme Buds 3</h3>
                                    <p>30dB ANC, 360 degree Spatial Audio, upto 40 hours Playback Bluetooth (Pure Black, In the Ear)</p>
                                    <p><span style="color: red;">-45% off </span> <br>Price: ₹1,599</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(57)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=57" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/l2jcccw0/headphone/p/y/z/-original-imagdusk5eh9ewy9.jpeg?q=70&crop=false" width="113px" alt="boAt Rockerz 235 Pro">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Rockerz 235 Pro</h3>
                                    <p>upto 20 Hours Playback & ASAP Charge Bluetooth (Ash Grey, In the Ear)</p>
                                    <p><span style="color: red;">-73% off </span> <br>Price: ₹699</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(58)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=58" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/f/s/e/-original-imagzuzzgteshegg.jpeg?q=70&crop=false" width="150px" alt="boAt Rockerz 255 Pro+">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt Rockerz 255 Pro+</h3>
                                    <p>with ASAP Charge and upto 60 Hours Playback Bluetooth (Active Black, In the Ear)</p>
                                    <p><span style="color: red;">-64% off </span> <br>Price: ₹999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(59)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=59" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/k/s/1/-original-imagtwb7mazunzgd.jpeg?q=70&crop=false" width="152px" alt="Boult ProBass EQCharge">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Boult ProBass EQCharge</h3>
                                    <p>ZEN Mode ENC, 32hrs Playtime, Ultra-Fast Charging Bluetooth  (Blue, In the Ear)</p>
                                    <p><span style="color: red;">-68% off </span> <br>Price: ₹799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(60)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=60" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/o/w/8/-original-imahyfkkzhhxfegv.jpeg?q=70&crop=false" width="150px" alt="Nothing Neckband Pro">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Nothing Neckband Pro</h3>
                                    <p>50dB Active Noise Cancellation, Smart Dial Design, 37 Hrs playtime Bluetooth  (Orange, In the Ear)</p>
                                    <p><span style="color: red;">-49% off </span> <br>Price: ₹1,699</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(61)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=61" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
