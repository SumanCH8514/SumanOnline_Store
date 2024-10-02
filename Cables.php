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
                                <img src="img/item/mobile/1.png" alt="SAMSUNG Galaxy F05">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SAMSUNG Galaxy F05</h3>
                                     <p><span style="color: red;">-51% off </span> <br>Price: ₹28,995</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(13)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/mobile/2.png" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SAMSUNG Galaxy S23 5G</h3>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹17,500</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(14)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/mobile/3.png" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>SAMSUNG Galaxy M34 5G</h3>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹9,995</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(15)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/mobile/4.png" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Motorola Edge 50 Pro 5G</h3>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹12,750</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(16)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/mobile/5.png" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>POCO M6 5G (8 GB RAM)</h3>
                                    <p><span style="color: red;">-51% off </span> <br>Price: ₹7,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(17)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/mobile/6.png" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Motorola Edge 50 Fusion (12 GB RAM)</h3>
                                    <p><span style="color: red;">-21% off </span> <br>Price: ₹20,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(18)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=18" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/item/mobile/7.png" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Nothing Phone (2a) Plus (12 GB RAM)</h3>
                                    <p><span style="color: red;">-31% off </span> <br>Price: ₹25,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(19)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=19" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <img src="img/item/mobile/8.png" alt="vivo T3 Ultra (Frost Green, 256 GB)  (8 GB RAM)">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>vivo T3 Ultra Frost Green (8 GB RAM)</h3>
                                    <p><span style="color: red;">-31% off </span> <br>Price: ₹33,999</p>
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
} else {
    if (check_if_added_to_cart(20)) {
        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
    } else {
        ?>
                                                <a href="cart_add.php?id=20" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
    if (check_if_added_to_cart(9)) {
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
