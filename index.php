
<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
{   header('location: products.php');} 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Index</title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="includes/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="includes/js/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="includes/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <?php
         include "includes/header.php";
         ?>
        <div class="banner_image">
            <div class="container">
                <center> 
                    <div id="banner_content">
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
        </div>
        </div>
		<?php
         include "includes/footer.php";
         ?>
    </body>
</html>
