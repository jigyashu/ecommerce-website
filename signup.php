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
        <title>Login</title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="includes/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="includes/js/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="includes/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet">

    </head>
    <body>
          
		   <?php
         include "includes/header.php";
         ?>
              <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <form method='post' action="signup_script.php">
                        <h1>SIGN UP</h1>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                        </div>
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                           <div><?php
                           error_reporting(0);
                                                       echo $_GET['emailerror'];
                                                       error_reporting(0)?></div>
                           </div>
                          <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required = "true">

                        <div><?php
                        error_reporting(0);
                        echo $_GET['passworderror'];
                        error_reporting(0);?></div>
</div>
                          <div class="form-group">
                            <input type="tel" class="form-control" name="contact" placeholder="Contact" id="contact">
                        </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" id="city">
                        </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" id="address">
                        </div>
                          <div class="form-group">
                              <input type="submit" value="submit" class="btn btn-primary"> 
                        </div>
                    </form>
            </div>
        </div>
         <?php
		  include "includes/footer.php";
		  ?>
</html>
