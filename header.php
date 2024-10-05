<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <link rel="shortcut icon" href="https://sumanonline.com/Photos/apple-touch-icon.png" type="fevicon">
                       <a href="index.php" class="navbar-brand">SumanOnline Store</a>
                   </div>


                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
if (isset($_SESSION['email'])) {
    ?>

                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="tools.php"><span class="glyphicon glyphicon-wrench"></span> Tools</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
} else {
    ?>

                            <!-- <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                           <?php
}
?>

                       </ul>

                       <ul class="nav navbar-nav navbar-left">


                            <li><a href="Mobile.php"><span class="glyphicon glyphicon-phone"></span> Mobile </a></li>
                           <li><a href="Laptop.php"><span class="glyphicon glyphicon-bookmark"></span> Laptop </a></li>
                           <li><a href="index.php#mainCont"><span class="glyphicon glyphicon-bookmark"></span> Products</a></li>
                       </ul>
                   </div>
               </div>
</nav>