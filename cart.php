<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$user_id = $_SESSION['id'];
$user_products_query = "select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
    //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
        <meta http-equiv="refresh" content="0; url=index.php" />
    <?php
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum = $sum + $row['price'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Shopping Cart > SumanOnline Shop</title>
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
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Product Name</th><th>Price</th><th></th>
                        </tr>
                       <?php
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$counter = 1;
while ($row = mysqli_fetch_array($user_products_result)) {

    ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name'] ?></th><th><?php echo "₹ " . $row['price'] ?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove from Cart</a></th>
                        </tr>
                       <?php $counter = $counter + 1;
}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum; ?>/-</th><th><a href="success.php?id=<?php echo $user_id ?>" class="btn btn-primary">Confirm COD Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br>
            <h3 style="text-align: center; font-weight:bold;"><a style="text-decoration: none;" href="index.php">Continue Shopping</a></h3>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="/">SumanOnline Shop</a> Store. All Rights Reserved.</p>

               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
