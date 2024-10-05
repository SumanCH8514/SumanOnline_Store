<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Powerbanks Section > SumanOnline Shop</title>
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
                    <h2><center>Powerbanks</center></h2>
                    <!-- <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>-->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/x/0/a/-original-imagw4pwhfgbj9mg.jpeg?q=70&crop=false" width="130px" alt="boAt 20000 mAh 22.5 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>boAt 20000 mAh 22.5 W Power Bank</h3>
                                    <p>(Burgundy, Lithium Polymer, Fast Charging, Quick Charge 3.0, Power Delivery 3.0 for Mobile, Tablet)</p>
                                     <p><span style="color: red;">-68% off </span> <br>Price: ₹1,399</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(78)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=78" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/a/c/x/-original-imah45heessfc5jg.jpeg?q=70&crop=false" width="83px" alt="Mi 20000 mAh 33 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mi 20000 mAh 33 W Power Bank</h3>
                                    <p>(Black, Lithium-ion, Power Delivery 3.0 for Mobile, Earbuds, Speaker, Smartwatch, Trimmer, Tablet)</p>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹1,799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(79)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=79" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/u/q/f/-original-imagymk3ua34tdvd.jpeg?q=70&crop=false" width="70px" alt="Ambrane 10000 mAh 12 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ambrane 10000 mAh 12 W Power Bank</h3>
                                    <p>Compact Pocket Size Power Bank  (Black, Lithium Polymer, Fast Charging for Mobile)</p>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹599</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(80)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=80" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/d/q/c/luxcell-b-10000-por-2090-portronics-original-imahymzjmgzpezfd.jpeg?q=70&crop=false" width="75px"  alt="Portronics 10000 mAh 22.5 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Portronics 10000 mAh 22.5 W PB</h3>
                                    <p>10000 mAh 22.5 W Power Bank  (Green, Lithium Polymer, Fast Charging for Mobile)</p>
                                    <p><span style="color: red;">-63% off </span> <br>Price: ₹649</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(81)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=81" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/m/2/2/-original-imagymk38bds9yx7.jpeg?q=70&crop=false" width="145px" alt="Ambrane 20000 mAh 10.5 W PB">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ambrane 20000 mAh 10.5 W PB</h3>
                                    <p>Compact Pocket Size Power Bank  (Green, Lithium Polymer, Fast Charging for Earbuds)</p>
                                    <p><span style="color: red;">-61% off </span> <br>Price: ₹899</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(82)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=82" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/x/m/6/-original-imah3h9mrzhwz5mg.jpeg?q=70&crop=false" width="205px" alt="Intex 20000 mAh 12 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Intex 20000 mAh 12 W Power Bank</h3>
                                    <p>(Creamy White, Lithium Polymer, Fast Charging for Mobile)</p>
                                    <p><span style="color: red;">-62% off </span> <br>Price: ₹999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(83)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=83" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/power-bank/q/x/b/-original-imagzkeqhzhrbfg5.jpeg?q=70&crop=false" width="225px" alt="DURACELL 20000 mAh 22.5 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>DURACELL 20000 mAh 22.5 W PB</h3>
                                    <p>22.5 W Power Bank  (Multicolor, Lithium-ion, Fast Charging for Mobile)</p>
                                    <p><span style="color: red;">-21% off </span> <br>Price: ₹2,799</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(84)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=84" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="https://rukminim2.flixcart.com/image/416/416/kd7pevk0/power-bank/s/n/g/power-bank-10000-pb100lzm-redmi-original-imafu5entn9mvccq.jpeg?q=70&crop=false" width="120px" alt="REDMI 20000 mAh 18 W Power Bank">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>REDMI 20000 mAh 18 W Power Bank</h3>
                                    <p>18 W Power Bank  (Black, Lithium Polymer, Fast Charging for Mobile)</p>
                                    <p><span style="color: red;">-46% off </span> <br>Price: ₹1699</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(85)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=85" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
