<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="https://sumanonline.com/Photos/apple-touch-icon.png" />
    <title>Logout > SumanOnline Shop</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="bootstrap/css/bootstrap.min.css"
      type="text/css"
    />
    <!-- jquery library -->
    <script
      type="text/javascript"
      src="bootstrap/js/jquery-3.2.1.min.js"
    ></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <style>
      #container {
        display: flex;
        flex-direction: column;
      }
      #main {
        width: 90%;
        height: 40%;
        /* border: 1px solid; */
        justify-content: center;
        justify-items: center;
        margin: 0 auto;
        text-align: center;
      }
      #main img {
        width: 300px;
        margin: 5px auto;
      }
      #main h3 a{
          text-decoration: none;
        }
      @media screen and (max-width: 340px) {
        #main img {
          width: 100px;
        }
        #main h1 {
          font-size: 10px;
        }

      }
    </style>
  </head>
  <body>
    <div>
      <?php
require 'header.php';
?>
      <br />
      <div id="container">
        <div id="main">
          <img src="img\user-logout.png" alt="User_Logout" />
          <h3>
            You have been logged out. <a href="login.php">Login again.</a>
          </h3>
        </div>
      </div>
      <br><br><br>
      <h4 style="text-align: center;">Redirecting you to Homepage...</h4>
      <meta http-equiv="refresh" content="5; url=index.php" />
      <br>
      <footer class="footer">
        <div class="container">
          <center>
            <p>
              Copyright &copy
              <a href="https://SumanOnline.Com">SumanOnline Store.</a>| All
              Rights Reserved.
            </p>
          </center>
        </div>
      </footer>
    </div>
  </body>
</html>
