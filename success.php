<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $user_id = $_GET['id'];
    $confirm_query = "update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Order Success > SumanOnline Shop</title>
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
      html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }

      #cont {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      #first {
        text-align: center;
        margin-bottom: 20px;
      }

      #first img {
        margin: 0 auto;
      }

      #second {
        border: 1px solid #ddd;
        border-radius: 6px;
        width: 50%;
        padding: 20px;
        background: #f7f7f7;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
      }

      #second p {
        text-align: center;
        font-size: 16px;
      }
      #second p a {
        text-decoration: none;
      }
      @media only screen and (max-width: 768px) {
        #second {
          width: 90%;
        }
      }

      @media only screen and (max-width: 480px) {
        #first img {
          width: 200px;
        }
        #first h1 {
          font-size: 25px;
        }
        #second {
          width: 95%;
          padding: 10px;
        }
        #second p {
          font-size: 14px;
        }
      }
    </style>
    </head>
    <body>
        <div>
            <?php
require 'header.php';
?>
            <br>
            <div id="cont">
      <div id="first">
        <img
          src="https://i.gifer.com/7efs.gif"
          alt="order confirmation status"
        />
        <h1>Order Placed Successfully</h1>
      </div>
      <div id="second">
        <p>
          You Have Selected Pay On Delivery <strong>(COD)</strong>. <br />
          Your Package will be Delivered within 7 days. <br />
          <strong>Team SumanOnline Store</strong>
          <br />
          Thank you for shopping with us. <br /><a href="index.php"
            >Click here</a
          >
          to purchase any other item.
        </p>
      </div>
      <h3 style="text-align: center; font-weight:bold;"><a style="text-decoration: none;" href="index.php">Continue Shopping...</a></h3>
      <br><br><br>
      <meta http-equiv="refresh" content="8; url=index.php#mainCont" />
    </div>
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
