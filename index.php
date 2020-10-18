<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>Flash Store</title>
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
    </head>
    <body>
        <div id="maincontainer">
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome to Flash Store.</h1>
                       <p>Flat 10% OFF on all brands.</p>
                       <a href="products.php" class="btn btn-danger">Explore Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <footer class="footer" > 
               <div class="container" >

               <center>
               <p>Copyright &copy Flash Shopping Store. All Rights Reserved.</p>
                   <p>This website is developed by flash iiot</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>