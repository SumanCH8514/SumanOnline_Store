<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting > SumanOnline Shop</title>
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
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <h1>Change Password</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change Password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
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
