<?php
require 'connection.php';
session_start();
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>SignUp > SumanOnline Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="shortcut icon" href="https://sumanonline.com/Photos/apple-touch-icon.png" type="fevicon">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            #vvvvb a {
            color: white;

            }
            .form-group{
                display: flex;
                gap: 20px;
            }
            .form-group p{
               margin-top: 7px;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
require 'header.php';
?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true" autocomplete="given-name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                                <p>Existing User? <a href="login.php"><b>Log in</b></a></p>
                                <!-- <button type="button" class="btn btn-primary" id="vvvvb">
          <a href="login.php" style="text-decoration:none">Existing User? Log in</a>
        </button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
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
